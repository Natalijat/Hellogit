<?php
//session_start(); 
require('app.php');
include 'dbConnect.php';
$a2_email = $_GET['email'];

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
$result = mysql_query("SELECT a1_name_organisation, a1_name_applicant, a1_type_organisation, a1_registered_number, a1_organisation_established, a1_website_address, a2_key_person, a2_address, a2_telephone, a2_email, a3_organisation_activities, b1_project_title, b2_project_details, b3_work_date_month, b3_work_date_year, b4_work_place, b5_budget_details1, b5_budget_details2, b5_budget_details3, b6_people_benefit, b7_success_measured, c1_number_people1, c1_number_people2, c1_number_people3, c1_number_people4, c2_trustees_governors, c3_senior_management, c4_key_people, d1_total_income, d2_unrestricted_reserves, d3_financial_position, d4_fund_raising, d5_income_raised, d6_significant_donors, e1_previous_application, e1_successful, e1_list_amounts, e2_reference_name, e2_reference_address, e2_reference_phone, e2_reference_email, e2_reference_relationship, e3_why_ecf, e4_what_difference, terms_agreement, signature, application_timestamp
FROM users  
WHERE a2_email = '{$a2_email}'");

$row = mysql_fetch_array( $result );

if(mysql_num_rows($result)==0){ 
Header("Location: index.php");

break;};

$a1_name_organisation = cleanInput(iconv('UTF-8', 'windows-1252',$row['a1_name_organisation']));
$a1_name_applicant = cleanInput(iconv('UTF-8', 'windows-1252',$row['a1_name_applicant']));
$a1_type_organisation = cleanInput(iconv('UTF-8', 'windows-1252',$row['a1_type_organisation']));
$a1_registered_number = cleanInput(iconv('UTF-8', 'windows-1252',$row['a1_registered_number']));
$a1_organisation_established = cleanInput(iconv('UTF-8', 'windows-1252',$row['a1_organisation_established']));
$a1_website_address = cleanInput(iconv('UTF-8', 'windows-1252',$row['a1_website_address']));
$a2_key_person = cleanInput(iconv('UTF-8', 'windows-1252',$row['a2_key_person']));
$a2_address = cleanInput(iconv('UTF-8', 'windows-1252',$row['a2_address']));
$a2_telephone = cleanInput(iconv('UTF-8', 'windows-1252',$row['a2_telephone']));
$a2_email = cleanInput(iconv('UTF-8', 'windows-1252',$row['a2_email']));
$a3_organisation_activities = cleanInput(iconv('UTF-8', 'windows-1252',$row['a3_organisation_activities']));
$b1_project_title = cleanInput(iconv('UTF-8', 'windows-1252',$row['b1_project_title']));
$b2_project_details = cleanInput(iconv('UTF-8', 'windows-1252',$row['b2_project_details']));
$b3_work_date_month = cleanInput(iconv('UTF-8', 'windows-1252',$row['b3_work_date_month']));
$b3_work_date_year = cleanInput(iconv('UTF-8', 'windows-1252',$row['b3_work_date_year']));
$b4_work_place = cleanInput(iconv('UTF-8', 'windows-1252',$row['b4_work_place']));
$b5_budget_details1 = cleanInput(iconv('UTF-8', 'windows-1252',$row['b5_budget_details1']));
$b5_budget_details2 = cleanInput(iconv('UTF-8', 'windows-1252',$row['b5_budget_details2']));
$b5_budget_details3 = cleanInput(iconv('UTF-8', 'windows-1252',$row['b5_budget_details3']));
$b6_people_benefit = cleanInput(iconv('UTF-8', 'windows-1252',$row['b6_people_benefit']));
$b7_success_measured = cleanInput(iconv('UTF-8', 'windows-1252',$row['b7_success_measured']));
$c1_number_people1 = cleanInput(iconv('UTF-8', 'windows-1252',$row['c1_number_people1']));
$c1_number_people2 = cleanInput(iconv('UTF-8', 'windows-1252',$row['c1_number_people2']));
$c1_number_people3 = cleanInput(iconv('UTF-8', 'windows-1252',$row['c1_number_people3']));
$c1_number_people4 = cleanInput(iconv('UTF-8', 'windows-1252',$row['c1_number_people4']));
$c2_trustees_governors = cleanInput(iconv('UTF-8', 'windows-1252',$row['c2_trustees_governors']));
$c3_senior_management = cleanInput(iconv('UTF-8', 'windows-1252',$row['c3_senior_management']));
$c4_key_people = cleanInput(iconv('UTF-8', 'windows-1252',$row['c4_key_people']));
$d1_total_income =cleanInput(iconv('UTF-8', 'windows-1252',$row['d1_total_income']));
$d2_unrestricted_reserves = cleanInput(iconv('UTF-8', 'windows-1252',$row['d2_unrestricted_reserves']));
$d3_financial_position = cleanInput(iconv('UTF-8', 'windows-1252',$row['d3_financial_position']));
$d4_fund_raising = cleanInput(iconv('UTF-8', 'windows-1252',$row['d4_fund_raising']));
$d5_income_raised = cleanInput(iconv('UTF-8', 'windows-1252',$row['d5_income_raised']));
$d6_significant_donors = cleanInput(iconv('UTF-8', 'windows-1252',$row['d6_significant_donors']));
$e1_previous_application = $row['e1_previous_application'];
$e1_successful = $row['e1_successful'];
$e1_list_amounts = cleanInput(iconv('UTF-8', 'windows-1252',$row['e1_list_amounts']));
$e2_reference_name = cleanInput(iconv('UTF-8', 'windows-1252',$row['e2_reference_name']));
$e2_reference_address = cleanInput(iconv('UTF-8', 'windows-1252',$row['e2_reference_address']));
$e2_reference_phone = cleanInput(iconv('UTF-8', 'windows-1252',$row['e2_reference_phone']));
$e2_reference_email = cleanInput(iconv('UTF-8', 'windows-1252',$row['e2_reference_email']));
$e2_reference_relationship = cleanInput(iconv('UTF-8', 'windows-1252',$row['e2_reference_relationship']));
$e3_why_ecf = cleanInput(iconv('UTF-8', 'windows-1252',$row['e3_why_ecf']));
$e4_what_difference = cleanInput(iconv('UTF-8', 'windows-1252',$row['e4_what_difference']));
$signature = cleanInput(iconv('UTF-8', 'windows-1252',$row['signature']));
$application_timestamp =  strtotime($row['application_timestamp']);
$application_date = date('d/m/Y', $application_timestamp);

require('lib/fpdf17/fpdf.php');
class PDF extends FPDF
{

	function Header() {
	 // Logo
    //$this->Image('css/images/evan-cornish-foundation.gif',10,6,30);
	//$this->SetFont( 'Arial', 'B', 18 );
	//Frame colour
	//$this->SetDrawColor(0,80,180);
	//Fill Colour
    //$this->SetFillColor(200,220,255);
	//Text colour
    //$this->SetTextColor(220,50,50);
    // Thickness of frame (1 mm)
    //$this->SetLineWidth(0);
	//$this->Cell( 0, 10, "The Evan Cornish Foundation", 0, 1, 'C' );
	//$this->ln(2);
	//$this->Cell( 0, 10, "Application Form for Grant Funding", 0, 1, 'C' );
	//$this->ln( 5 );
    }
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}


}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//Logo
$pdf->Image('css/images/evan-cornish-foundation.gif',10,6,30);
//Heading on first page
$pdf->SetFont( 'Arial', 'B', 18 );
$pdf->Cell( 0, 10, "The Evan Cornish Foundation", 0, 1, 'C' );
$pdf->ln(2);
$pdf->Cell( 0, 10, "Application Form for Grant Funding", 0, 1, 'C' );
$pdf->ln( 5 );

