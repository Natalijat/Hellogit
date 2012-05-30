<?php

$pageid = 66;

require("header.php"); 

if(isset($_POST['edit'])){ 

	$slide_btn_name = $_POST['slide_btn_name'];
	$slide_btn_link = $_POST['slide_btn_link'];
	$slide_btn_x = $_POST['slide_btn_x'];
	$slide_btn_y = $_POST['slide_btn_y'];
	
	$slide_btn_name2 = $_POST['slide_btn_name2'];
	$slide_btn_link2 = $_POST['slide_btn_link2'];
	$slide_btn_x2 = $_POST['slide_btn_x2'];
	$slide_btn_y2 = $_POST['slide_btn_y2'];
	
	$slide_btn_name3 = $_POST['slide_btn_name3'];
	$slide_btn_link3 = $_POST['slide_btn_link3'];
	$slide_btn_x3 = $_POST['slide_btn_x3'];
	$slide_btn_y3 = $_POST['slide_btn_y3'];

	$slide_btn_name4 = $_POST['slide_btn_name4'];
	$slide_btn_link4 = $_POST['slide_btn_link4'];
	$slide_btn_x4 = $_POST['slide_btn_x4'];
	$slide_btn_y4 = $_POST['slide_btn_y4'];
	
	$slide1_active = $_POST['slide1_active'];
	$slide2_active = $_POST['slide2_active'];
	$slide3_active = $_POST['slide3_active'];
	$slide4_active = $_POST['slide4_active'];

	$target = "../uploads/home/";
	$target1 = $target . basename( $_FILES['slide1']['name']);
	$slide1 = basename( $_FILES['slide1']['name']);
	
	$target2 = $target . basename( $_FILES['slide2']['name']);
	$slide2 = basename( $_FILES['slide2']['name']);
	
	$target3 = $target . basename( $_FILES['slide3']['name']);
	$slide3 = basename( $_FILES['slide3']['name']);
	
	$target4 = $target . basename( $_FILES['slide4']['name']);
	$slide4 = basename( $_FILES['slide4']['name']);
	
	
	$result7 = mysql_query("SELECT * FROM home")
or die(mysql_error());  

$row7 = mysql_fetch_array($result7);
	
	
	if (empty($_FILES['slide1']['tmp_name'])) {
	$slide1 = $row7['slide1'];
}
if (empty($_FILES['slide2']['tmp_name'])) {
	$slide2 = $row7['slide2'];
}
if (empty($_FILES['slide3']['tmp_name'])) {
	$slide3 = $row7['slide3'];
}
if (empty($_FILES['slide4']['tmp_name'])) {
	$slide4 = $row7['slide4'];
}
	
	
	

mysql_query("UPDATE home SET slide1='$slide1', slide2='$slide2', slide3='$slide3', slide4='$slide4', slide1_active='$slide1_active', slide2_active='$slide2_active', slide3_active='$slide3_active', slide4_active='$slide4_active', slide_btn_name='$slide_btn_name', slide_btn_link='$slide_btn_link', slide_btn_x='$slide_btn_x', slide_btn_y='$slide_btn_y', slide_btn_name2='$slide_btn_name2', slide_btn_link2='$slide_btn_link2', slide_btn_x2='$slide_btn_x2', slide_btn_y2='$slide_btn_y2', slide_btn_name3='$slide_btn_name3', slide_btn_link3='$slide_btn_link3', slide_btn_x3='$slide_btn_x3', slide_btn_y3='$slide_btn_y3', slide_btn_name4='$slide_btn_name4', slide_btn_link4='$slide_btn_link4', slide_btn_x4='$slide_btn_x4', slide_btn_y4='$slide_btn_y4' WHERE id=1") 
or die(mysql_error()); 

move_uploaded_file($_FILES['slide1']['tmp_name'], $target1);
move_uploaded_file($_FILES['slide2']['tmp_name'], $target2);
move_uploaded_file($_FILES['slide3']['tmp_name'], $target3);
move_uploaded_file($_FILES['slide4']['tmp_name'], $target4);


$message = "<p class='message'>You have successfully updated a slide on the Home page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM home WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Slides on Home</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="slides.php" method="post">

<fieldset>
<legend>Slides</legend>

<p><label for="slide1">Slide 1 (908x290)</label><br /><?php echo $row['slide1']; ?><br /><input name="slide1" id="slide1" class="filebtn" type="file" /></p>

<p><input type="checkbox" name="slide1_active" id="slide1_active" value="1" <?php if($row['slide1_active'] == '1') { ?>checked<?php } ?> /><label for="slide1_active" class="chkbox">Slide 1 active</label></p>

<p><label for="slide2">Slide 2 (908x290)</label><br /><?php echo $row['slide2']; ?><br /><input name="slide2" id="slide2" class="filebtn" type="file" /></p>

<p><input type="checkbox" name="slide2_active" id="slide2_active" value="1" <?php if($row['slide2_active'] == '1') { ?>checked<?php } ?> /><label for="slide2_active" class="chkbox">Slide 2 active</label></p>

<p><label for="slide3">Slide 3 (908x290)</label><br /><?php echo $row['slide3']; ?><br /><input name="slide3" id="slide3" class="filebtn" type="file" /></p>

<p><input type="checkbox" name="slide3_active" id="slide3_active" value="1" <?php if($row['slide3_active'] == '1') { ?>checked<?php } ?> /><label for="slide3_active" class="chkbox">Slide 3 active</label></p>

<p><label for="slide4">Slide 4 (908x290)</label><br /><?php echo $row['slide4']; ?><br /><input name="slide4" id="slide4" class="filebtn" type="file" /></p>

<p><input type="checkbox" name="slide4_active" id="slide4_active" value="1" <?php if($row['slide4_active'] == '1') { ?>checked<?php } ?> /><label for="slide4_active" class="chkbox">Slide 4 active</label></p>
 
</fieldset>

<fieldset>
<legend>Slide 1 Button</legend>

<p><label for="slide_btn_name">Button name</label><br /><input id="slide_btn_name" name="slide_btn_name" type="text" class="normal" value="<?php echo $row['slide_btn_name']; ?>" /></p>

<p><label for="slide_btn_link">Button link</label><br /><input id="slide_btn_link" name="slide_btn_link" type="text" class="normal" value="<?php echo $row['slide_btn_link']; ?>" /></p>

<p><label for="slide_btn_x">Button Position Left</label><br /><input id="slide_btn_x" name="slide_btn_x" type="text" class="normal" value="<?php echo $row['slide_btn_x']; ?>" /></p>

<p><label for="slide_btn_y">Button Position Top</label><br /><input id="slide_btn_y" name="slide_btn_y" type="text" class="normal" value="<?php echo $row['slide_btn_y']; ?>" /></p>

</fieldset>

<fieldset>
<legend>Slide 2 Button</legend>

<p><label for="slide_btn_name2">Button name</label><br /><input id="slide_btn_name2" name="slide_btn_name2" type="text" class="normal" value="<?php echo $row['slide_btn_name2']; ?>" /></p>

<p><label for="slide_btn_link2">Button link</label><br /><input id="slide_btn_link2" name="slide_btn_link2" type="text" class="normal" value="<?php echo $row['slide_btn_link2']; ?>" /></p>

<p><label for="slide_btn_x2">Button Position Left</label><br /><input id="slide_btn_x2" name="slide_btn_x2" type="text" class="normal" value="<?php echo $row['slide_btn_x2']; ?>" /></p>

<p><label for="slide_btn_y2">Button Position Top</label><br /><input id="slide_btn_y2" name="slide_btn_y2" type="text" class="normal" value="<?php echo $row['slide_btn_y2']; ?>" /></p>

</fieldset>

<fieldset>
<legend>Slide 3 Button</legend>

<p><label for="slide_btn_name3">Button name</label><br /><input id="slide_btn_name3" name="slide_btn_name3" type="text" class="normal" value="<?php echo $row['slide_btn_name3']; ?>" /></p>

<p><label for="slide_btn_link3">Button link</label><br /><input id="slide_btn_link3" name="slide_btn_link3" type="text" class="normal" value="<?php echo $row['slide_btn_link3']; ?>" /></p>

<p><label for="slide_btn_x3">Button Position Left</label><br /><input id="slide_btn_x3" name="slide_btn_x3" type="text" class="normal" value="<?php echo $row['slide_btn_x3']; ?>" /></p>

<p><label for="slide_btn_y3">Button Position Top</label><br /><input id="slide_btn_y3" name="slide_btn_y3" type="text" class="normal" value="<?php echo $row['slide_btn_y3']; ?>" /></p>

</fieldset>

<fieldset>
<legend>Slide 4 Button</legend>

<p><label for="slide_btn_name4">Button name</label><br /><input id="slide_btn_name4" name="slide_btn_name4" type="text" class="normal" value="<?php echo $row['slide_btn_name4']; ?>" /></p>

<p><label for="slide_btn_link4">Button link</label><br /><input id="slide_btn_link4" name="slide_btn_link4" type="text" class="normal" value="<?php echo $row['slide_btn_link4']; ?>" /></p>

<p><label for="slide_btn_x4">Button Position Left</label><br /><input id="slide_btn_x4" name="slide_btn_x4" type="text" class="normal" value="<?php echo $row['slide_btn_x4']; ?>" /></p>

<p><label for="slide_btn_y4">Button Position Top</label><br /><input id="slide_btn_y4" name="slide_btn_y4" type="text" class="normal" value="<?php echo $row['slide_btn_y4']; ?>" /></p>

</fieldset>


        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>