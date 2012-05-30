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
			<h1>Review Application form</h1>
				<form action="app-form-process.php" method="post" id="applicationform6" name="applicationform6">
			
			<p class="bright">PLEASE NOTE: You have not yet submitted your application. Please review your details and click the submit button at the bottom of this page.</p>
			
			<div id="application" class="confirmation">
			
			<h2>Applicant's details <a href="application-form.php" class="editbtn tinyio">Edit applicant's details</a></h2>

			
			<div class="application-box">
			<div class="code">
			<p>A1.</p>
			</div>
			<div class="fields">
            
            <p><strong>Name of organisation:</strong> <?php if(isset($_SESSION['a1_name_organisation'])) {echo cleanInput($_SESSION['a1_name_organisation']);} ?></p>
			
			<p><strong>Name of applicant:</strong> <?php if(isset($_SESSION['a1_name_applicant'])) {echo cleanInput($_SESSION['a1_name_applicant']);} ?></p>
			
			<p><strong>Type of organisation:</strong> <?php if (isset($_SESSION['a1_type_organisation'])) {echo cleanInput($_SESSION['a1_type_organisation']);} ?></p>
			
			<p><strong>If charity, what is registered number:</strong> <?php if (isset($_SESSION['a1_registered_number'])) {echo cleanInput($_SESSION['a1_registered_number']);} ?></p>
			
			<p><strong>Year organisation was established:</strong> <?php if(isset($_SESSION['a1_organisation_established'])) { echo cleanInput($_SESSION['a1_organisation_established']);} ?></p>
			
			<p><strong>Website address:</strong> <?php if(isset($_SESSION['a1_website_address'])) { echo cleanInput($_SESSION['a1_website_address']); }?></p>
			
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>A2.</p>
			</div>
			<div class="fields">
			
			<p><strong>Key person dealing with application:</strong> <?php if (isset($_SESSION['a2_key_person'])) {echo cleanInput($_SESSION['a2_key_person']);} ?></p>
			<p><strong>Address:</strong><br /><?php if (isset($_SESSION['a2_address'])) {echo cleanInput($_SESSION['a2_address']);} ?></p>
			
			<p><strong>Telephone:</strong> <?php if (isset($_SESSION['a2_telephone'])) {echo cleanInput($_SESSION['a2_telephone']);} ?></p>
			
			<p><strong>Email:</strong> <?php if(isset($_SESSION['a2_email'])) { echo  cleanInput($_SESSION['a2_email']); }?></p>
			
			<p><strong>Describe your organisation and the main activities:</strong><br /><?php if (isset($_SESSION['a3_organisation_activities'])) { echo cleanInput($_SESSION['a3_organisation_activities']); }?></p>
			
			</div>
			</div>
			

			<h2>Proposal <a href="application-form2.php" class="editbtn tinyio">Edit proposal</a></h2>
			
			<div class="application-box">
			<div class="code">
			<p>B1.</p>
			</div>
			<div class="fields">
			<p><strong>Project title:</strong> <?php if (isset($_SESSION['b1_project_title'])) {echo cleanInput($_SESSION['b1_project_title']);} ?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>B2.</p>
			</div>
			<div class="fields">
			<p><strong>Project details:</strong><br /><?php if (isset($_SESSION['b2_project_details'])) {echo cleanInput($_SESSION['b2_project_details']);} ?></p>	
			</div>
			</div>

			<div class="application-box">
			<div class="code">
			<p>B3.</p>
			</div>
			<div class="fields">
			<p><strong>When will the work take place:</strong> <?php if (isset($_SESSION['b3_work_date_month'])) { echo cleanInput($_SESSION['b3_work_date_month']);} ?> <?php if(isset($_SESSION['b3_work_date_year'])) { echo cleanInput($_SESSION['b3_work_date_year']); }?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>B4.</p>
			</div>
			<div class="fields">
			<p><strong>Address of where work will take place:</strong><br /><?php if (isset($_SESSION['b4_work_place'])) {echo cleanInput($_SESSION['b4_work_place']);} ?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>B5.</p>
			</div>
			<div class="fields">
			<p><strong>Details of budget information relating to proposal:</strong><br />i) Details and breakdown of project costs<br /><?php if(isset($_SESSION['b5_budget_details1'])) { echo cleanInput($_SESSION['b5_budget_details1']); }?><br />ii) Details of funds raised to date, and potential sources of funding<br /><?php if (isset($_SESSION['b5_budget_details2'])) {echo cleanInput($_SESSION['b5_budget_details2']); }?><br />iii) Amount requested and when required<br /><?php if (isset($_SESSION['b5_budget_details3'])) {echo cleanInput($_SESSION['b5_budget_details3']);} ?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>B6.</p>
			</div>
			<div class="fields">
			<p><strong>Number of people to benefit directly from the project and over what time period:</strong><br /><?php if (isset($_SESSION['b6_people_benefit'])) { echo cleanInput($_SESSION['b6_people_benefit']); }?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>B7.</p>
			</div>
			<div class="fields">
			<p><strong>How will success be measured and judged and how often:</strong><br /><?php if (isset($_SESSION['b7_success_measured'])) {echo cleanInput($_SESSION['b7_success_measured']);} ?></p>	
			</div>
			</div>
			
			<h2>People <a href="application-form3.php" class="editbtn tinyio">Edit people</a></h2>
			
			<div class="application-box">
			<div class="code">
			<p>C1.</p>
			</div>
			<div class="fields">
			<p><strong>Please provide number of people:</strong><br />Full time salaried staff: <?php if (isset($_SESSION['c1_number_people1'])) {echo cleanInput($_SESSION['c1_number_people1']);} ?><br />Active volunteers: <?php if (isset($_SESSION['c1_number_people2'])) { echo cleanInput($_SESSION['c1_number_people2']);} ?><br />Part time salaried staff: <?php if(isset($_SESSION['c1_number_people3'])) { echo cleanInput($_SESSION['c1_number_people3']);} ?><br />Trustees/Governors: <?php if(isset($_SESSION['c1_number_people4'])) { echo cleanInput($_SESSION['c1_number_people4']); }?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>C2.</p>
			</div>
			<div class="fields">
			<p><strong>Please provide names of up to 5 Trustees/Governors &amp; for each, describe their strengths:</strong><br /><?php if (isset($_SESSION['c2_trustees_governors'])) {echo cleanInput($_SESSION['c2_trustees_governors']);} ?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>C3.</p>
			</div>
			<div class="fields">
			<p><strong>Senior management team &amp; how organisation is managed:</strong><br /><?php if (isset($_SESSION['c3_senior_management'])) {echo cleanInput($_SESSION['c3_senior_management']);} ?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>C4.</p>
			</div>
			<div class="fields">
			<p><strong>Names and job titles of 3 key people plus experience:</strong><br /><?php if (isset($_SESSION['c4_key_people'])) {echo cleanInput($_SESSION['c4_key_people']);} ?></p>	
			</div>
			</div>
			
			<h2>Financial info. <a href="application-form4.php" class="editbtn tinyio">Edit financial info</a></h2>
			
			<div class="application-box">
			<div class="code">
			<p>D1.</p>
			</div>
			<div class="fields">
			<p><strong>Organisations total income this year:</strong> <?php if(isset($_SESSION['d1_total_income'])) { echo cleanInput($_SESSION['d1_total_income']); }?></p>	
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>D2.</p>
			</div>
			<div class="fields">
			<p><strong>Amount in unrestricted reserves at end of last financial year and approximately how many months of operating costs does this represent:</strong> <?php if (isset($_SESSION['d2_unrestricted_reserves'])) {echo cleanInput($_SESSION['d2_unrestricted_reserves']);} ?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>D3.</p>
			</div>
			<div class="fields">
			<p><strong>What is your current financial position and any planned changes in the future:</strong> <br /><?php if (isset($_SESSION['d3_financial_position'])) {echo cleanInput($_SESSION['d3_financial_position']);} ?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>D4.</p>
			</div>
			<div class="fields">
			<p><strong>How much is spent on fundraising per year:</strong> <?php if (isset($_SESSION['d4_fund_raising'])) {echo cleanInput($_SESSION['d4_fund_raising']); }?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>D5.</p>
			</div>
			<div class="fields">
			<p><strong>How much income is raised from above activities:</strong> <?php if (isset($_SESSION['d5_income_raised'])) {echo cleanInput($_SESSION['d5_income_raised']);} ?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>D6.</p>
			</div>
			<div class="fields">
			<p><strong>Please provide names of significant donors (above &pound;5,000):</strong> <?php if(isset($_SESSION['d6_significant_donors'])) { echo cleanInput($_SESSION['d6_significant_donors']); }?></p>
			</div>
			</div>
			
			
			<h2>Approach  <a href="application-form5.php" class="editbtn tinyio">Edit approach</a></h2>
			
			<div class="application-box">
			<div class="code">
			<p>E1.</p>
			</div>
			<div class="fields">
			<p><strong>Previous applications:</strong> <?php if (isset($_SESSION['e1_previous_application'])) {echo cleanInput($_SESSION['e1_previous_application']); }?></p>
			<p><strong>Were you successful in obtaining financial support:</strong> <?php if (isset($_SESSION['e1_successful'])) {echo cleanInput($_SESSION['e1_successful']);} ?></p>
			<p><strong>Please list amounts, dates and awards:</strong> <?php if(isset($_SESSION['e1_list_amounts'])) { echo cleanInput($_SESSION['e1_list_amounts']);} ?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>E2.</p>
			</div>
			<div class="fields">
			<p><strong>Contact details of professional person or organisation we can contact for a reference:</strong><br />Name: <?php if (isset($_SESSION['e2_reference_name'])) {echo cleanInput($_SESSION['e2_reference_name']);} ?><br />Address:<br /><?php if(isset($_SESSION['e2_reference_address'])) { echo cleanInput($_SESSION['e2_reference_address']); }?><br />Telephone: <?php if (isset($_SESSION['e2_reference_phone'])) {echo cleanInput($_SESSION['e2_reference_phone']); }?><br />Email: <?php if (isset($_SESSION['e2_reference_email'])) {echo cleanInput($_SESSION['e2_reference_email']);} ?><br />Relationship to your organisation: <?php if(isset($_SESSION['e2_reference_relationship'])) { echo cleanInput($_SESSION['e2_reference_relationship']);} ?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>E3.</p>
			</div>
			<div class="fields">
			<p><strong>Why have you chosen the Evan Cornish Foundation:</strong> <?php if (isset($_SESSION['e3_why_ecf'])) {echo cleanInput($_SESSION['e3_why_ecf']);} ?></p>
			</div>
			</div>
			
			<div class="application-box">
			<div class="code">
			<p>E4.</p>
			</div>
			<div class="fields">
			<p><strong>What difference will a grant from ECF make to your project:</strong> <?php if (isset($_SESSION['e4_what_difference'])) {echo cleanInput($_SESSION['e4_what_difference']);} ?></p>
			</div>
			</div>
			
			
			
							
				
					<p class="buttons"><input type="submit" name="submit" class="grey-btn" value="Previous" onClick="document.applicationform6.action='application-form5.php';"> <input type="submit" name="submit" class="red-btn" value="Submit my application" onClick="document.applicationform6.action='app-form-process.php';"></p>
					
				
			
			
			</div>
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			