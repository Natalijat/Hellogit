<?php

$pageid = 6;

$pagetitle = "Contact us";

require("header.php");

$result = mysql_query("SELECT * FROM contactus")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

 ?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="contact-us.php">Contact us</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>CONTACT US</h2>
		<ul id="sub-nav">
		</ul>
	</div>
	<div id="content-area">
		<div id="contact-details">
		<h1>Contact us</h1>
		<?php echo $row['maincontent']; ?>
		</div>
		<div id="contact-form">
			<p class="small-text">All fields are mandatory.</p>
			<form action="contact-process.php" id="contactform" method="post">
				<label for="name">Your name</label>
				<input id="name" name="name" type="text" class="required large" />
				<label for="email">Email address</label>
				<input id="email" name="email" type="text" class="required email large" />
				<label for="contact-type">Type of contact</label>
				<select id="contact-type" class="large" name="contact-type">
					<option>New enquiry</option>
					<option>Re-application</option>
				</select>
				<label for="subject">What is the subject?</label>
				<input id="subject" name="subject" type="text" class="required large" />
				<label for="message">And the message to us?</label>
				<textarea id="message" name="message" cols="" class="required large" rows=""></textarea>
				<input name="" type="submit" class="red-btn" value="Send" />
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>