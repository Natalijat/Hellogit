<?php 

$pageid = 3;

$pagetitle = "Case studies";

require("header.php");

$cs_id = $_GET["id"];

$result = mysql_query("SELECT * FROM casestudies WHERE id=$cs_id")
or die(mysql_error());  

$row = mysql_fetch_array( $result );


 ?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="bc-arrow"><a href="areas-we-support.php">Areas we support</a></li>
	<li class="bc-arrow"><a href="case-studies.php">Case studies</a></li>
	<li class="current"><a href="case-study.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>AREAS WE SUPPORT</h2>
		<ul id="sub-nav">
			<li><a href="areas-we-support.php">Overview</a></li>
			<li class="current_page_item"><a href="case-studies.php">Case studies</a></li>
			<li><a href="projects-supported.php">Projects supported</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1><?php echo $row['name']; ?></h1>
			<p><strong><?php echo $row['location']; ?></strong> / <?php echo $row['date']; ?></p>
			<img src="uploads/casestudies/<?php echo $row['img_logo']; ?>" id="cs-logo" alt="<?php echo $row['img_logo_caption']; ?>" />
			<div id="cs-container2">
				<div id="cs-left2">
					<div class="photo"> 
					<div class="img-box-hero">
					<img src="uploads/casestudies/<?php echo $row['img_hero']; ?>" width="416" height="234" alt="<?php echo $row['img_hero_caption']; ?>" />
					</div>
					
					
						<p class="small-text"><?php echo $row['img_hero_caption']; ?></p>
					</div>
				</div>
				<div id="cs-right2">
					<?php echo $row['sidecontent']; ?>
				</div>
			</div>
			<div id="cs-container">
				<div id="cs-left">
				
					<div class="photo">
					<div class="img-box-side">
					<img src="uploads/casestudies/<?php echo $row['img_1']; ?>" width="202" height="149" alt="<?php echo $row['img_1_caption']; ?>" />
					</div>
						<p class="small-text"><?php echo $row['img_1_caption']; ?></p>
					</div>
					
					<?php if($row['img_2']) { ?>
					
					<div class="photo">
					<div class="img-box-side">
					<img src="uploads/casestudies/<?php echo $row['img_2']; ?>" width="202" height="149" alt="<?php echo $row['img_2_caption']; ?>" />
					</div>
						<p class="small-text"><?php echo $row['img_2_caption']; ?></p>
					</div>
					
					<?php } ?>
					
					<div class="quote">
						<h3><?php echo $row['quote']; ?></h3>
					</div>
				</div>
				<div id="cs-right">
					<?php echo $row['maincontent']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>