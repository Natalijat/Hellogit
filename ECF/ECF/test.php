<?php


include 'dbConnect.php';

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
$result = mysql_query("SELECT id, a1_name_applicant, a2_email, ip, last_login, creation_timestamp 
FROM users  
WHERE id = '1'");

$row = mysql_fetch_array( $result );

if(mysql_num_rows($result)==0){ 
Header("Location: index.php");

break;};



$id = $row['id'];
$a1_name_applicant = $row['a1_name_applicant'];
$a2_email = $row['a2_email'];
$ip = $row['ip'];
$last_login = $row['last_login'];
$creation_timestamp = $row['creation_timestamp'];



	


require('lib/fpdf17/fpdf.php');
class PDF extends FPDF
{
	
	function Header() {
	$this->SetFont( 'Arial', 'B', 18 );
	$this->Cell( 0, 9, 'Application form', 1, 1, 'C' );
	$this->ln( 5 );
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
$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,10, 'ID: '.$id);
$pdf->Ln();
$pdf->Cell(30,10, 'Name: '.$a1_name_applicant);
$pdf->Ln();
$pdf->Cell(30,10, 'Email: '.$a2_email);
$pdf->Ln();
$pdf->Cell(30,10, 'IP: '.$ip);
$pdf->Ln();
$pdf->Cell(30,10, 'Last login: '.$last_login);
$pdf->Ln();
$pdf->Cell(30,10, 'Created on: '.$creation_timestamp);
$pdf->Ln();
$pdf->Output();

?>