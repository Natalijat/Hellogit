<?php

$pageid = 2;

require("header.php"); 

$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM ouraims WHERE id='$id'")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Our Aims: <?php echo $row['name']; ?></h2>

<form enctype="multipart/form-data" action="our-aims.php" method="post">

<input name="id" type="hidden" value="<?php echo $row['id']; ?>" />

<fieldset>
<legend>Details</legend>

<p><label for="name">Page and Nav Title</label><br /><input id="name" name="name" type="text" class="normal" value="<?php echo $row['name']; ?>" /></p>

<p><label for="orderi">Order</label><br /><input id="orderi" name="orderi" type="text" class="small" value="<?php echo $row['orderi']; ?>" /></p>


</fieldset>


<fieldset>
<legend>Landing Page</legend>

<p><label for="blurb">Rollover Text</label><br /><input id="blurb" name="blurb" type="text" class="normal" value="<?php echo $row['blurb']; ?>" /></p>

<p><label for="img_blurb">Landing Page Image (210x143)</label><br /><?php echo $row['img_blurb']; ?><br /><input name="img_blurb" id="img_blurb" class="filebtn" type="file" /></p>

</fieldset>



<fieldset>
<legend>Content</legend>
        
<p><label for="maincontent">Main Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

<p><label for="img_1">Image 1 (202x149)</label><br /><?php echo $row['img_1']; ?><br /><input name="img_1" id="img_1" class="filebtn" type="file" /></p>


</fieldset>

        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /> <a href="case-studies.php">Cancel<a/></p>
        
        </form>
        
        <?php require("footer.php"); ?>