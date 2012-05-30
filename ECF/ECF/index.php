<?php 
$pagetitle = "Home";
$pageid = 1;

require("header.php");

$result = mysql_query("SELECT * FROM home")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<div id="home-main-area">
	<div id="hero">
		<div class="slideshow">
		<?php if ($row['slide1_active']==1) { ?>
		<div>
		<img src="uploads/home/<?php echo $row['slide1']; ?>" width="908" height="290" alt="Evan Cornish Foundation" />
			<p class="home_hero_btn" style="top: <?php echo $row['slide_btn_y']; ?>px; left:  <?php echo $row['slide_btn_x']; ?>px;"><a href="<?php echo $row['slide_btn_link']; ?>" class="red-btn"><?php echo $row['slide_btn_name']; ?></a></p>
		</div>
		<?php } if ($row['slide2_active']==1) { ?>
		<div>
		<img src="uploads/home/<?php echo $row['slide2']; ?>" width="908" height="290" alt="Evan Cornish Foundation" />
			<p class="home_hero_btn2" style="top: <?php echo $row['slide_btn_y2']; ?>px; left:  <?php echo $row['slide_btn_x2']; ?>px;"><a href="<?php echo $row['slide_btn_link2']; ?>" class="red-btn"><?php echo $row['slide_btn_name2']; ?></a></p>
		</div>
		<?php } if ($row['slide3_active']==1) { ?>
		<div>
		<img src="uploads/home/<?php echo $row['slide3']; ?>" width="908" height="290" alt="Evan Cornish Foundation" />
		<p class="home_hero_btn3" style="top: <?php echo $row['slide_btn_y3']; ?>px; left:  <?php echo $row['slide_btn_x3']; ?>px;"><a href="<?php echo $row['slide_btn_link3']; ?>" class="red-btn"><?php echo $row['slide_btn_name3']; ?></a></p>
		</div>
		<?php } if ($row['slide4_active']==1) { ?>
		<div>
		<img src="uploads/home/<?php echo $row['slide4']; ?>" width="908" height="290" alt="Evan Cornish Foundation" />
		<p class="home_hero_btn4" style="top: <?php echo $row['slide_btn_y4']; ?>px; left:  <?php echo $row['slide_btn_x4']; ?>px;"><a href="<?php echo $row['slide_btn_link4']; ?>" class="red-btn"><?php echo $row['slide_btn_name4']; ?></a></p>
		</div>
		<?php } ?>
		
		
		
		</div>
	</div>
	<div id="home-content">
		<div class="home-row">
			<div class="home-left-column">
				<h2><?php echo $row['box1_title']; ?></h2>
				<?php echo $row['box1_content']; ?>
			</div>
			<div class="home-right-column">
				<h2><?php echo $row['box4_title']; ?></h2>
				<?php echo $row['box4_content']; ?>
			</div>
		</div>
		<div class="home-row">
			<div class="home-left-column">
				<h2><?php echo $row['box3_title']; ?></h2>
				<?php echo $row['box3_content']; ?>			</div>
				<div class="home-right-column">
				<h2><?php echo $row['box2_title']; ?></h2>
				<?php if($row['box2_img']) { ?>
				<p class="image">
				<img src="uploads/home/<?php echo $row['box2_img']; ?>" width="168" height="198" alt="Evan Cornish Foundation" />

				</p>
				<?php } ?>

				<?php echo $row['box2_content']; ?>
							</div>
			
		</div>
	</div>
</div>
<?php require("footer.php"); ?>