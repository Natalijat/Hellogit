<?php

$pageid = 16;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$helped_no = addslashes($_POST['helped_no']);
	$footer_msg = addslashes($_POST['footer_msg']);
	$sidecontent = addslashes($_POST['sidecontent']);

mysql_query("UPDATE misc SET helped_no='$helped_no', footer_msg='$footer_msg', sidecontent='$sidecontent' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated Globals.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM misc WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Globals</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="global.php" method="post">

<fieldset>
<legend>Header</legend>

<p><label for="helped_no">Organisations &amp; individuals helped since 2000</label><br /><input id="helped_no" name="helped_no" type="text" class="normal" value="<?php echo $row['helped_no']; ?>" /></p>

</fieldset>

<fieldset>
<legend>Sidebar (on some pages)</legend>

<p><label for="sidecontent">Side Content</label><br /><textarea id="sidecontent" name="sidecontent" class="wysiwyg large"><?php echo $row['sidecontent']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Footer</legend>

<p><label for="footer_msg">Footer copyright</label><br /><input id="footer_msg" name="footer_msg" type="text" class="normal" value="<?php echo $row['footer_msg']; ?>" /></p>

</fieldset>


        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>