//Application form
//SECTION A
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10, 'A. APPLICANT\'s DETAILS');
$pdf->Ln();
$pdf->Cell(20,10, 'A1.', 1, 0, 'C');
$pdf->Cell(0,10, 'Name of organisation:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a1_name_organisation, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Name of applicant: ' ,1, 0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $a1_name_applicant, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Type of organisation: ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a1_type_organisation, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'If charity, what is registered number:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a1_registered_number, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Year organisation was established:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a1_organisation_established, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Website address:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a1_website_address, 1, 0, 'L');
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'A2.', 1, 0, 'C');
$pdf->Cell(0,10, 'Key person dealing with application:   ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a2_key_person, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Address:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,32, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,8, $a2_address,1,'L');
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Telephone:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a2_telephone, 1, 0, 'L');
$pdf->AddPage();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Email:   ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $a2_email, 1, 0, 'L');
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'A3.', 1, 0, 'C');
$pdf->Cell(0,10, 'Describe you organisation and the main activities: ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,10, $a3_organisation_activities,1,'L');
$pdf->AddPage();

//SECTION B
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'B. PROPOSAL FOR FUNDING');
$pdf->Ln();
$pdf->Cell(20,10, 'B1.', 1, 0, 'C');
$pdf->Cell(0,10, 'Project title:  ' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,30, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $b1_project_title, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'B2.', 1, 0, 'C');
$pdf->Cell(0,10, 'Project details:   ' ,1, 0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,8, $b2_project_details,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'B3.', 1, 0, 'C');
$pdf->Cell(0,10, 'When will the work take place:  ' ,1, 0,'L'); 
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, $b3_work_date_month.' '.$b3_work_date_year, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'B4.', 1, 0, 'C');
$pdf->Cell(0,10, 'Address of where work will take place:  ' ,1, 0,'L'); 
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,32, '', 0, 0, 'C');
$pdf->MultiCell(0,8, $b4_work_place,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'B5.', 1, 0, 'C');
$pdf->Cell(0,10, 'Details of budget information relating to proposal' ,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'i) Details and breakdown of project costs: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,8, $b5_budget_details1,1,'L');
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'ii) Details of funds raised to date, and potential sources of funding: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,8, $b5_budget_details2,1,'L');
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'iii) Amount requested and when required: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,20, '', 0, 0, 'C');
$pdf->MultiCell(0,10, $b5_budget_details3,1,'L');

$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'B6.', 1, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, 'Number of people to benefit directly from the project and over what time period: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $b6_people_benefit,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'B7.', 1, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, 'How will success be measured and judged and how often: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $b7_success_measured,1,'L');

