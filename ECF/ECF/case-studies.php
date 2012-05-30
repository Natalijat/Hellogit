<?php

$pageid = 3;

$pagetitle = "Case studies";

require("header.php"); ?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="bc-arrow"><a href="areas-we-support.php">Areas we support</a></li>
	<li class="current"><a href="case-studies.php">Case studies</a></li>
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
			<h1>Case studies</h1>

			<div class="tabs">
				<ul class="tabNavigation">
					<li><a href="#tabs-all">All</a></li>
					<li><a href="#tabs-education">Education</a></li>
					<li><a href="#tabs-elderly">Elderly</a></li>
					<li><a href="#tabs-health">Health</a></li>
					<li><a href="#tabs-injustice">Injustice</a></li>
					<li><a href="#tabs-prisons">Prisons</a></li>
					<li><a href="#tabs-poverty">Poverty</a></li>
				</ul>
				<div id="tabs-all">
				
				
				<?php
				$query1 = "SELECT * FROM casestudies"; 
	 
				$result1 = mysql_query($query1) or die(mysql_error());


				while($row1 = mysql_fetch_array($result1)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row1['img_blurb'];
					echo "' alt='";
					echo $row1['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row1['name'];
					echo "</h3><p><strong>";
					echo $row1['location'];
					echo "</strong> / ";
					echo $row1['date'];
					echo "</p><p>";
					echo $row1['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row1['id'];
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>


				</div>

				<div id="tabs-education">
				
				
				<?php
				$query1 = "SELECT * FROM casestudies WHERE category=1"; 
	 
				$result1 = mysql_query($query1) or die(mysql_error());


				while($row1 = mysql_fetch_array($result1)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row1['img_blurb'];
					echo "' alt='";
					echo $row1['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row1['name'];
					echo "</h3><p><strong>";
					echo $row1['location'];
					echo "</strong> / ";
					echo $row1['date'];
					echo "</p><p>";
					echo $row1['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row1['id'];
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>


				</div>
				<div id="tabs-poverty">
					<?php
				$query2 = "SELECT * FROM casestudies WHERE category=2"; 
	 
				$result2 = mysql_query($query2) or die(mysql_error());


				while($row2 = mysql_fetch_array($result2)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
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
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>
				</div>
				<div id="tabs-elderly">
				<?php
				$query3 = "SELECT * FROM casestudies WHERE category=3"; 
	 
				$result3 = mysql_query($query3) or die(mysql_error());


				while($row3 = mysql_fetch_array($result3)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row3['img_blurb'];
					echo "' alt='";
					echo $row3['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row3['name'];
					echo "</h3><p><strong>";
					echo $row3['location'];
					echo "</strong> / ";
					echo $row3['date'];
					echo "</p><p>";
					echo $row3['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row3['id'];
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>
				</div>
				<div id="tabs-injustice">
				<?php
				$query4 = "SELECT * FROM casestudies WHERE category=4"; 
	 
				$result4 = mysql_query($query4) or die(mysql_error());


				while($row4 = mysql_fetch_array($result4)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row4['img_blurb'];
					echo "' alt='";
					echo $row4['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row4['name'];
					echo "</h3><p><strong>";
					echo $row4['location'];
					echo "</strong> / ";
					echo $row4['date'];
					echo "</p><p>";
					echo $row4['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row4['id'];
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>
				</div>
				<div id="tabs-health">
				<?php
				$query5 = "SELECT * FROM casestudies WHERE category=5"; 
	 
				$result5 = mysql_query($query5) or die(mysql_error());


				while($row5 = mysql_fetch_array($result5)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row5['img_blurb'];
					echo "' alt='";
					echo $row5['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row5['name'];
					echo "</h3><p><strong>";
					echo $row5['location'];
					echo "</strong> / ";
					echo $row5['date'];
					echo "</p><p>";
					echo $row5['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row5['id'];
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>
				</div>
				<div id="tabs-prisons">
				<?php
				$query6 = "SELECT * FROM casestudies WHERE category=6"; 
	 
				$result6 = mysql_query($query6) or die(mysql_error());


				while($row6 = mysql_fetch_array($result6)){
					echo "<div class='case-study-row'><div class='img_box_blurb'><img src='uploads/casestudies/";
					echo $row6['img_blurb'];
					echo "' alt='";
					echo $row6['name'];
					echo "' width='153' height='112' /></div><div class='case-study-row-text'><h3>";
					echo $row6['name'];
					echo "</h3><p><strong>";
					echo $row6['location'];
					echo "</strong> / ";
					echo $row6['date'];
					echo "</p><p>";
					echo $row6['blurb'];
					echo "</p><p><a class='red-arrow' href='case-study.php?id=";
					echo $row6['id'];
					echo "'>Read more</a></p></div></div><hr />";
				}

				?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>