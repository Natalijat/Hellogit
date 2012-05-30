<?php

require('app.php');
require("access.php");

include 'dbConnect.php';

$con = mysql_connect($db_host, $db_user, $db_password);

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
$query = "
UPDATE users SET application_timestamp=NOW()
WHERE a2_email = '{$_SESSION['a2_email']}'";
//echo  $query;
mysql_query($query) or die('Error, insert query failed');


$a1_name_organisation = cleanInput($_SESSION['a1_name_organisation']);
$a1_name_applicant = cleanInput($_SESSION['a1_name_applicant']);
$a1_type_organisation = cleanInput($_SESSION['a1_type_organisation']);
$a1_registered_number = cleanInput($_SESSION['a1_registered_number']);
$a1_organisation_established = cleanInput($_SESSION['a1_organisation_established']);
$a1_website_address = cleanInput($_SESSION['a1_website_address']);
$a2_key_person = cleanInput($_SESSION['a2_key_person']);
$a2_address = cleanInput($_SESSION['a2_address']);
$a2_telephone = cleanInput($_SESSION['a2_telephone']);
$a2_email = cleanInput($_SESSION['a2_email']);
$a3_organisation_activities = cleanInput($_SESSION['a3_organisation_activities']);
$b1_project_title = cleanInput($_SESSION['b1_project_title']);
$b2_project_details = cleanInput($_SESSION['b2_project_details']);
$b3_work_date_month = cleanInput($_SESSION['b3_work_date_month']);
$b3_work_date_year = cleanInput($_SESSION['b3_work_date_year']);
$b4_work_place = cleanInput($_SESSION['b4_work_place']);
$b5_budget_details1 = cleanInput($_SESSION['b5_budget_details1']);
$b5_budget_details2 = cleanInput($_SESSION['b5_budget_details2']);
$b5_budget_details3 = cleanInput($_SESSION['b5_budget_details3']);
$b6_people_benefit = cleanInput($_SESSION['b6_people_benefit']);
$b7_success_measured = cleanInput($_SESSION['b7_success_measured']);
$c1_number_people1 = cleanInput($_SESSION['c1_number_people1']);
$c1_number_people2 = cleanInput($_SESSION['c1_number_people2']);
$c1_number_people3 = cleanInput($_SESSION['c1_number_people3']);
$c1_number_people4 = cleanInput($_SESSION['c1_number_people4']);
$c2_trustees_governors = cleanInput($_SESSION['c2_trustees_governors']);
$c3_senior_management = cleanInput($_SESSION['c3_senior_management']);
$c4_key_people = cleanInput($_SESSION['c4_key_people']);
$d1_total_income = cleanInput($_SESSION['d1_total_income']);
$d2_unrestricted_reserves = cleanInput($_SESSION['d2_unrestricted_reserves']);
$d3_financial_position = cleanInput($_SESSION['d3_financial_position']);
$d4_fund_raising = cleanInput($_SESSION['d4_fund_raising']);
$d5_income_raised = cleanInput($_SESSION['d5_income_raised']);
$d6_significant_donors = cleanInput($_SESSION['d6_significant_donors']);
$e1_previous_application = cleanInput($_SESSION['e1_previous_application']);
$e1_successful = cleanInput($_SESSION['e1_successful']);
$e1_list_amounts = cleanInput($_SESSION['e1_list_amounts']);
$e2_reference_name = cleanInput($_SESSION['e2_reference_name']);
$e2_reference_address = cleanInput($_SESSION['e2_reference_address']);
$e2_reference_phone = cleanInput($_SESSION['e2_reference_phone']);
$e2_reference_email = cleanInput($_SESSION['e2_reference_email']);
$e2_reference_relationship = cleanInput($_SESSION['e2_reference_relationship']);
$e3_why_ecf = cleanInput($_SESSION['e3_why_ecf']);
$e4_what_difference = cleanInput($_SESSION['e4_what_difference']);
$terms_agreement = cleanInput($_SESSION['terms_agreement']);


$tom = 'yoyyo';

require_once 'lib/swift_required.php';


$transport = Swift_MailTransport::newInstance();

$mailer = Swift_Mailer::newInstance($transport);




