<?php 

$pageid = 11;

$pagetitle = "Sitemap";

require("header.php"); 

$result = mysql_query("SELECT * FROM footer WHERE id=4")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="sitemap.php">Sitemap</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>INFORMATION</h2>
		<ul id="sub-nav">
			<li><a href="terms-and-conditions.php">Terms and conditions</a></li>
			<li><a href="privacy.php">Privacy</a></li>
			<li><a href="accessibility.php">Accessibility</a></li>
			<li class="current_page_item"><a href="sitemap.php">Sitemap</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1>Sitemap</h1>
			
			
			<div class="row">
				<div class="col">
					<h3>Home</h3>
					<p><a href="index.php">Home</a></p>
						<h3>Contact us</h3>
							<p><a href="contact-us.php">Contact us</a></p>
				</div>
				<div class="col">
					<h3>Our aims</h3>
					<p><a href="our-aims.php">Overview</a></p>
							<?php
				$query2 = "SELECT * FROM ouraims ORDER BY orderi ASC"; 
	 
				$result2 = mysql_query($query2) or die(mysql_error());


				while($row2 = mysql_fetch_array($result2)){
					echo "<p><a href='our-aim.php?id=";
					echo $row2['id'];
					echo "'>";
					echo $row2['name'];
					echo "</a></p>";
				}
				?>
				</div>
				<div class="col">
					<h3>Areas we support</h3>
					<p><a href="areas-we-support.php">Overview</a></p>
					<p><a href="projects-supported.php">Projects Supported</a></p>
					<h3>Case studies</h3>
					<p><a href="case-studies.php">Overview</a></p>
					<?php
				$query3 = "SELECT * FROM casestudies"; 
	 
				$result3 = mysql_query($query3) or die(mysql_error());


				while($row3 = mysql_fetch_array($result3)){
					echo "<p><a href='case-study.php?id=";
					echo $row3['id'];
					echo "'>";
					echo $row3['name'];
					echo "</a></p>";
				}
				?>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h3>How to apply</h3>
					<p><a href="how-to-apply.php">How to apply</a></p>
					<p><a href="application-form.php">Application Form</a></p>							
				</div>
				<div class="col">
					<h3>About us</h3>
					<p><a href="about-us.php">Overview</a></p>
					<p><a href="meetings-deadlines.php">Meeting dates &amp; application deadlines</a></p>

				</div>
				<div class="col">
						<h3>Information</h3>
							<p><a href="terms-and-conditions.php">Terms &amp; conditions</a></p>
							<p><a href="privacy.php">Privacy</a></p>
							<p><a href="accessibility.php">Accessibility</a></p>
							<p><a href="sitemap.php">Sitemap</a></p>
				</div>
			</div>
						
		</div>
	</div>
</div>
<?php require("footer.php"); ?>