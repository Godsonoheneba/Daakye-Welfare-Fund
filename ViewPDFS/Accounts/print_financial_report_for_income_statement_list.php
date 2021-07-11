<?php 


include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getTOCheck = $_GET["PRINT_ALL_INCOME_REPORT_FOR_COMPANY"];
$getTotalAmount = $_GET["ACTION"];
$getMinDate = $_GET["MINDATE"];
$getMaxDate = $_GET["MAXDATE"];


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




class PDF extends FPDF {
	function Header(){

		global $getTotalAmount;
		global $getMinDate;
		global $getMaxDate;
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


		$this->Cell(180,10,'INCOME STATEMENT FOR   ' . $getMinDate . '  -  ' . $getMaxDate,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(40,10,'Date',1,0,'C',true);
		$this->Cell(30,10,' Amount ',1,0,'C',true);
		$this->Cell(70,10,' Purpose ',1,0,'C',true);
		$this->Cell(40,10,' Staff ',1,1,'C',true);
		
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





if ($getTOCheck==="REVENUE") {




	$selActivities = mysqli_query($conn, "SELECT * FROM company_revenue WHERE

		date_added
		BETWEEN '$getMinDate' AND '$getMaxDate'
		ORDER BY id DESC 

		");



	$getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE  active='yes' AND date_added

		BETWEEN '$getMinDate' AND '$getMaxDate'
		ORDER BY id DESC

		");
	$getRow = mysqli_fetch_assoc($getCoRev); 
	$totalContrExpense = $getRow["amount"];

	$totalContrExpense = round($totalContrExpense);




	while ($gyt = mysqli_fetch_assoc($selActivities)) {

		$person_id = $gyt["person_id"];
		$amount = $gyt["amount"];
		$purpose = $gyt["purpose"];
		$purpose_date = $gyt["purpose_date"];
		$done_by = $gyt["done_by"];
		$date_added = $gyt["date_added"];

		$amount = number_format($amount, 2);

		$staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$done_by' AND active='yes' LIMIT 1 ");
		$ahemvals = mysqli_fetch_assoc($staffss);

		$firstName = $ahemvals["firstName"];
		$lastName = $ahemvals["lastName"];
		$staffFullNAme = $firstName . " " . $lastName;


		$pdf->Cell(40,10,$date_added, 1,0, 'C');
		$pdf->Cell(30,10,$amount, 1,0, 'C');
		$pdf->Cell(70,10,$purpose, 1,0, 'C');
		$pdf->Cell(40,10,$staffFullNAme, 1,1, 'C');

	}



	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(180,10, 'TOTAL INCOME :  GHC '  . round($getTotalAmount, 2), 1,1, 'C');
	$pdf->Cell(180,10, 'TOTAL EXPENSES :  GHC '  . $totalContrExpense, 1,1, 'C');


	$getRemainngBalance = $getTotalAmount - $totalContrExpense;

	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(180,10, 'TOTAL REVENUE :  GHC '  . round($getRemainngBalance, 2), 1,1, 'C');




} else {
	

	
	


	$selActivities = mysqli_query($conn, "SELECT * FROM company_expenses WHERE

		date_added
		BETWEEN '$getMinDate' AND '$getMaxDate'
		ORDER BY id DESC 

		");



	$getCoRev1 = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND date_added

		BETWEEN '$getMinDate' AND '$getMaxDate'
		ORDER BY id DESC

		");
	$getRow1 = mysqli_fetch_assoc($getCoRev1); 
	$totalContrRev = $getRow1["amount"];




	$getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE  active='yes' AND date_added

		BETWEEN '$getMinDate' AND '$getMaxDate'
		ORDER BY id DESC

		");
	$getRow = mysqli_fetch_assoc($getCoRev); 
	$totalContrExpense = round($getRow["amount"]);




	while ($gyt = mysqli_fetch_assoc($selActivities)) {

		$name = $gyt["name"];
		$amount = $gyt["amount"];
		$receipt_number = $gyt["receipt_number"];
		$done_by = $gyt["done_by"];
		$date_added = $gyt["date_added"];

		$amount = number_format($amount, 2);

		$staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$done_by' AND active='yes' LIMIT 1 ");
		$ahemvals = mysqli_fetch_assoc($staffss);

		$firstName = $ahemvals["firstName"];
		$lastName = $ahemvals["lastName"];
		$staffFullNAme = $firstName . " " . $lastName;


		$pdf->Cell(40,10,$date_added, 1,0, 'C');
		$pdf->Cell(30,10,$amount, 1,0, 'C');
		$pdf->Cell(70,10,$name, 1,0, 'C');
		$pdf->Cell(40,10,$staffFullNAme, 1,1, 'C');

	}



	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(180,10, 'TOTAL INCOME :  GHC '  . round($totalContrRev, 2), 1,1, 'C');
	$pdf->Cell(180,10, 'TOTAL EXPENSES :  GHC '  . $totalContrExpense, 1,1, 'C');


	$getRemainngBalance = $totalContrRev - $totalContrExpense;

	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(180,10, 'TOTAL REVENUE :  GHC '  . round($getRemainngBalance, 2), 1,1, 'C');





}









 















$pdf->Output();




?>