<?php

$pageid = 2;

require("header.php"); 

if(isset($_POST['edit'])){ 

$id = $_POST['id'];
	
	$name = addslashes($_POST['name']);
	$blurb = addslashes($_POST['blurb']);
	$maincontent = addslashes($_POST['maincontent']);
	$orderi = addslashes($_POST['orderi']);
	

	$target = "../uploads/ouraims/";
	$target1 = $target . basename( $_FILES['img_blurb']['name']);
	$img_blurb = basename( $_FILES['img_blurb']['name']);
	
	$target2 = $target . basename( $_FILES['img_1']['name']);
	$img_1 = basename( $_FILES['img_1']['name']);

		
if (empty($id)) {
mysql_query("INSERT INTO ouraims (name, blurb, maincontent, img_blurb, img_1, orderi) VALUES('$name', '$blurb', '$maincontent', '$img_blurb', '$img_1', '$orderi')")
or die(mysql_error());

move_uploaded_file($_FILES['img_blurb']['tmp_name'], $target1);
move_uploaded_file($_FILES['img_1']['tmp_name'], $target2);

$message = "<p class='message'>You have successfully added a new Our Aims page.</p>";

} else {

$result7 = mysql_query("SELECT * FROM ouraims WHERE id=$id")
or die(mysql_error());  

$row7 = mysql_fetch_array($result7);

if (empty($_FILES['img_blurb']['tmp_name'])) {
	$img_blurb = $row7['img_blurb'];
}
if (empty($_FILES['img_1']['tmp_name'])) {
	$img_1 = $row7['img_1'];
}

mysql_query("UPDATE ouraims SET name='$name', blurb='$blurb', maincontent='$maincontent', img_blurb='$img_blurb', img_1='$img_1', orderi='$orderi' WHERE id='$id'") 
or die(mysql_error()); 

move_uploaded_file($_FILES['img_blurb']['tmp_name'], $target1);
move_uploaded_file($_FILES['img_1']['tmp_name'], $target2);

$message = "<p class='message'>You have successfully updated an Our Aims page.</p>";
}

}
if(isset($_POST['delete'])){
$id = $_POST['id']; 
mysql_query("DELETE FROM ouraims WHERE id='$id'") 
or die(mysql_error());  
$message = "<p class='message'>You have successfully deleted a case study.</p>";
}


?>

<h2>Our Aims</h2>

<?php echo $message; ?>


<table id="cs-table">
<tr>
	<th>Title</th>
	<th></th>
</tr>

	<?php
				$query1 = "SELECT * FROM ouraims ORDER BY orderi ASC"; 
	 
				$result1 = mysql_query($query1) or die(mysql_error());


				while($row1 = mysql_fetch_array($result1)){
					
					echo "<tr><td>";
					echo $row1['name'];
					echo "</td><td class='thin'><form action='our-aim.php' method='post'><input name='id' type='hidden' value='" .$row1['id']. "' /><input type='submit' value='edit' class='btn' /></form>";
                echo "<form action='our-aims.php' onsubmit='return confirmSubmit()' method='post'><input name='id' type='hidden' value='" .$row1['id']. "' /><input name='delete' type='submit' value='delete' class='btn' /></form></td></tr>";

				}

				?>



</table>


<p><a href="our-aim.php" class="red-btn">New Our Aims page</a></p>



<?php require("footer.php"); ?>