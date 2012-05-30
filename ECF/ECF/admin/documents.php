<?php

$pageid = 27;

require("header.php"); 

if(isset($_POST['edit'])){ 

$id = $_POST['id'];
	
	$name = addslashes($_POST['name']);

	$target = "../uploads/docs/";
	$target1 = $target . basename( $_FILES['doc']['name']);
	$doc = basename( $_FILES['doc']['name']);

		
if (empty($id)) {
mysql_query("INSERT INTO docs (name, doc) VALUES('$name', '$doc')")
or die(mysql_error());

move_uploaded_file($_FILES['doc']['tmp_name'], $target1);

$message = "<p class='message'>You have successfully added a new document.</p>";

} else {

$result7 = mysql_query("SELECT * FROM docs WHERE id=$id")
or die(mysql_error());  

$row7 = mysql_fetch_array($result7);

if (empty($_FILES['doc']['tmp_name'])) {
	$doc = $row7['doc'];
}

mysql_query("UPDATE docs SET name='$name', doc='$doc' WHERE id='$id'") 
or die(mysql_error()); 

move_uploaded_file($_FILES['doc']['tmp_name'], $target1);

$message = "<p class='message'>You have successfully updated a document.</p>";
}

}
if(isset($_POST['delete'])){
$id = $_POST['id']; 
mysql_query("DELETE FROM docs WHERE id='$id'") 
or die(mysql_error());  
$message = "<p class='message'>You have successfully deleted a document.</p>";
}


?>

<h2>Application Documents</h2>

<?php echo $message; ?>


<table id="cs-table">
<tr>
	<th>Title</th>
	<th></th>
</tr>

	<?php
				$query1 = "SELECT * FROM docs"; 
	 
				$result1 = mysql_query($query1) or die(mysql_error());


				while($row1 = mysql_fetch_array($result1)){
					
					echo "<tr><td>";
					echo $row1['name'];
					echo "</td><td class='thin'><form action='document.php' method='post'><input name='id' type='hidden' value='" .$row1['id']. "' /><input type='submit' value='edit' class='btn' /></form>";
                echo "<form action='documents.php' onsubmit='return confirmSubmit()' method='post'><input name='id' type='hidden' value='" .$row1['id']. "' /><input name='delete' type='submit' value='delete' class='btn' /></form></td></tr>";

				}

				?>



</table>


<p><a href="document.php" class="red-btn">New document</a></p>



<?php require("footer.php"); ?>