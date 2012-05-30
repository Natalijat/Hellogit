<?php 
require('app.php');

$pageid = 4;

$pagetitle = "Application form";

require("header.php"); 
require("access.php");

?>
<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="application-form.php">Application form</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>HOW TO APPLY</h2>
		<ul id="sub-nav">
			<li><a href="how-to-apply.php">Overview</a></li>
			<li class="current_page_item"><a href="application-form.php">Application form</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1>Application form</h1>
			<p>Please complete all fields below.</p>
			<form action="application-form4.php" method="post" id="applicationform3" name="applicationform3">
			<div id="application">
				<div id="people">
					<p class="flow"><img src="css/images/application/people.png" height="47" width="616" /></p>
					<p class="erroroo" style="display:none;"></p>
					<div class="application-box">
				<div class="code">
					<p>C1.</p>
				</div>
				<div class="fields">
					<h3>Please provide number of people</h3>
					<label for="c1_number_people1" class="norm">Full time salaried staff</label>
					<input id="c1_number_people1" value="<?php if (isset($_SESSION['c1_number_people1'])) {echo cleanInput($_SESSION['c1_number_people1']);} ?>" name="c1_number_people1" type="text" class="required large" />
					
					<label for="c1_number_people2" class="norm">Active volunteers</label>
					<input id="c1_number_people2" value="<?php if (isset($_SESSION['c1_number_people2'])) {echo cleanInput($_SESSION['c1_number_people2']); }?>" name="c1_number_people2" type="text" class="required large" />
					
					<label for="c1_number_people3" class="norm">Part time salaried staff</label>
					<input id="c1_number_people3" value="<?php if (isset($_SESSION['c1_number_people3'])) {echo cleanInput($_SESSION['c1_number_people3']);} ?>" name="c1_number_people3" type="text" class="required large" />
					
					<label for="c1_number_people4" class="norm">Trustees/Governors</label>
					<input id="c1_number_people4" value="<?php if (isset($_SESSION['c1_number_people4'])) {echo cleanInput($_SESSION['c1_number_people4']); }?>" name="c1_number_people4" type="text" class="required large" />
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>C2.</p>
				</div>
				<div class="fields">
					<label for="c2_trustees_governors">Please provide names of up to 5 Trustees/Governors &amp; for each, describe their strengths</label>
					<div class="smalltext"><textarea id="c2_trustees_governors" name="c2_trustees_governors" cols="" class="required large"  rows=""><?php if (isset($_SESSION['c2_trustees_governors'])) {echo cleanInput($_SESSION['c2_trustees_governors']);} ?></textarea><span class="tiny">Maximum of 10 words per person</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>C3.</p>
				</div>
				<div class="fields">
					<label for="c3_senior_management">Senior management team &amp; how organisation is managed</label>
					<div class="smalltext"><textarea id="c3_senior_management" name="c3_senior_management" cols="" class="required large" rows=""><?php if (isset($_SESSION['c3_senior_management'])) {echo cleanInput($_SESSION['c3_senior_management']);} ?></textarea><span class="tiny">50 words maximum</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>C4.</p>
				</div>
				<div class="fields">
					<div class="smalltext"><label for="c4_key_people">Names and job titles of 3 key people plus experience</label>
					<textarea id="c4_key_people" name="c4_key_people" cols="" class="required large" rows=""><?php if (isset($_SESSION['c4_key_people'])) {echo cleanInput($_SESSION['c4_key_people']);} ?></textarea><span class="tiny">One sentence per person</span></div>
				</div>
				</div>
				

					<p class="buttons"><input type="submit" name="submit" class="grey-btn noWarn" value="Previous" onClick="document.applicationform3.action='application-form2.php';"> <input type="submit" name="submit" class="red-btn noWarn" value="Next" onClick="document.applicationform3.action='application-form4.php';"></p>
					
				</div>
			
			
			</div>
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			