$message = Swift_Message::newInstance('ECF - New Application')
  ->setFrom(array('contactus@evancornishfoundation.org.uk' => 'Evan Cornish Foundation'))
  ->setTo(array('tom@pixelgroup.co.uk','rachel@technicagroup.co.uk','contactus@evancornishfoundation.com'))
  ;
  
  
  $message->setBody("<p style='font-size: 11px; font-family: Trebuchet MS;'>" .
  "Hello,<br /><br /><b>$a1_name_organisation</b> has submitted the ECF online application form. <br />" .
  "The PDF of this application form can be found <a href=\"http://127.0.0.1:8080/ECF/new-application.php?email=$a2_email\" target=\"_blank\">http://127.0.0.1:8080/ECF/new-application.php?email=$a2_email</a><br /><br />" .
  "Here are the application details: <br/><br />" .
  
  "<b>A1.</b><br /><br />" .
  "Name of applicant: <b>$a1_name_applicant</b><br /><br />" .
  "Type of organisation:  <b>$a1_type_organisation</b><br /><br />" .
  "If charity, what is registered number: <b>$a1_registered_number</b><br /><br />" .
  "Year organisation was established: <b>$a1_organisation_established</b><br /><br />" .
  "Website address: <b>$a1_website_address</b><br /><br />" .
  
  "<b>A2.</b><br /><br />" .
  "Key person dealing with application: <b>$a2_key_person</b><br /><br />" .
  "Address: <b>$a2_address</b><br /><br />" .
  "Telephone: <b>$a2_telephone</b><br /><br />" .
  "Email: <b>$a2_email</b><br /><br >" .
  
  "<b>A3.</b><br /><br />" .
  "Describe your organisation and the main activities: <br /><b>$a3_organisation_activities</b><br /><br />" .
  
  "<b>B1.</b><br /><br />" .
  "Project title: <b>$b1_project_title</b><br /><br />" .
  
  "<b>B2.</b><br /><br />" .
  "Project details: <br /><b>$b2_project_details</b><br /><br />" .
  
  "<b>B3.</b><br /><br />" .
  "When will the work take place: <b>$b3_work_date_month / $b3_work_date_year</b><br /><br />" .
  
  "<b>B4.</b><br /><br />" .
  "Address of where you work will take place: <b>$b4_work_place</b><br /><br />" .
  
  "<b>B5.</b><br /><br />" .
  "Details of budget information relating to proposal<br /><br />" .
  "i) Details and breakdown of project costs:<br /><b>$b5_budget_details1</b><br /><br />" .
  "ii) Details of funds raised to date, and potential sources of funding:<br /><b>$b5_budget_details2</b><br /><br />" .
  "iii) Amount requested and when required:<br /><b>$b5_budget_details3</b><br /><br />" .
  
  "<b>B6.</b><br /><br />" .
  "Number of people to benefit directly from the project and over what time period:<br /><b>$b6_people_benefit</b><br /><br />" .
  
  "<b>B7.</b><br /><br />" .
  "How will success be measured and judged and how often<br /><b>$b7_success_measured</b><br /><br />" .
  
  "<b>C1.</b><br /><br />" .
  "Please provide number of people<br /><br />" .
  "Full time salaried staff: <b>$c1_number_people1</b><br /><br />" .
  "Active volunteers: <b>$c1_number_people2</b><br /><br />" .
  "Part time salaried staff: <b>$c1_number_people3</b><br /><br />" .
  "Trustees/Governors: <b>$c1_number_people4</b><br /><br />" .
  
  "<b>C2.</b><br /><br />" .
  "Please provide names of up to 5 Trustees/Governors &amp; for each describe their strengths:<br /><b>$c2_trustees_governors</b><br /><br />" .
  
  "<b>C3.</b><br /><br />" .
  "Senior management team &amp; how organisation is managed:<br /><b>$c3_senior_management</b><br /><br />" .
  
  "<b>C4.</b><br /><br />" .
  "Names and job titles of 3 key people plus experience:<br /><b>$c4_key_people</b><br /><br />" .
  
  "<b>D1.</b><br /><br />" .
  "Organisations total income this year: <b>$d1_total_income</b><br /><br />" .
  
  "<b>D2.</b><br /><br />" .
  "Amount in unrestricted reserves at end of last financial year and approximately how many months of operating costs does this represent: <b>$d2_unrestricted_reserves</b><br /><br />" .
  
  "<b>D3.</b><br /><br />" .
  "What is your current financial position and any planned changes in he future:<br /><b>$d3_financial_position</b><br /><br />" .
  
  "<b>D4.</b><br /><br />" .
  "How much is spent on fundraising per year: <b>$d4_fund_raising</b><br /><br />" .
  
  "<b>D5.</b><br /><br />" .
  "How much income is raised from above activities: <b>$d5_income_raised</b><br /><br />" .
  
  "<b>D6.</b><br /><br />" .
  "Please provide names of significant donors (above &pound;5,000): <b>$d6_significant_donors</b><br /><br />" .
  
  "<b>E1.</b><br /><br />" .
  "Previous application: <b>$e1_previous_application</b><br /><br />" .
  "Were you successful in obtaining financial support: <b>$e1_successful</b><br /><br />" .
  "Please list amounts, dates and awards: <b>$e1_list_amounts</b><br /><br />" .
  
  "<b>E2.</b><br /><br />" .
  "Contact details of professional person or organisation we can contact for a reference.<br /><br />Name: <b>$e2_reference_name</b><br /><br />Address: <b>$e2_reference_address</b><br /><br />Telephone: <b>$e2_reference_phone</b><br /><br />Email: <b>$e2_reference_email</b><br /><br />Relationship to your organisation: <b>$e2_reference_relationship</b><br /><br />" .
  
  "<b>E3.</b><br /><br />" .
  "Why have you chosen the Evan Cornish Foundation: <b>$e3_why_ecf</b><br /><br />" .
  "What difference will a grant from ECF make to your project<br /><b>$e4_what_difference</b><br /><br />" .
  "Have you read an agree to terms and conditions: <b>$terms_agreement</b><br /><br />" .
  
  
  
  "</p>", "text/html");
  

