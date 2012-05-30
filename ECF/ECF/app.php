<?php 
include 'dbConnect.php';
session_start(); 

function cleanInput($input) {

   $search = array(
  	'@<>@',
    '@<script[^>]*?>.*?</script>@siU',   	// Strip out javascript
    '@<style[^>]*?>.*?</style>@siU',   // Strip style tags properly 
	'@<embed[^>]*?>.*?</embed>@siU',    // embed
	'@<object[^>]*?>.*?</object>@siU',    // object
	'@<iframe[^>]*?>.*?</iframe>@siU',    // iframe	    
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@',         // Strip multi-line comments
	'@</?[^>]*>*@' 		  				// html tags
	
  );

    $output = preg_replace($search, '', $input);
	$output= stripslashes($output);
    return $output;
  }
    

function sanitize($input) {
    /*if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;*/
	$output=addslashes($input);
	return $output; 
}


//Update session variables after clicking on'Next'
if(isset($_POST['a1_name_organisation'])) {
$_SESSION['a1_name_organisation'] = sanitize($_POST['a1_name_organisation']);
}

if(isset($_POST['a1_name_applicant'])) {
$_SESSION['a1_name_applicant'] = sanitize($_POST['a1_name_applicant']);
}

if(isset($_POST['a1_type_organisation'])) {
$_SESSION['a1_type_organisation'] = sanitize($_POST['a1_type_organisation']);
}

if(isset($_POST['a1_registered_number'])) {
$_SESSION['a1_registered_number'] = sanitize($_POST['a1_registered_number']);
}

if(isset($_POST['a1_organisation_established'])) {
$_SESSION['a1_organisation_established'] = sanitize($_POST['a1_organisation_established']);
}

if(isset($_POST['a1_website_address'])) {
$_SESSION['a1_website_address'] = sanitize($_POST['a1_website_address']);
}

if(isset($_POST['a2_key_person'])) {
$_SESSION['a2_key_person'] = sanitize($_POST['a2_key_person']);
}

if(isset($_POST['a2_address'])) {
$_SESSION['a2_address'] = sanitize($_POST['a2_address']);
}

if(isset($_POST['a2_telephone'])) {
$_SESSION['a2_telephone'] = sanitize($_POST['a2_telephone']);
}

if(isset($_POST['a2_email'])) {
$_SESSION['a2_email'] = sanitize($_POST['a2_email']);
}

if(isset($_POST['a3_organisation_activities'])) {
$_SESSION['a3_organisation_activities'] = sanitize($_POST['a3_organisation_activities']);
}

if (isset($_POST['b1_project_title'])) {
$_SESSION['b1_project_title'] = sanitize($_POST['b1_project_title']);
}

if(isset($_POST['b2_project_details'])) {
$_SESSION['b2_project_details'] = sanitize($_POST['b2_project_details']);
}

if(isset($_POST['b3_work_date_month'])) {
$_SESSION['b3_work_date_month'] = sanitize($_POST['b3_work_date_month']);
}

if(isset($_POST['b3_work_date_year'])) {
$_SESSION['b3_work_date_year'] = sanitize($_POST['b3_work_date_year']);
}

if(isset($_POST['b4_work_place'])) {
$_SESSION['b4_work_place'] = sanitize($_POST['b4_work_place']);
}

if(isset($_POST['b5_budget_details1'])) {
$_SESSION['b5_budget_details1'] = sanitize($_POST['b5_budget_details1']);
}

if(isset($_POST['b5_budget_details2'])) {
$_SESSION['b5_budget_details2'] = sanitize($_POST['b5_budget_details2']);
}

if(isset($_POST['b5_budget_details3'])) {
$_SESSION['b5_budget_details3'] = sanitize($_POST['b5_budget_details3']);
}

if(isset($_POST['b6_people_benefit'])) {
$_SESSION['b6_people_benefit'] = sanitize($_POST['b6_people_benefit']);
}

if(isset($_POST['b7_success_measured'])) {
$_SESSION['b7_success_measured'] = sanitize($_POST['b7_success_measured']);
}

if(isset($_POST['c1_number_people1'])) {
$_SESSION['c1_number_people1'] = sanitize($_POST['c1_number_people1']);
}

if(isset($_POST['c1_number_people2'])) {
$_SESSION['c1_number_people2'] = sanitize($_POST['c1_number_people2']);
}

if(isset($_POST['c1_number_people3'])) {
$_SESSION['c1_number_people3'] = sanitize($_POST['c1_number_people3']);
}

if(isset($_POST['c1_number_people4'])) {
$_SESSION['c1_number_people4'] = sanitize($_POST['c1_number_people4']);
}

if(isset($_POST['c2_trustees_governors'])) {
$_SESSION['c2_trustees_governors'] = sanitize($_POST['c2_trustees_governors']);
}

if(isset($_POST['c3_senior_management'])) {
$_SESSION['c3_senior_management'] = sanitize($_POST['c3_senior_management']);
}

if(isset($_POST['c4_key_people'])) {
$_SESSION['c4_key_people'] = sanitize($_POST['c4_key_people']);
}

if(isset($_POST['d1_total_income'])) {
$_SESSION['d1_total_income'] = sanitize($_POST['d1_total_income']);
}

if(isset($_POST['d2_unrestricted_reserves'])) {
$_SESSION['d2_unrestricted_reserves'] = sanitize($_POST['d2_unrestricted_reserves']);
}

if(isset($_POST['d3_financial_position'])) {
$_SESSION['d3_financial_position'] = sanitize($_POST['d3_financial_position']);
}

if(isset($_POST['d4_fund_raising'])) {
$_SESSION['d4_fund_raising'] = sanitize($_POST['d4_fund_raising']);
}

