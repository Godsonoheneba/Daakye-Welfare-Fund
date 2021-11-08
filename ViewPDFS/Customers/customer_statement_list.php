<?php 


include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getAdmisionNumber = $_GET["ACTION"];
$getMinDate = $_GET["MINDATE"];
$getMaxDate = $_GET["MAXDATE"];


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];


$stud = mysqli_query($conn, "SELECT * FROM students WHERE admissionNumber='$getAdmisionNumber' AND active='yes' LIMIT 1 ");
$ahem = mysqli_fetch_assoc($stud);

$first_name = $ahem["first_name"];
$last_name = $ahem["last_name"];
$middle_name = $ahem["middle_name"];

$studFFullNAme = $first_name . " " . $last_name . " " . $middle_name;






class PDF extends FPDF {
	function Header(){

		global $getAdmisionNumber;
		global $studFFullNAme;
		global $letterhead;

		$this->SetFont('Arial','B',15);


		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);

		//put logo
		$this->Image('../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Ln(5);


		$this->Cell(180,10,'FEES STATEMENTS FOR   ' . $studFFullNAme . ' | # ' . $getAdmisionNumber,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(20,10,'Receipt #',1,0,'C',true);
		$this->Cell(20,10,' Amount ',1,0,'C',true);
		$this->Cell(30,10,' Balance Before ',1,0,'C',true);
		$this->Cell(30,10,' Current Balance ',1,0,'C',true);
		$this->Cell(40,10,'Date',1,0,'C',true);
		$this->Cell(50,10,'Done By',1,1,'C',true);

		
	}
	function Footer(){




		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);

		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages} |  "  ,0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);





$selActivities = mysqli_query($conn, "SELECT * FROM fees_payment WHERE

	admission_number='$getAdmisionNumber' AND 
	fee_pay_date
	BETWEEN '$getMinDate' AND 'getMaxDate'
	ORDER BY id DESC 

	");



while ($gyt = mysqli_fetch_assoc($selActivities)) {

	$id = $gyt["id"];
	$admission_number = $gyt["admission_number"];
	$class_id = $gyt["class_id"];
	$payment_mode = $gyt["payment_mode"];
	$paid_by = $gyt["paid_by"];
	$checque_no = $gyt["checque_no"];
	$amount_in_fig = $gyt["amount_in_fig"];
	$amount_in_words = $gyt["amount_in_words"];
	$payment_type = $gyt["payment_type"];
	$receipt_number = $gyt["receipt_number"];
	$fee_pay_date = $gyt["fee_pay_date"];
	$date_created = $gyt["date_created"];
	$created_by = $gyt["created_by"];
	$balance_before = $gyt["balance_before"];
	$current_balance = $gyt["current_balance"];


	$staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$created_by' AND active='yes' LIMIT 1 ");
	$ahemvals = mysqli_fetch_assoc($staffss);

	$firstName = $ahemvals["firstName"];
	$lastName = $ahemvals["lastName"];
	$staffFullNAme = $firstName . " " . $lastName;

	


	$amount_in_fig = number_format($amount_in_fig, 2);
	$balance_before = number_format($balance_before, 2);
	$current_balance = number_format($current_balance, 2);

	$pdf->Cell(20,10,$receipt_number, 1,0, 'C');
	$pdf->Cell(20,10,$amount_in_fig, 1,0, 'C');
	$pdf->Cell(30,10,$balance_before, 1,0, 'C');
	$pdf->Cell(30,10,$current_balance, 1,0, 'C');
	$pdf->Cell(40,10,$date_created, 1,0, 'C');
	$pdf->Cell(50,10,$staffFullNAme, 1,1, 'C');


}



$pdf->Output();




?>