$result = $mailer->send($message);

$message = Swift_Message::newInstance('Thank you for your application')
  ->setFrom(array('contactus@evancornishfoundation.org.uk' => 'Evan Cornish Foundation'))
  ->setTo(array($a2_email))

  ;
  
  
  $message->setBody("<p style='font-size: 12px; font-family: Trebuchet MS;'>" .
  "Dear $a1_name_applicant<br /><br />Thank you for applying online with The Evan Cornish Foundation.<br /><br />" .
  "<span style='font-size: 14px; font-weight: bold;'>What do I need to do next?</span><br /><br />" .
  "Please send a copy of <span style='font-weight: bold; text-decoration: underline;'>recent annual accounts</span> by replying to this email or by post to: The Charity Administrator, The Evan Cornish Foundation, Provincial House, Solly St, Sheffield, S1 4BA<br /><br />" .
  "<span style='font-size: 14px; font-weight: bold;'>What happens next...</span><br /><br />" .
  "Your application will be considered at the next Trustees meeting at which point a visit to your project or a meeting with your organisation may be desirable.<br /><br />" .
  "Once a decision has been taken by the Trustees you will be notified in writing approximately two weeks from the Trustees meeting or visit to the project which ever was the later.<br /><br />" .
  "Once you have accepted our offer and returned a signed acceptance of our Terms and Conditions and details of your bank account the grant will be paid directly into your account.<br /><br />" .
  "Our Trustees will expect a six months update on the project and a completed Progress Report at 12 months." .
  "If you have any questions and queries please do not hesitate to contact me.<br /><br />" .
  "<span style='font-size: 14px; font-weight: bold;'>Below is a copy of your application.</span><br /><br />" .
  "<b>A1.</b><br /><br />" .
  "Name of applicant: <b>$a1_name_applicant</b><br />" .
  "Type of organisation:  <b>$a1_type_organisation</b><br />" .
  "If charity, what is registered number: <b>$a1_registered_number</b><br />" .
  "Year organisation was established: <b>$a1_organisation_established</b><br />" .
  "Website address: <b>$a1_website_address</b><br /><br />" .
  
  "<b>A2.</b><br /><br />" .
  "Key person dealing with application: <b>$a2_key_person</b><br />" .
  "Address: <b>$a2_address</b><br />" .
  "Telephone: <b>$a2_telephone</b><br />" .
  "Email: <b>$a2_email</b><br /><br >" .
  
  "<b>A3.</b><br /><br />" .
  "Describe your organisation and the main activities: <br /><b>$a3_organisation_activities</b><br /><br />" .
  
  "<b>B1.</b><br /><br />" .
  "Project title: <b>$b1_project_title</b><br /><br />" .
  
  "<b>B2.</b><br /><br />" .
  "Project details: <br /><b>$b2_project_details</b><br /><br />" .
  
  "<b>B3.</b><br /><br />" .
  "When will the work take place: <b>$b3_work_date_month / $b3_work_date_year</b><br /><br />" .
  
  "<b>B4.</b><br /><br />" .
  "Address of where you work will take place: <b>$b4_work_place</b><br /><br />" .
  
  "<b>B5.</b><br /><br />" .
  "Details of budget information relating to proposal<br /><br />" .
  "i) Details and breakdown of project costs:<br /><b>$b5_budget_details1</b><br />" .
  "ii) Details of funds raised to date, and potential sources of funding:<br /><b>$b5_budget_details2</b><br />" .
  "iii) Amount requested and when required:<br /><b>$b5_budget_details3</b><br /><br />" .
  
  "<b>B6.</b><br /><br />" .
  "Number of people to benefit directly from the project and over what time period:<br /><b>$b6_people_benefit</b><br /><br />" .
  
  "<b>B7.</b><br /><br />" .
  "How will success be measured and judged and how often<br /><b>$b7_success_measured</b><br /><br />" .
  
  "<b>C1.</b><br /><br />" .
  "Please provide number of people<br /><br />" .
  "Full time salaried staff: <b>$c1_number_people1</b><br />" .
  "Active volunteers: <b>$c1_number_people2</b><br />" .
  "Part time salaried staff: <b>$c1_number_people3</b><br />" .
  "Trustees/Governors: <b>$c1_number_people4</b><br /><br />" .
  
  "<b>C2.</b><br /><br />" .
  "Please provide names of up to 5 Trustees/Governors &amp; for each describe their strengths:<br /><b>$c2_trustees_governors</b><br /><br />" .
  
  "<b>C3.</b><br /><br />" .
  "Senior management team &amp; how organisation is managed:<br /><b>$c3_senior_management</b><br /><br />" .
  
  "<b>C4.</b><br /><br />" .
  "Names and job titles of 3 key people plus experience:<br /><b>$c4_key_people</b><br /><br />" .
  
  "<b>D1.</b><br /><br />" .
  "Organisations total income this year: <b>$d1_total_income</b><br /><br />" .
  
  "<b>D2.</b><br /><br />" .
  "Amount in unrestricted reserves at end of last financial year and approximately how many months of operating costs does this represent: <b>$d2_unrestricted_reserves</b><br /><br />" .
  
  "<b>D3.</b><br /><br />" .
  "What is your current financial position and any planned changes in he future:<br /><b>$d3_financial_position</b><br /><br />" .
  
  "<b>D4.</b><br /><br />" .
  "How much is spent on fundraising per year: <b>$d4_fund_raising</b><br /><br />" .
  
  "<b>D5.</b><br /><br />" .
  "How much income is raised from above activities: <b>$d5_income_raised</b><br /><br />" .
  
  "<b>D6.</b><br /><br />" .
  "Please provide names of significant donors (above &pound;5,000): <b>$d6_significant_donors</b><br /><br />" .
  
  "<b>E1.</b><br /><br />" .
  "Previous application: <b>$e1_previous_application</b><br />" .
  "Were you successful in obtaining financial support: <b>$e1_successful</b><br />" .
  "Please list amounts, dates and awards: <b>$e1_list_amounts</b><br /><br />" .
  
  "<b>E2.</b><br /><br />" .
  "Contact details of professional person or organisation we can contact for a reference.<br /><br />Name: <b>$e2_reference_name</b><br />Address: <b>$e2_reference_address</b><br />Telephone: <b>$e2_reference_phone</b><br />Email: <b>$e2_reference_email</b><br />Relationship to your organisation: <b>$e2_reference_relationship</b><br /><br />" .
  
  "<b>E3.</b><br /><br />" .
  "Why have you chosen the Evan Cornish Foundation: <b>$e3_why_ecf</b><br />" .
  "What difference will a grant from ECF make to your project<br /><b>$e4_what_difference</b><br />" .
  "Have you read an agree to terms and conditions: <b>$terms_agreement</b><br /><br /><br /><br />" .

  "Many thanks,<br /><br />" .
  "Rachel Cornish<br /><br />" .
  "Charity Administrator<br />The Evan Cornish Foundation<br />contactus@evancornishfoundation.org.uk<br />http://www.evancornishfoundation.org.uk" .
  "</p>", "text/html");
  

