<?php

$pageid = 27;

require("header.php"); 

$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM docs WHERE id='$id'")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Application Documents: <?php echo $row['name']; ?></h2>

<form enctype="multipart/form-data" action="documents.php" method="post">

<input name="id" type="hidden" value="<?php echo $row['id']; ?>" />

<fieldset>
<legend>Document</legend>

<p><label for="name">Document Title</label><br /><input id="name" name="name" type="text" class="normal" value="<?php echo $row['name']; ?>" /></p>

<p><label for="doc">Document (PDF)</label><br /><?php echo $row['doc']; ?><br /><input name="doc" id="doc" class="filebtn" type="file" /></p>


</fieldset>

        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /> <a href="case-studies.php">Cancel<a/></p>
        
        </form>
        
        <?php require("footer.php"); ?>