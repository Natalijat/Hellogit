<?php 

$pageid = 2;

$pagetitle = "Our aims";

require("header.php");

$oa_id = $_GET["id"];

$result = mysql_query("SELECT * FROM ouraims WHERE id=$oa_id")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

 ?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="bc-arrow"><a href="our-aims.php">Our aims</a></li>
	<li class="current"><a href="our-aim.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>OUR AIMS</h2>
		<ul id="sub-nav">
		<li><a href="our-aims.php">Overview</a></li>
			<?php
				$query2 = "SELECT * FROM ouraims ORDER BY orderi ASC"; 
	 
				$result2 = mysql_query($query2) or die(mysql_error());


				while($row2 = mysql_fetch_array($result2)){
					echo "<li";
					
					if($oa_id==$row2['id']) {
					
					echo " class='current_page_item'";
					
					}
					
					echo "><a href='our-aim.php?id=";
					echo $row2['id'];
					echo "'>";
					echo $row2['name'];
					echo "</a></li>";

				}

				?>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main">
			<h1>Our aims</h1>
			<hr />

			<h3><?php echo $row['name']; ?></h3>
			
			<?php if($row['img_1']) { ?>
			
			<p class="oa-photo"><img src="uploads/ouraims/<?php echo $row['img_1']; ?>" width="202" height="149" /></p>
			
			<?php } ?>
			
			<?php echo $row['maincontent']; ?>
		</div>
		<div id="content-area-sidebar">
			<?php echo $row88['sidecontent']; ?>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>