<?php
//include connection file 
include "connection.php";
include_once('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('https://i2.wp.com/tutorialswebsite.com/wp-content/uploads/2016/01/cropped-LOGO-1.png',10,10,50);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Seating Allotment List','C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$display_heading = array('id'=>'ID', 'register_no'=> 'Reg_No', 'dept'=> 'Block_Name','floor'=> 'Floor','room_no'=> 'Room_No');

$result = mysqli_query($con, "SELECT id, register_no, dept,floor, room_no FROM student_details") or die("database error:". mysqli_error($conn));
$header = mysqli_query($con, "SHOW columns FROM student_details");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>

