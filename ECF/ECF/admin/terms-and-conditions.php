<?php

$pageid = 11;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$maincontent = addslashes($_POST['maincontent']);

mysql_query("UPDATE footer SET maincontent='$maincontent' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the Terms and Conditions page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM footer WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Terms and Conditions</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="terms-and-conditions.php" method="post">

<fieldset>
<legend>Content</legend>

<p><label for="maincontent">Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

</fieldset>
        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>