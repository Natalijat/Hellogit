<?php 

$pageid = 3;

$pagetitle = "Areas we support";

require("header.php"); 

$result = mysql_query("SELECT * FROM areaswesupport")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="areas-we-support.php">Areas we support</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>AREAS WE SUPPORT</h2>
		<ul id="sub-nav">
			<li class="current_page_item"><a href="areas-we-support.php">Overview</a></li>
			<li><a href="case-studies.php">Case studies</a></li>
			<li><a href="projects-supported.php">Projects supported</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1>Areas we support</h1>
			<?php echo $row['maincontent']; ?>
			<h2>Case studies</h2>
			<?php
				$query2 = "SELECT * FROM casestudies WHERE include_in_aws=1"; 
	 
				$result2 = mysql_query($query2) or die(mysql_error());


				while($row2 = mysql_fetch_array($result2)){
					echo "<hr /><div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row2['img_blurb'];
					echo "' alt='";
					echo $row2['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row2['name'];
					echo "</h3><p><strong>";
					echo $row2['location'];
					echo "</strong> / ";
					echo $row2['date'];
					echo "</p><p>";
					echo $row2['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row2['id'];
					echo "'>Read more</a></p></div></div>";
				}

				?>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>