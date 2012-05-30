<?php
session_start(); 
$a2_email=$_SESSION['a2_email'];

include 'dbConnect.php';

$con = mysql_connect($db_host, $db_user, $db_password);

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");

$result = mysql_query("SELECT a1_name_organisation, a1_name_applicant, a1_type_organisation, a1_registered_number, a1_organisation_established, a1_website_address, a2_key_person, a2_address, a2_telephone, a2_email, a3_organisation_activities, b1_project_title, b2_project_details, b3_work_date_month, b3_work_date_year, b4_work_place, b5_budget_details1, b5_budget_details2, b5_budget_details3, b6_people_benefit, b7_success_measured, c1_number_people1, c1_number_people2, c1_number_people3, c1_number_people4, c2_trustees_governors, c3_senior_management, c4_key_people, d1_total_income, d2_unrestricted_reserves, d3_financial_position, d4_fund_raising, d5_income_raised, d6_significant_donors, e1_previous_application, e1_successful, e1_list_amounts, e2_reference_name, e2_reference_address, e2_reference_phone, e2_reference_email, e2_reference_relationship, e3_why_ecf, e4_what_difference, terms_agreement, signature
FROM users  
WHERE a2_email = '{$a2_email}'");

$row = mysql_fetch_array( $result );
$_SESSION['a1_name_organisation']=$row['a1_name_organisation'];
$_SESSION['a1_name_applicant'] = $row['a1_name_applicant'];
$_SESSION['a1_type_organisation'] = $row['a1_type_organisation'];
$_SESSION['a1_registered_number'] = $row['a1_registered_number'];
$_SESSION['a1_organisation_established']=$row['a1_organisation_established'];
$_SESSION['a1_website_address'] = $row['a1_website_address'];
$_SESSION['a2_key_person'] = $row['a2_key_person'];
$_SESSION['a2_address'] = $row['a2_address'];
$_SESSION['a2_telephone']=$row['a2_telephone'];
$_SESSION['a2_email'] = $row['a2_email'];
$_SESSION['a3_organisation_activities'] = $row['a3_organisation_activities'];
$_SESSION['b1_project_title'] = $row['b1_project_title'];
$_SESSION['b2_project_details']=$row['b2_project_details'];
$_SESSION['b3_work_date_month'] = $row['b3_work_date_month'];
$_SESSION['b3_work_date_year'] = $row['b3_work_date_year'];
$_SESSION['b4_work_place'] = $row['b4_work_place'];
$_SESSION['b5_budget_details1']=$row['b5_budget_details1'];
$_SESSION['b5_budget_details2'] = $row['b5_budget_details2'];
$_SESSION['b5_budget_details3'] = $row['b5_budget_details3'];
$_SESSION['b6_people_benefit'] = $row['b6_people_benefit'];
$_SESSION['b7_success_measured']=$row['b7_success_measured'];
$_SESSION['c1_number_people1'] = $row['c1_number_people1'];
$_SESSION['c1_number_people2'] = $row['c1_number_people2'];
$_SESSION['c1_number_people3'] = $row['c1_number_people3'];
$_SESSION['c1_number_people4'] = $row['c1_number_people4'];
$_SESSION['c2_trustees_governors'] = $row['c2_trustees_governors'];
$_SESSION['c3_senior_management'] = $row['c3_senior_management'];
$_SESSION['c4_key_people'] = $row['c4_key_people'];
$_SESSION['d1_total_income']=$row['d1_total_income'];
$_SESSION['d2_unrestricted_reserves'] = $row['d2_unrestricted_reserves'];
$_SESSION['d3_financial_position'] = $row['d3_financial_position'];
$_SESSION['d4_fund_raising'] = $row['d4_fund_raising'];
$_SESSION['d5_income_raised'] = $row['d5_income_raised'];
$_SESSION['d6_significant_donors'] = $row['d6_significant_donors'];
$_SESSION['e1_previous_application']=$row['e1_previous_application'];
$_SESSION['e1_successful'] = $row['e1_successful'];
$_SESSION['e1_list_amounts'] = $row['e1_list_amounts'];
$_SESSION['e2_reference_name'] = $row['e2_reference_name'];
$_SESSION['e2_reference_address']=$row['e2_reference_address'];
$_SESSION['e2_reference_phone'] = $row['e2_reference_phone'];
$_SESSION['e2_reference_email'] = $row['e2_reference_email'];
$_SESSION['e2_reference_relationship'] = $row['e2_reference_relationship'];
$_SESSION['e3_why_ecf'] = $row['e3_why_ecf'];
$_SESSION['e4_what_difference'] = $row['e4_what_difference'];
$_SESSION['terms_agreement'] = $row['terms_agreement'];
$_SESSION['signature'] = $row['signature'];
mysql_close($con);
Header("Location: application-form.php"); break;

?>