$pdf->AddPage();

//SECTION C
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'C. PEOPLE WITHIN YOUR ORGANISATION');
$pdf->Ln();
$pdf->Cell(20,10, 'C1.', 1, 0, 'C');
$pdf->Cell(0,10, 'Please provide number of people',1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, 'Full time salaried staff: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $c1_number_people1,1, 0,'L');
$pdf->SetFont('Arial','B',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, 'Active volunteers: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $c1_number_people2,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Part time salaried staff: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $c1_number_people3,1, 0,'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Trustees/Governors: ',1, 0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $c1_number_people4,1, 0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'C2.', 1, 0, 'C');
$pdf->MultiCell(0,5, 'Please provide names of up to 5 Trustees/Governors & for each, describe their strengths: ',1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,30, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $c2_trustees_governors,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'C3.', 1, 0, 'C');
$pdf->Cell(0,10, 'Senior management team & how organisation is managed: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $c3_senior_management,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'C4.', 1, 0, 'C');
$pdf->Cell(0,10, 'Names and job titles of 3 key people plus experience: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $c4_key_people,1,'L');

$pdf->AddPage();

//SECTION D
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'D. FINANCIAL INFORMATION');
$pdf->Ln();
$pdf->Cell(20,10, 'D1.', 1, 0, 'C');
$pdf->Cell(0,10, 'Organisations total income this year: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $d1_total_income, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'D2.',1, 0, 'C');
$pdf->MultiCell(0,5, 'Amount in unrestricted reserves at end of last financial year and approximately how many months of operating costs does this represent: ',1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $d2_unrestricted_reserves, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'D3.',1, 0, 'C');
$pdf->Cell(0,10, 'What is your current financial position and any planned changes in the future: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,24, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $d3_financial_position,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'D4.',1, 0, 'C');
$pdf->Cell(0,10, 'How much is spent on fundraising per year: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $d4_fund_raising, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'D5.',1, 0, 'C');
$pdf->Cell(0,10, 'How much income is raised from above activities: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $d5_income_raised, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'D6.',1, 0, 'C');
$pdf->Cell(0,10, 'Please provide names of significant donors (above '.utf8_decode("£").'5,000): ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->MultiCell(0,10, $d6_significant_donors,1,'L');

$pdf->AddPage();

//SECTION E
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'E. YOUR APPROACH TO THE EVAN CORNISH FOUNDATION');
$pdf->Ln();
$pdf->Cell(20,10, 'E1.', 1, 0, 'C');
$pdf->Cell(0,10, 'Previous applications: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $e1_previous_application, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Were you successful in obtaining financial support: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $e1_successful, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Please list amounts, dates and awards: ',1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->MultiCell(0,10, $e1_list_amounts,1,'L');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'E2.', 1, 0, 'C');
$pdf->MultiCell(0,5, 'Contact details of professional person or organisation we can contact for a reference',1,'L');
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, 'Name: ',1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $e2_reference_name, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Address: ',1, 0, 'L');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,30, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $e2_reference_address,1,'L');
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Telephone: ',1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $e2_reference_phone, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Email: ',1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $e2_reference_email, 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Relationship to your organisation: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,10, '', 0, 0, 'C');
$pdf->Cell(0,10, $e2_reference_relationship, 1, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'E3.',1, 0, 'L');
$pdf->Cell(0,10, 'Why have you chosen the Evan Cornish Foundation: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,36, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $e3_why_ecf,1,'L');

$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10, 'E4.', 1, 0, 'L');
$pdf->Cell(0,10, 'What difference will a grant from ECF make to your project: ', 1, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Cell(20,30, '', 0, 0, 'C');
$pdf->MultiCell(0,6, $e4_what_difference,1,'L');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10, 'Signature: '.$signature);
$pdf->Ln();
$pdf->Cell(0,10, 'Application date: '.$application_date);

//The name of the output file
$pdf->Output($a1_name_organisation.'.pdf', 'D');

?>