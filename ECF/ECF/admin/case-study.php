<?php

$pageid = 3;

require("header.php"); 

$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM casestudies WHERE id='$id'")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit case study: <?php echo $row['name']; ?></h2>

<form enctype="multipart/form-data" action="case-studies.php" method="post">

<input name="id" type="hidden" value="<?php echo $row['id']; ?>" />

<fieldset>
<legend>Details</legend>

<p><label for="title">Name</label><br /><input id="name" name="name" type="text" class="normal" value="<?php echo $row['name']; ?>" /></p>

<p><label for="location">Location</label><br /><input id="location" name="location" type="text" class="normal" value="<?php echo $row['location']; ?>" /></p>

<p><label for="date">Date</label><br /><input id="date" name="date" type="text" class="normal" value="<?php echo $row['date']; ?>" /></p>

<p><label for="category">Area</label><br />
<select id="category" name="category" class="normal">
  <option value="1" <?php if($row['category'] == '1') { ?>selected="selected"<?php } ?>>Education</option>
  <option value="2" <?php if($row['category'] == '2') { ?>selected="selected"<?php } ?>>Poverty</option>
  <option value="3" <?php if($row['category'] == '3') { ?>selected="selected"<?php } ?>>Elderly</option>
  <option value="4" <?php if($row['category'] == '4') { ?>selected="selected"<?php } ?>>Injustice</option>
  <option value="5" <?php if($row['category'] == '5') { ?>selected="selected"<?php } ?>>Health</option>
  <option value="6" <?php if($row['category'] == '6') { ?>selected="selected"<?php } ?>>Prisons</option>
</select>
</p>

<p><input type="checkbox" name="include_in_aws" id="include_in_aws" value="1" <?php if($row['include_in_aws'] == '1') { ?>checked<?php } ?> /><label for="include_in_aws" class="chkbox">Include in Areas We Support</label></p>

</fieldset>

<fieldset>
<legend>Landing Page</legend>

<p><label for="img_blurb">Landing Page Image (153x112)</label><br /><?php echo $row['img_blurb']; ?><br /><input name="img_blurb" id="img_blurb" class="filebtn" type="file" /></p>

<p><label for="blurb">Landing Page Text</label><br /><textarea id="blurb" name="blurb" class="normal"><?php echo $row['blurb']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Images</legend>
        
<p><label for="img_hero">Hero Image (416x234)</label><br /><?php echo $row['img_hero']; ?><br /><input name="img_hero" id="img_hero" class="filebtn" type="file" /></p>

<p><label for="img_hero_caption">Hero Image Caption</label><br /><input id="img_hero_caption" name="img_hero_caption" type="text" class="normal" value="<?php echo $row['img_hero_caption']; ?>" /></p>

<p><label for="img_1">Side Image 1 (202x149)</label><br /><?php echo $row['img_1']; ?><br /><input name="img_1" id="img_1" class="filebtn" type="file" /></p>

<p><label for="img_1_caption">Side Image 1 Caption</label><br /><input id="img_1_caption" name="img_1_caption" type="text" class="normal" value="<?php echo $row['img_1_caption']; ?>" /></p>

<p><label for="img_2">Side Image 2 (202x149)</label><br /><?php echo $row['img_2']; ?><br /><input name="img_2" id="img_2" class="filebtn" type="file" /></p>

<p><label for="img_2_caption">Side Image 2 Caption</label><br /><input id="img_2_caption" name="img_2_caption" type="text" class="normal" value="<?php echo $row['img_2_caption']; ?>" /></p>
                
<p><label for="img_logo">Logo Image</label><br /><?php echo $row['img_logo']; ?><br /><input name="img_logo" id="img_logo" class="filebtn" type="file" /></p>

<p><label for="img_logo_caption">Logo Image Caption</label><br /><input id="img_logo_caption" name="img_logo_caption" type="text" class="normal" value="<?php echo $row['img_logo_caption']; ?>" /></p>




</fieldset>

<fieldset>
<legend>Content</legend>

<p><label for="sidecontent">Side Content</label><br /><textarea id="sidecontent" name="sidecontent" class="wysiwyg large"><?php echo $row['sidecontent']; ?></textarea></p>

<p><label for="maincontent">Main Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

<p><label for="quote">Quote</label><br /><textarea id="quote" name="quote" class="normal"><?php echo $row['quote']; ?></textarea></p>

</fieldset>
        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /> <a href="case-studies.php">Cancel<a/></p>
        
        </form>
        
        <?php require("footer.php"); ?>