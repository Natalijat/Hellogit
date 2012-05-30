<?php

$pageid = 7;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$maincontent = addslashes($_POST['maincontent']);
	$formemail = addslashes($_POST['formemail']);

mysql_query("UPDATE contactus SET maincontent='$maincontent', formemail='$formemail' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the Contact Us page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM contactus WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Contact Us</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="contact-us.php" method="post">

<fieldset>
<legend>Content</legend>

<p><label for="maincontent">Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Contact Form</legend>

<p><label for="formemail">Specify email to recieve contact form</label><br /><input id="formemail" name="formemail" type="text" class="normal" value="<?php echo $row['formemail']; ?>" /></p>

</fieldset>


        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>