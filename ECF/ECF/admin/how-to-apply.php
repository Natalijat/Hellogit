<?php

$pageid = 5;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$step1 = addslashes($_POST['step1']);
	$step2 = addslashes($_POST['step2']);
	$step3 = addslashes($_POST['step3']);
	$maintitle = addslashes($_POST['maintitle']);
	$maincontent = addslashes($_POST['maincontent']);
	$smallprint = addslashes($_POST['smallprint']);
	$topcontent = addslashes($_POST['topcontent']);

mysql_query("UPDATE howtoapply SET step1='$step1', step2='$step2', step3='$step3', maintitle='$maintitle', maincontent='$maincontent', smallprint='$smallprint', topcontent='$topcontent' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the How To Apply page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM howtoapply WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit How To Apply</h2>

<?php echo $message; ?>

<form action="how-to-apply.php" method="post">

<fieldset>
<legend>Steps</legend>

<p><label for="step1">Step 1</label><br /><textarea id="step1" name="step1" class="wysiwyg large"><?php echo $row['step1']; ?></textarea></p>

<p><label for="step2">Step 2</label><br /><textarea id="step2" name="step2" class="wysiwyg large"><?php echo $row['step2']; ?></textarea></p>

<p><label for="step3">Step 3</label><br /><textarea id="step3" name="step3" class="wysiwyg large"><?php echo $row['step3']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Content</legend>

<p><label for="topcontent">Top Content</label><br /><textarea id="topcontent" name="topcontent" class="wysiwyg xlarge"><?php echo $row['topcontent']; ?></textarea></p>

<p><label for="smallprint">Main Content</label><br /><textarea id="smallprint" name="smallprint" class="wysiwyg xlarge"><?php echo $row['smallprint']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Sidebar (docs)</legend>

<p><label for="maintitle">Title</label><br /><input id="maintitle" name="maintitle" type="text" class="normal" value="<?php echo $row['maintitle']; ?>" /></p>

<p><label for="maincontent">Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>



</fieldset>


        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>