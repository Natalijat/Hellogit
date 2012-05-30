<?php 

$pageid = 8;

$pagetitle = "Terms and conditions";

require("header.php"); 

$result = mysql_query("SELECT * FROM footer WHERE id=1")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="terms-and-conditions.php">Terms and conditions</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>INFORMATION</h2>
		<ul id="sub-nav">
			<li class="current_page_item"><a href="terms-and-conditions.php">Terms and conditions</a></li>
			<li><a href="privacy.php">Privacy</a></li>
			<li><a href="accessibility.php">Accessibility</a></li>
			<li><a href="sitemap.php">Sitemap</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full" class="bulletio">
			<h1>Terms and conditions</h1>
			<?php echo $row['maincontent']; ?>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>