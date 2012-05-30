<?php

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("ecfdb") or die(mysql_error());

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--[if lt IE 8]>
<meta http-equiv="refresh" content="0; url=/ie6.html" />
<script type="text/javascript">
/* <![CDATA[ */
window.top.location = 'ie.html';
/* ]]> */
</script>
<![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Evan Cornish Foundation</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="js/ui-lightness/jquery-ui.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
		mode : "specific_textareas",
		editor_selector : "wysiwyg",

		theme : "advanced",
		plugins : "pagebreak,style,table,paste",

		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,bullist,numlist,hr,link,unlink,pasteword,|,styleselect,formatselect,|,code",	
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		content_css : "css/wysiwyg.css"

	});
	tinyMCE.init({
		mode : "specific_textareas",
		editor_selector : "wysiwyg2",

		theme : "advanced",
		plugins : "pagebreak,style,table",

		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,bullist,numlist,hr,link,unlink,|,styleselect,formatselect,|,code",	
		theme_advanced_buttons2 : "tablecontrols",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		content_css : "css/wysiwyg.css"

	});

	
function confirmSubmit()
{
var agree=confirm("Are you sure you want to delete this?");
if (agree)
	return true ;
else
	return false ;
}
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("#date").datepicker({ dateFormat: 'd MM, yy' });
	});
	</script>

</head>
<body>
<div id="headerbg">
<p id="logo"><img src="images/logo.png" /></p>
</div>
<p id="nav"><a href="index.php" <?php if($pageid==1 || $pageid==66) { ?>class="on"<?php } ?>>Home</a> | <a href="our-aims.php" <?php if($pageid==2) { ?>class="on"<?php } ?>>Our aims</a> | <a href="areas-we-support.php" <?php if($pageid==4 || $pageid==3 || $pageid==9) { ?>class="on"<?php } ?>>Areas we support</a> | <a href="how-to-apply.php" <?php if($pageid==5 || $pageid==27) { ?>class="on"<?php } ?>>How to apply</a> | <a href="about-us.php" <?php if($pageid==6 || $pageid==8) { ?>class="on"<?php } ?>>About us</a> | <a href="contact-us.php" <?php if($pageid==7) { ?>class="on"<?php } ?>>Contact us</a> | <a href="terms-and-conditions.php" <?php if($pageid==11 || $pageid==12 || $pageid==13 || $pageid==14) { ?>class="on"<?php } ?>>Information</a> | <a href="global.php" <?php if($pageid==16) { ?>class="on"<?php } ?>>Globals</a></p>

<?php if($pageid==1 || $pageid==66) { ?>

<p id="nav2">
<a href="index.php" <?php if($pageid==1) { ?>class="on"<?php } ?>>Boxes</a> | <a href="slides.php" <?php if($pageid==66) { ?>class="on"<?php } ?>>Slides</a>
</p>

<?php } ?>

<?php if($pageid==5 || $pageid==27) { ?>

<p id="nav2">
<a href="how-to-apply.php" <?php if($pageid==5) { ?>class="on"<?php } ?>>Overview</a> | <a href="documents.php" <?php if($pageid==27) { ?>class="on"<?php } ?>>Application Documents</a>
</p>

<?php } ?>

<?php if($pageid==4 || $pageid==3 || $pageid==9) { ?>

<p id="nav2">
<a href="areas-we-support.php" <?php if($pageid==4) { ?>class="on"<?php } ?>>Overview</a> | <a href="case-studies.php" <?php if($pageid==3) { ?>class="on"<?php } ?>>Case studies</a> | <a href="projects-supported.php" <?php if($pageid==9) { ?>class="on"<?php } ?>>Projects Supported</a>
</p>

<?php } ?>

<?php if($pageid==6 || $pageid==8) { ?>
<p id="nav2">
<a href="about-us.php" <?php if($pageid==6) { ?>class="on"<?php } ?>>Overview</a> | <a href="meetings-deadlines.php" <?php if($pageid==8) { ?>class="on"<?php } ?>>Meetings &amp; Deadlines</a>
</p>

<?php } ?>

<?php if($pageid==11 || $pageid==12 || $pageid==13 || $pageid==14) { ?>
<p id="nav2">
<a href="terms-and-conditions.php" <?php if($pageid==11) { ?>class="on"<?php } ?>>Terms and Conditions</a> | <a href="privacy.php" <?php if($pageid==12) { ?>class="on"<?php } ?>>Privacy</a> | <a href="accessibility.php" <?php if($pageid==13) { ?>class="on"<?php } ?>>Accessibility</a> | <a href="sitemap.php" <?php if($pageid==14) { ?>class="on"<?php } ?>>Sitemap</a>
</p>

<?php } ?>



<div id="container">