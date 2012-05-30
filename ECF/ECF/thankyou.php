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
		<h3>Thank you</h3>
		<p>We have your information and will be in contact shortly.</p>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>