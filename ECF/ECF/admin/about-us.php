<?php

$pageid = 6;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$aboutbox = addslashes($_POST['aboutbox']);
	$maincontent = addslashes($_POST['maincontent']);

mysql_query("UPDATE aboutus SET aboutbox='$aboutbox', maincontent='$maincontent' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the Home page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM aboutus WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit About Us</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="about-us.php" method="post">

<fieldset>
<legend>Content</legend>

<p><label for="aboutbox">Evan Cornish Box</label><br /><textarea id="aboutbox" name="aboutbox" class="wysiwyg large"><?php echo $row['aboutbox']; ?></textarea></p>

<p><label for="maincontent">Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

</fieldset>


        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>