if(isset($_POST['d5_income_raised'])) {
$_SESSION['d5_income_raised'] = sanitize($_POST['d5_income_raised']);
}

if(isset($_POST['d6_significant_donors'])) {
$_SESSION['d6_significant_donors'] = sanitize($_POST['d6_significant_donors']);
}

if(isset($_POST['e1_previous_application'])) {
$_SESSION['e1_previous_application'] = sanitize($_POST['e1_previous_application']);
}

if(isset($_POST['e1_successful'])) {
$_SESSION['e1_successful'] = sanitize($_POST['e1_successful']);
}

if(isset($_POST['e1_list_amounts'])) {
$_SESSION['e1_list_amounts'] = sanitize($_POST['e1_list_amounts']);
}

if(isset($_POST['e2_reference_name'])) {
$_SESSION['e2_reference_name'] = sanitize($_POST['e2_reference_name']);
}

if(isset($_POST['e2_reference_address'])) {
$_SESSION['e2_reference_address'] = sanitize($_POST['e2_reference_address']);
}

if(isset($_POST['e2_reference_phone'])) {
$_SESSION['e2_reference_phone'] = sanitize($_POST['e2_reference_phone']);
}

if(isset($_POST['e2_reference_email'])) {
$_SESSION['e2_reference_email'] = sanitize($_POST['e2_reference_email']);
}

if(isset($_POST['e2_reference_relationship'])) {
$_SESSION['e2_reference_relationship'] = sanitize($_POST['e2_reference_relationship']);
}

if(isset($_POST['e3_why_ecf'])) {
$_SESSION['e3_why_ecf'] = sanitize($_POST['e3_why_ecf']);
}

if(isset($_POST['e4_what_difference'])) {
$_SESSION['e4_what_difference'] = sanitize($_POST['e4_what_difference']);
}

if(isset($_POST['terms_agreement'])) {
$_SESSION['terms_agreement'] = sanitize($_POST['terms_agreement']);
}

if(isset($_POST['signature'])) {
$_SESSION['signature'] = sanitize($_POST['signature']);
}

//Update database after clicking 'Next'

$con = mysql_connect($db_host, $db_user, $db_password);

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
if(isset($_SESSION['a2_email'])) {	
$query = "
UPDATE users 
SET a1_name_organisation ='".$_SESSION['a1_name_organisation']."', a1_name_applicant ='".$_SESSION['a1_name_applicant']."', a1_type_organisation ='".$_SESSION['a1_type_organisation']."', a1_registered_number ='".$_SESSION['a1_registered_number']."', a1_organisation_established ='".$_SESSION['a1_organisation_established']."', a1_website_address ='".$_SESSION['a1_website_address']."', a2_key_person ='".$_SESSION['a2_key_person']."', a2_address ='".$_SESSION['a2_address']."', a2_telephone ='".$_SESSION['a2_telephone']."', a2_email ='".$_SESSION['a2_email']."', a3_organisation_activities ='".$_SESSION['a3_organisation_activities']."', b1_project_title ='".$_SESSION['b1_project_title']."', b2_project_details ='".$_SESSION['b2_project_details']."', b3_work_date_month ='".$_SESSION['b3_work_date_month']."', b3_work_date_year ='".$_SESSION['b3_work_date_year']."', b4_work_place ='".$_SESSION['b4_work_place']."', b5_budget_details1 ='".$_SESSION['b5_budget_details1']."', b5_budget_details2 ='".$_SESSION['b5_budget_details2']."', b5_budget_details3 ='".$_SESSION['b5_budget_details3']."', b6_people_benefit ='".$_SESSION['b6_people_benefit']."', b7_success_measured ='".$_SESSION['b7_success_measured']."', c1_number_people1 ='".$_SESSION['c1_number_people1']."', c1_number_people2 ='".$_SESSION['c1_number_people2']."', c1_number_people3 ='".$_SESSION['c1_number_people3']."', c1_number_people4 ='".$_SESSION['c1_number_people4']."', c2_trustees_governors ='".$_SESSION['c2_trustees_governors']."', c3_senior_management ='".$_SESSION['c3_senior_management']."', c4_key_people ='".$_SESSION['c4_key_people']."', d1_total_income ='".$_SESSION['d1_total_income']."', d2_unrestricted_reserves ='".$_SESSION['d2_unrestricted_reserves']."', d3_financial_position ='".$_SESSION['d3_financial_position']."', d4_fund_raising ='".$_SESSION['d4_fund_raising']."', d5_income_raised ='".$_SESSION['d5_income_raised']."', d6_significant_donors ='".$_SESSION['d6_significant_donors']."', e1_previous_application ='".$_SESSION['e1_previous_application']."', e1_successful ='".$_SESSION['e1_successful']."', e1_list_amounts ='".$_SESSION['e1_list_amounts']."', e2_reference_name ='".$_SESSION['e2_reference_name']."', e2_reference_address ='".$_SESSION['e2_reference_address']."', e2_reference_phone ='".$_SESSION['e2_reference_phone']."', e2_reference_email ='".$_SESSION['e2_reference_email']."', e2_reference_relationship ='".$_SESSION['e2_reference_relationship']."', e3_why_ecf ='".$_SESSION['e3_why_ecf']."', e4_what_difference ='".$_SESSION['e4_what_difference']."', terms_agreement ='".$_SESSION['terms_agreement']."', signature ='".$_SESSION['signature']."'
WHERE a2_email = '{$_SESSION['a2_email']}'";
//echo  $query;
mysql_query($query) or die('Error, insert query failed');
}

mysql_close($con);

?>