$result = $mailer->send($message);


?>
<?php 
$pagetitle = "Thank you";
$pageid = 4;

require("header.php"); 

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="application-form.php">Application Form</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>HOW TO APPLY</h2>
		<ul id="sub-nav">
			<li><a href="how-to-apply.php">Overview</a></li>
			<li class="current_page_item"><a href="application-form.php">Application Form</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
		<div class="thanks-width">
			<h1>Thank you for your application</h1>
			
			<h2>What do I need to do next?</h2>
			
			<p>Please send a copy of your <strong>recent annual accounts</strong> by email to <a href="mailto:contactus@evancornishfoundation.org.uk">contactus@evancornishfoundation.org.uk</a> or by post to: The Charity  Administrator, The Evan Cornish Foundation, The Innovation Centre, 217 Portobello, Sheffield, S1 4DP</p>
			<h2>What happens next...</h2>
			
			<p>Your application will be considered at the next Trustees meeting at which point a visit to your project or a meeting with your organisation may be desirable.</p>
			<p>Once a decision has been taken by the Trustees you will be notified in writing approximately two weeks from the Trustees meeting or visit to the project which ever was the later.</p>
			<p>Once you have accepted our offer and returned a signed acceptance of our Terms and Conditions and details of your bank account the grant will be paid directly into your account.</p>
			<p>Our Trustees will expect a six months update on the project and a completed Progress Report at 12 months.﻿</p>
			<p>If you have any questions and queries please do not hesitate to contact me.</p>
			<p>Many thanks</p>
			
			<p><strong>Rachel Cornish</strong></p>
			
			<p>Charity Administrator<br />The Evan Cornish Foundation</p>
			
		</div>
		</div>
	</div>
</div>
<?php require("footer.php"); 

session_destroy();


?>

			