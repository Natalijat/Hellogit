<?php

$pageid = 14;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$maincontent = addslashes($_POST['maincontent']);

mysql_query("UPDATE footer SET maincontent='$maincontent' WHERE id=4") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the Sitemap page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM footer WHERE id=4")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Sitemap</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="sitemap.php" method="post">

<fieldset>
<legend>Content</legend>

<p><label for="maincontent">Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

</fieldset>

        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>