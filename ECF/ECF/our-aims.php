<?php 

$pageid = 2;

$pagetitle = "Our aims";

require("header.php"); ?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="our-aims.php">Our aims</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>OUR AIMS</h2>
		<ul id="sub-nav">
		<li class="current_page_item"><a href="our-aims.php">Overview</a></li>
		
		
		<?php
				$query2 = "SELECT * FROM ouraims ORDER BY orderi ASC"; 
	 
				$result2 = mysql_query($query2) or die(mysql_error());


				while($row2 = mysql_fetch_array($result2)){
					echo "<li><a href='our-aim.php?id=";
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
			<p>In relation to UK based projects we particularly welcome applications which benefit communities in Lincolnshire and Yorkshire.</p>
			<p>Our Trustees currently wish to focus on the following areas:</p>
			
			
			
			<?php
				$query1 = "SELECT * FROM ouraims ORDER BY orderi ASC"; 
	 
				$result1 = mysql_query($query1) or die(mysql_error());


				while($row1 = mysql_fetch_array($result1)){
					echo "<div class='our-aims-box'><h3><a href='our-aim.php?id=";
					echo $row1['id'];
					echo "'>";
					echo $row1['name'];
					echo "</a></h3><div class='boxgrid captionfull'><img src='uploads/ouraims/";
					echo $row1['img_blurb'];
					echo "' width='210' height='143' alt='";
					echo $row1['name'];
					echo "' /><div class='cover boxcaption'><p>";
					echo $row1['blurb'];
					echo "</p><p><a href='our-aim.php?id=";
					echo $row1['id'];
					echo "' class='red-arrow'>Read more</a></p></div></div></div>";
				}

				?>

					</div>
		<div id="content-area-sidebar">
			<?php echo $row88['sidecontent']; ?>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>