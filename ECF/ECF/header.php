<?php
include 'dbConnect.php';
mysql_connect($db_host, $db_user, $db_password) or die(mysql_error());
mysql_select_db($db_db) or die(mysql_error());

$result88 = mysql_query("SELECT * FROM misc")
or die(mysql_error());  

$row88 = mysql_fetch_array( $result88 );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php if($pagetitle) { echo " $pagetitle | "; } ?>The Evan Cornish Foundation</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.73.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/ui.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<?php if($pagetitle == "Application form") { ?>

<?php } ?>
</head>
<body>
<div id="container">
<div id="wrapper">
<div id="header-area">
	<p id="logo"><a href="index.php"><img src="css/images/evan-cornish-foundation.gif" width="149" height="96" alt="Evan Cornish Foundation" /></a></p>
	<p id="caption"><?php echo $row88['helped_no']; ?></strong></p>
	<ul id="nav">
		<li><a href="index.php" class="nav-home<?php if ($pageid==1) { ?> on<?php } ?>">Home</a></li>
		<li><a href="our-aims.php" class="nav-our-aims<?php if ($pageid==2) { ?> on<?php } ?>">Our Aims</a></li>
		<li><a href="areas-we-support.php" class="nav-we-support<?php if ($pageid==3) { ?> on<?php } ?>">Areas We Support</a></li>
		<li style="clear: both;"><a href="how-to-apply.php" class="nav-how-apply<?php if ($pageid==4) { ?> on<?php } ?>">How To Apply</a></li>
		<li><a href="about-us.php" class="nav-about-us<?php if ($pageid==5) { ?> on<?php } ?>">About Us</a></li>
		<li><a href="contact-us.php" class="nav-contact-us<?php if ($pageid==6) { ?> on<?php } ?>">Contact Us</a></li>
	</ul>

</div>
