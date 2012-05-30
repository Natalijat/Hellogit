<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<!--[if lt IE 8]>
<meta http-equiv="refresh" content="0; url=/ie6.html" />
<script type="text/javascript">
/* <![CDATA[ */
window.top.location = 'ie.html';
/* ]]> */
</script>
<![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Evan Cornish Foundation</title>
<link rel="stylesheet" href="slides_files/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="slides_files/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="slides_files/jquery-ui.css" type="text/css" media="screen">
<script type="text/javascript" src="slides_files/tiny_mce.js"></script>
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

		content_css : "css/wysiwyg.css",

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

		content_css : "css/wysiwyg.css",

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
<script type="text/javascript" src="slides_files/jquery.js"></script>
<script type="text/javascript" src="slides_files/jquery-ui.js"></script>
<script type="text/javascript">
	$(function() {
		$("#date").datepicker({ dateFormat: 'd MM, yy' });
	});
	</script>

</head><div FirebugVersion="1.3.3" style="display: none;" id="_firebugConsole"></div><body>
<p id="logo"><img src="slides_files/evan-cornish-foundation.gif"></p>
<p id="nav"><a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/index.php" class="on">Home</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/our-aims.php">Our aims</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/areas-we-support.php">Areas we support</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/how-to-apply.php">How to apply</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/about-us.php">About us</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/contact-us.php">Contact us</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/terms-and-conditions.php">Information</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/global.php">Globals</a></p>


<p id="nav">
<a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/index.php">Boxes</a> | <a href="http://staging.pixelgroup.co.uk/ecf/v2/admin/slides.php" class="on">Slides</a>
</p>








<div id="container">
<h2>Edit Slides on Home</h2>

<p class="message">You have successfully updated a slide on the Home page.</p>
<form enctype="multipart/form-data" action="slides.php" method="post">

<fieldset>
<legend>Slides</legend>

<p><label for="slide1">Slide 1 (908x290)</label><br>slide1.jpg<br><input name="slide1" id="slide1" class="filebtn" type="file"></p>

<p><input name="slide1_active" id="slide1_active" value="1" checked="checked" type="checkbox"><label for="slide1_active" class="chkbox">Slide 1 active</label></p>

<p><label for="slide2">Slide 2 (908x290)</label><br>test-slide1.gif<br><input name="slide2" id="slide2" class="filebtn" type="file"></p>

<p><input name="slide2_active" id="slide2_active" value="1" checked="checked" type="checkbox"><label for="slide2_active" class="chkbox">Slide 2 active</label></p>

<p><label for="slide3">Slide 3 (908x290)</label><br><br><input name="slide3" id="slide3" class="filebtn" type="file"></p>

<p><input name="slide3_active" id="slide3_active" value="1" type="checkbox"><label for="slide3_active" class="chkbox">Slide 3 active</label></p>

<p><label for="slide4">Slide 4 (908x290)</label><br><br><input name="slide4" id="slide4" class="filebtn" type="file"></p>

<p><input name="slide4_active" id="slide4_active" value="1" type="checkbox"><label for="slide4_active" class="chkbox">Slide 4 active</label></p>
 
</fieldset>

<fieldset>
<legend>Slide 1 Button</legend>

<p><label for="slide_btn_name">Button name</label><br><input id="slide_btn_name" name="slide_btn_name" class="normal" value="Our aims" type="text"></p>

<p><label for="slide_btn_link">Button link</label><br><input id="slide_btn_link" name="slide_btn_link" class="normal" value="our-aims.php" type="text"></p>

<p><label for="slide_btn_x">Button Position Top</label><br><input id="slide_btn_x" name="slide_btn_x" class="normal" value="230" type="text"></p>

<p><label for="slide_btn_y">Button Position Left</label><br><input id="slide_btn_y" name="slide_btn_y" class="normal" value="268" type="text"></p>

</fieldset>

<fieldset>
<legend>Slide 2 Button</legend>

<p><label for="slide_btn_name2">Button name</label><br><input id="slide_btn_name2" name="slide_btn_name2" class="normal" value="Test" type="text"></p>

<p><label for="slide_btn_link2">Button link</label><br><input id="slide_btn_link2" name="slide_btn_link2" class="normal" value="yoyoyo" type="text"></p>

<p><label for="slide_btn_x2">Button Position Top</label><br><input id="slide_btn_x2" name="slide_btn_x2" class="normal" value="50" type="text"></p>

<p><label for="slide_btn_y2">Button Position Left</label><br><input id="slide_btn_y2" name="slide_btn_y2" class="normal" value="400" type="text"></p>

</fieldset>

<fieldset>
<legend>Slide 3 Button</legend>

<p><label for="slide_btn_name3">Button name</label><br><input id="slide_btn_name3" name="slide_btn_name3" class="normal" value="" type="text"></p>

<p><label for="slide_btn_link3">Button link</label><br><input id="slide_btn_link3" name="slide_btn_link3" class="normal" value="" type="text"></p>

<p><label for="slide_btn_x3">Button Position Top</label><br><input id="slide_btn_x3" name="slide_btn_x3" class="normal" value="50" type="text"></p>

<p><label for="slide_btn_y3">Button Position Left</label><br><input id="slide_btn_y3" name="slide_btn_y3" class="normal" value="" type="text"></p>

</fieldset>

<fieldset>
<legend>Slide 4 Button</legend>

<p><label for="slide_btn_name4">Button name</label><br><input id="slide_btn_name4" name="slide_btn_name4" class="normal" value="" type="text"></p>

<p><label for="slide_btn_link4">Button link</label><br><input id="slide_btn_link4" name="slide_btn_link4" class="normal" value="" type="text"></p>

<p><label for="slide_btn_x4">Button Position Top</label><br><input id="slide_btn_x4" name="slide_btn_x4" class="normal" value="" type="text"></p>

<p><label for="slide_btn_y4">Button Position Left</label><br><input id="slide_btn_y4" name="slide_btn_y4" class="normal" value="" type="text"></p>

</fieldset>


        
<p class="submitbox"><input name="edit" value="Save" class="btn" type="submit"></p>
        
        </form>
        
        </div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-helper-hidden-accessible"></div></body></html>