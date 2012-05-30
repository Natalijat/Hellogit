<?php 

$pageid = 3;

$pagetitle = "Projects supported";

require("header.php"); 

$result = mysql_query("SELECT * FROM projects WHERE id=1")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="bc-arrow"><a href="areas-we-support.php">Areas we support</a></li>
	<li class="current"><a href="projects-supported.php">Projects supported</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>AREAS WE SUPPORT</h2>
		<ul id="sub-nav">
			<li><a href="areas-we-support.php">Overview</a></li>
			<li><a href="case-studies.php">Case studies</a></li>
			<li class="current_page_item"><a href="projects-supported.php">Projects supported</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1>Projects supported</h1>
			<div class="tabs">
				<ul class="tabNavigation">
					<li><a href="#first">A - F</a></li>
					<li><a href="#second">G - O</a></li>
					<li><a href="#third">P - Z (#)</a></li>
				</ul>
				<div id="first">
					<div class="row">
						<div class="col">
							<h2>A</h2>
							<?php echo $row['psa']; ?>
						</div>
						<div class="col">
							<h2>B</h2>
							<?php echo $row['psb']; ?>
						</div>
						<div class="col">
							<h2>C</h2>
							<?php echo $row['psc']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h2>D</h2>
							<?php echo $row['psd']; ?>
						</div>
						<div class="col">
							<h2>E</h2>
							<?php echo $row['pse']; ?>
						</div>
						<div class="col">
							<h2>F</h2>
							<?php echo $row['psf']; ?>
						</div>
					</div>
				</div>
				<div id="second">
					<div class="row">
						<div class="col">
							<h2>G</h2>
							<?php echo $row['psg']; ?>
						</div>
						<div class="col">
							<h2>H</h2>
							<?php echo $row['psh']; ?>
						</div>
						<div class="col">
							<h2>I</h2>
							<?php echo $row['psi']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h2>J</h2>
							<?php echo $row['psj']; ?>
						</div>
						<div class="col">
							<h2>K</h2>
							<?php echo $row['psk']; ?>
						</div>
						<div class="col">
							<h2>L</h2>
							<?php echo $row['psl']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h2>M</h2>
							<?php echo $row['psm']; ?>
						</div>
						<div class="col">
							<h2>N</h2>
							<?php echo $row['psn']; ?>
						</div>
						<div class="col">
							<h2>O</h2>
							<?php echo $row['pso']; ?>
						</div>
					</div>
				</div>
				<div id="third">
					<div class="row">
						<div class="col">
							<h2>P</h2>
							<?php echo $row['psp']; ?>
						</div>
						<div class="col">
							<h2>Q</h2>
							<?php echo $row['psq']; ?>
						</div>
						<div class="col">
							<h2>R</h2>
							<?php echo $row['psr']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h2>S</h2>
							<?php echo $row['pss']; ?>
						</div>
						<div class="col">
							<h2>T</h2>
							<?php echo $row['pst']; ?>
						</div>
						<div class="col">
							<h2>U</h2>
							<?php echo $row['psu']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h2>V</h2>
							<?php echo $row['psv']; ?>
						</div>
						<div class="col">
							<h2>W</h2>
							<?php echo $row['psw']; ?>
						</div>
						<div class="col">
							<h2>X</h2>
							<?php echo $row['psx']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h2>Y</h2>
							<?php echo $row['psy']; ?>
						</div>
						<div class="col">
							<h2>Z</h2>
							<?php echo $row['psz']; ?>
						</div>
						<div class="col">
							<h2>#</h2>
							<?php echo $row['psno']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>