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
			<form action="application-form3.php" method="post" id="applicationform2" name="applicationform2">
			<div id="application">
				<div id="proposal">
					<p class="flow"><img src="css/images/application/proposal.png" height="47" width="616" /></p>
					<p class="erroroo" style="display:none;"></p>
					
				<div class="application-box">
				<div class="code">
					<p>B1.</p>
				</div>
				<div class="fields">
					<label for="b1_project_title">Project title</label>
					<div class="smalltext"><input id="b1_project_title" value="<?php if(isset ($_SESSION['b1_project_title'])) {echo cleanInput($_SESSION['b1_project_title']);} ?>" name="b1_project_title" type="text" value="" class="required large" /><span class="tiny">Maximum 20 word summary</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>B2.</p>
				</div>
				<div class="fields">
					<label for="b2_project_details">Project details</label>
					<div class="smalltext"><textarea id="b2_project_details" name="b2_project_details" cols="" class="required large" rows=""><?php if (isset($_SESSION['b2_project_details'])) {echo cleanInput($_SESSION['b2_project_details']);} ?></textarea><span class="tiny">Maximum 150 words</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>B3.</p>
				</div>
				<div class="fields">
					
					<label for="b3_work_date_month">When will the work take place</label>
					<select id="b3_work_date_month" class="large" name="b3_work_date_month">
						<option>Month</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'January') { echo "selected"; } ?>>January</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'February') { echo "selected"; } ?>>February</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'March') { echo "selected"; } ?>>March</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'April') { echo "selected"; } ?>>April</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'May') { echo "selected"; } ?>>May</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'June') { echo "selected"; } ?>>June</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'July') { echo "selected"; } ?>>July</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'August') { echo "selected"; } ?>>August</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'September') { echo "selected"; } ?>>September</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'October') { echo "selected"; } ?>>October</option>
						<option  <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'November') { echo "selected"; } ?>>November</option>
						<option <?php if (isset($_SESSION['b3_work_date_month']) && $_SESSION['b3_work_date_month'] == 'December') { echo "selected"; } ?>>December</option>
					</select>
					<select id="b3_work_date_year" class="large" name="b3_work_date_year">
						<option>Year</option>
						
						<option <?php if (isset($_SESSION['b3_work_date_year']) && $_SESSION['b3_work_date_year'] == '2012') { echo "selected"; } ?>>2012</option>
						<option <?php if (isset($_SESSION['b3_work_date_year']) && $_SESSION['b3_work_date_year'] == '2013') { echo "selected"; } ?>>2013</option>
						<option <?php if (isset($_SESSION['b3_work_date_year']) && $_SESSION['b3_work_date_year'] == '2014') { echo "selected"; } ?>>2014</option>
						<option <?php if (isset($_SESSION['b3_work_date_year']) && $_SESSION['b3_work_date_year'] == '2015') { echo "selected"; } ?>>2015</option>
						<option <?php if (isset($_SESSION['b3_work_date_year']) && $_SESSION['b3_work_date_year'] == '2016') { echo "selected"; } ?>>2016</option>
					</select>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>B4.</p>
				</div>
				<div class="fields">
					<label for="b4_work_place">Address of where work will take place</label>
					<textarea id="b4_work_place" name="b4_work_place" cols="" class="required large" rows=""><?php if (isset($_SESSION['b4_work_place'])) { echo cleanInput($_SESSION['b4_work_place']);} ?></textarea>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>B5.</p>
				</div>
				<div class="fields">
					<label for="b5_budget_details1">Details of budget information relating to proposal</label>
					
					<div class="smalltext"><textarea id="b5_budget_details1" name="b5_budget_details1" cols="" class="required large" rows=""><?php if (isset($_SESSION['b5_budget_details1'])) {echo cleanInput($_SESSION['b5_budget_details1']);} ?></textarea><br /><span class="tiny">i) Details and breakdown of project costs</span></div>
					
					<div class="smalltext"><textarea id="b5_budget_details2" name="b5_budget_details2" cols="" class="required large" rows=""><?php if (isset($_SESSION['b5_budget_details2'])) {echo cleanInput($_SESSION['b5_budget_details2']); }?></textarea><span class="tiny">ii) Details of funds raised to date, and<br />potential sources of funding</span></div>
					
					<div class="smalltext"><textarea id="b5_budget_details3" name="b5_budget_details3" cols="" class="required large" rows=""><?php if (isset($_SESSION['b5_budget_details3'])) {echo cleanInput($_SESSION['b5_budget_details3']);} ?></textarea><span class="tiny">iii) Amount requested and when required</span></div>
					
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>B6.</p>
				</div>
				<div class="fields">
					<label for="b6_people_benefit">Number of people to benefit directly from the project and over what time period</label>
					<textarea id="b6_people_benefit" name="b6_people_benefit" cols="" class="required large" rows=""><?php if (isset($_SESSION['b6_people_benefit'])) {echo cleanInput($_SESSION['b6_people_benefit']);} ?></textarea>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>B7.</p>
				</div>
				<div class="fields">
					<label for="b7_success_measured">How will success be measured and judged and how often</label>
					<textarea id="b7_success_measured" name="b7_success_measured" cols="" class="required large" rows=""><?php if (isset($_SESSION['b7_success_measured'])) { echo cleanInput($_SESSION['b7_success_measured']);} ?></textarea>
				</div>
				</div>

					<p class="buttons"><input type="submit" name="submit" class="grey-btn noWarn" value="Previous" onClick="document.applicationform2.action='application-form.php';"> <input type="submit" name="submit" class="red-btn noWarn" value="Next" onClick="document.applicationform2.action='application-form3.php';"></p>
					
				</div>
			
			
			</div>
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			