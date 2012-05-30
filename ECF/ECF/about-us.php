<?php 

$pageid = 5;

$pagetitle = "About us";

require("header.php"); 

$result = mysql_query("SELECT * FROM aboutus")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="about-us.php">About us</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>ABOUT US</h2>
		<ul id="sub-nav">
			 <li class="current_page_item"><a href="about-us.php">Overview</a></li>
			<li><a href="meetings-deadlines.php">Meeting dates &amp; application deadlines</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main">
			<h1>About us</h1>
			<div class="about-us-evan">
				<?php echo $row['aboutbox']; ?>
			</div>
			<?php echo $row['maincontent']; ?>
		</div>
		<div id="content-area-sidebar">
			<?php echo $row88['sidecontent']; ?>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>