<?php

$pageid = 1;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$box1_title = addslashes($_POST['box1_title']);
	$box1_content = addslashes($_POST['box1_content']);
	$box2_title = addslashes($_POST['box2_title']);
	$box2_content = addslashes($_POST['box2_content']);
	$box3_title = addslashes($_POST['box3_title']);
	$box3_content = addslashes($_POST['box3_content']);
	$box4_title = addslashes($_POST['box4_title']);
	$box4_content = addslashes($_POST['box4_content']);
	
	$target = "../uploads/home/";
	$target5 = $target . basename( $_FILES['box2_img']['name']);
	$box2_img = basename( $_FILES['box2_img']['name']);
	
	
	$result7 = mysql_query("SELECT * FROM home")
or die(mysql_error());  

$row7 = mysql_fetch_array($result7);
	

if (empty($_FILES['box2_img']['tmp_name'])) {
	$box2_img = $row7['box2_img'];
}
	
	
	
	

mysql_query("UPDATE home SET box1_title='$box1_title', box1_content='$box1_content', box2_title='$box2_title', box2_content='$box2_content', box3_title='$box3_title', box3_content='$box3_content', box4_title='$box4_title', box4_content='$box4_content', box2_img='$box2_img' WHERE id=1") 
or die(mysql_error()); 

move_uploaded_file($_FILES['box2_img']['tmp_name'], $target5);


$message = "<p class='message'>You have successfully updated the Home page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM home WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Home</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="index.php" method="post">

<fieldset>
<legend>Box 1 (top left)</legend>

<p><label for="box1_title">Title</label><br /><input id="box1_title" name="box1_title" type="text" class="normal" value="<?php echo $row['box1_title']; ?>" /></p>

<p><label for="box1_content">Content</label><br /><textarea id="box1_content" name="box1_content" class="wysiwyg xlarge"><?php echo $row['box1_content']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Box 2 (top right)</legend>

<p><label for="box4_title">Title</label><br /><input id="box4_title" name="box4_title" type="text" class="normal" value="<?php echo $row['box4_title']; ?>" /></p>

<p><label for="box4_content">Content</label><br /><textarea id="box4_content" name="box4_content" class="wysiwyg xlarge"><?php echo $row['box4_content']; ?></textarea></p>

</fieldset>


<fieldset>
<legend>Box 3 (bottom left)</legend>

<p><label for="box3_title">Title</label><br /><input id="box3_title" name="box3_title" type="text" class="normal" value="<?php echo $row['box3_title']; ?>" /></p>

<p><label for="box3_content">Content</label><br /><textarea id="box3_content" name="box3_content" class="wysiwyg xlarge"><?php echo $row['box3_content']; ?></textarea></p>

</fieldset>
<fieldset>
<legend>Box 4 (bottom right)</legend>

<p><label for="box2_title">Title</label><br /><input id="box2_title" name="box2_title" type="text" class="normal" value="<?php echo $row['box2_title']; ?>" /></p>

<p><label for="box2_content">Content</label><br /><textarea id="box2_content" name="box2_content" class="wysiwyg xlarge"><?php echo $row['box2_content']; ?></textarea></p>

<p><label for="box2_img">Image (168x198)</label><br /><?php echo $row['box2_img']; ?><br /><input name="box2_img" id="box2_img" class="filebtn" type="file" /></p>

</fieldset>




        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>