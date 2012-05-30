<?php

$pageid = 3;

require("header.php"); 

if(isset($_POST['edit'])){ 

$id = $_POST['id'];
	
	$name = addslashes($_POST['name']);
	$location = addslashes($_POST['location']);
	$date = addslashes($_POST['date']);
	$category = addslashes($_POST['category']);
	$include_in_aws = addslashes($_POST['include_in_aws']);
	$maincontent = addslashes($_POST['maincontent']);
	$quote = addslashes($_POST['quote']);
	$blurb = addslashes($_POST['blurb']);
	$sidecontent = addslashes($_POST['sidecontent']);
	
	
	 $img_hero_caption = addslashes($_POST['img_hero_caption']);
	 $img_1_caption = addslashes($_POST['img_1_caption']);
	 $img_2_caption = addslashes($_POST['img_2_caption']);
	 $img_logo_caption = addslashes($_POST['img_logo_caption']);

	
	
	
	$target = "../uploads/casestudies/";
	$target1 = $target . basename( $_FILES['img_hero']['name']);
	$img_hero = basename( $_FILES['img_hero']['name']);
	
	$target2 = $target . basename( $_FILES['img_1']['name']);
	$img_1 = basename( $_FILES['img_1']['name']);
	
	$target3 = $target . basename( $_FILES['img_2']['name']);
	$img_2 = basename( $_FILES['img_2']['name']);
	
	$target4 = $target . basename( $_FILES['img_logo']['name']);
	$img_logo = basename( $_FILES['img_logo']['name']);
	
	$target5 = $target . basename( $_FILES['img_blurb']['name']);
	$img_blurb = basename( $_FILES['img_blurb']['name']);

		
if (empty($id)) {
mysql_query("INSERT INTO casestudies (name, img_hero, img_1, img_2, img_logo, img_hero_caption, img_1_caption, img_2_caption, img_logo_caption, location, date, category, include_in_aws, maincontent, quote, img_blurb, blurb, sidecontent) VALUES('$name', '$img_hero', '$img_1', '$img_2', '$img_logo', '$img_hero_caption', '$img_1_caption', '$img_2_caption', '$img_logo_caption', '$location', '$date', '$category', '$include_in_aws', '$maincontent', '$quote', '$img_blurb', '$blurb', '$sidecontent')")
or die(mysql_error());

move_uploaded_file($_FILES['img_hero']['tmp_name'], $target1);
move_uploaded_file($_FILES['img_1']['tmp_name'], $target2);
move_uploaded_file($_FILES['img_2']['tmp_name'], $target3);
move_uploaded_file($_FILES['img_logo']['tmp_name'], $target4);
move_uploaded_file($_FILES['img_blurb']['tmp_name'], $target5);

$message = "<p class='message'>You have successfully added a new case study.</p>";

} else {

$result7 = mysql_query("SELECT * FROM casestudies WHERE id=$id")
or die(mysql_error());  

$row7 = mysql_fetch_array($result7);

if (empty($_FILES['img_hero']['tmp_name'])) {
	$img_hero = $row7['img_hero'];
}
if (empty($_FILES['img_1']['tmp_name'])) {
	$img_1 = $row7['img_1'];
}
if (empty($_FILES['img_2']['tmp_name'])) {
	$img_2 = $row7['img_2'];
}
if (empty($_FILES['img_logo']['tmp_name'])) {
	$img_logo = $row7['img_logo'];
}
if (empty($_FILES['img_blurb']['tmp_name'])) {
	$img_blurb = $row7['img_blurb'];
}


mysql_query("UPDATE casestudies SET name='$name', img_hero='$img_hero', img_1='$img_1', img_2='$img_2', img_logo='$img_logo',img_hero_caption='$img_hero_caption', img_1_caption='$img_1_caption', img_2_caption='$img_2_caption', img_logo_caption='$img_logo_caption', location='$location', date='$date', category='$category', include_in_aws='$include_in_aws', maincontent='$maincontent', quote='$quote', img_blurb='$img_blurb', blurb='$blurb', sidecontent='$sidecontent' WHERE id='$id'") 
or die(mysql_error()); 

move_uploaded_file($_FILES['img_hero']['tmp_name'], $target1);
move_uploaded_file($_FILES['img_1']['tmp_name'], $target2);
move_uploaded_file($_FILES['img_2']['tmp_name'], $target3);
move_uploaded_file($_FILES['img_logo']['tmp_name'], $target4);
move_uploaded_file($_FILES['img_blurb']['tmp_name'], $target5);

$message = "<p class='message'>You have successfully updated a case study.</p>";
}

}
if(isset($_POST['delete'])){
$id = $_POST['id']; 
mysql_query("DELETE FROM casestudies WHERE id='$id'") 
or die(mysql_error());  
$message = "<p class='message'>You have successfully deleted a case study.</p>";
}


?>

<h2>Case studies</h2>

<?php echo $message; ?>


<table id="cs-table">
<tr>
	<th>Organisation</th>
	<th>Category</th>
	<th></th>
</tr>

	<?php
				$query1 = "SELECT * FROM casestudies"; 
	 
				$result1 = mysql_query($query1) or die(mysql_error());


				while($row1 = mysql_fetch_array($result1)){
					
					echo "<tr><td>";
					echo $row1['name'];
					echo "</td><td>";
					
					if($row1['category']=='1') {
					echo "Education";
					} elseif($row1['category']=='2') {
					echo "Poverty";
					} elseif($row1['category']=='3') {
					echo "Elderly";
					} elseif($row1['category']=='4') {
					echo "Injustice";
					} elseif($row1['category']=='5') {
					echo "Health";
					} elseif($row1['category']=='6') {
					echo "Prisons"; }
					echo "<td class='thin'><form action='case-study.php' method='post'><input name='id' type='hidden' value='" .$row1['id']. "' /><input type='submit' value='edit' class='btn' /></form>";
                echo "<form action='case-studies.php' onsubmit='return confirmSubmit()' method='post'><input name='id' type='hidden' value='" .$row1['id']. "' /><input name='delete' type='submit' value='delete' class='btn' /></form></td></tr>";

				}

				?>



</table>


<p><a href="case-study.php" class="red-btn">New case study</a></p>



<?php require("footer.php"); ?>