<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');

$TOTAL = $_GET["TOTAL"];
$MINDATE = $_GET["MINDATE"];
$MAXDATE = $_GET["MAXDATE"];


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




class PDF extends FPDF {
	function Header(){

		global $TOTAL;
		global $MINDATE;
		global $MAXDATE;
		global $letterhead;

		$this->SetFont('Arial','B',15);


		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);

		//put logo
		$this->Image('../../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Ln(5);


		$this->Cell(180,10,'ALL LOAN INTEREST  FROM ' . $MINDATE . '  -  ' . $MAXDATE,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(10,10,'ID',1,0,'C',true);
		$this->Cell(60,10,'Name',1,0,'C',true);
		$this->Cell(15,10,' Amount ',1,0,'C',true);
		$this->Cell(50,10,' Purpose ',1,0,'C',true);
		$this->Cell(30,10,' Date ',1,0,'C',true);
		$this->Cell(30,10,' Staff ',1,1,'C',true);
		
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

 

$purpose1 = "Loan Interest";
$purpose2 = "Loans Interest Paid by the Guarantors";
$purpose3 = "Loan Interest and Penalty Interest";



$selectAllMEmbers = mysqli_query($conn, "SELECT * FROM company_revenue WHERE ( purpose='$purpose1' OR purpose='$purpose2' OR purpose='$purpose3' ) AND active='yes'  AND 
	date_added
	BETWEEN '$MINDATE' AND '$MAXDATE'
	ORDER BY id DESC 

	"); 


$getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE ( purpose='$purpose1' OR purpose='$purpose2' OR purpose='$purpose3' ) AND  active ='yes' AND 
	date_added
	BETWEEN '$MINDATE' AND '$MAXDATE'
	ORDER BY id DESC 

	"); 

$getRow = mysqli_fetch_assoc($getToContribution);
$totalContriamount = $getRow["amount"];


 if (mysqli_num_rows($selectAllMEmbers)!==0) {

while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


	


	$person_id = $getdac["person_id"];
	$amount = number_format($getdac["amount"], 2);
	$date_added = $getdac["date_added"];
	$done_by = $getdac["done_by"];
	$loan_id = $getdac["loan_id"];
	$thePrup = $getdac["purpose"];


	$amount = str_replace("-", "", $amount);

	// $loanIDD = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id' AND active='yes' LIMIT 1 ");

	$loanIDD = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id'  LIMIT 1 ");


	$llI = mysqli_fetch_assoc($loanIDD);

	$status = $llI["status"];


	if ($status==="Member") {
		$memB = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id'  LIMIT 1 ");
		$memaame = mysqli_fetch_assoc($memB);

		$Tabid = $memaame["id"];
		$firstname = $memaame["firstname"];
		$surname = $memaame["surname"];
		$persnaNames = $firstname . " " . $surname;
	} else {
		$memB = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id'  LIMIT 1 ");
		$memaame = mysqli_fetch_assoc($memB);

		$Tabid = $memaame["id"];
		$firstname = $memaame["firstname"];
		$surname = $memaame["surname"];
		$persnaNames = $firstname . " " . $surname;
	}

	$staffss = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by'  LIMIT 1 ");
	$ahemvals = mysqli_fetch_assoc($staffss);

	$firstName = $ahemvals["firstName"];
	$lastName = $ahemvals["lastName"];
	$staffFullNAme = $firstName . " " . $lastName;




	if ($thePrup==$purpose1) {
	
	$purposeText = "Loan Interest";
} 

if ($thePrup==$purpose2) {
	
	$purposeText = " Interest Paid by the Guarantors";
} 


if ($thePrup==$purpose3) {
	
	$purposeText = "Loan Interest and Penalty Interest";
}


	$pdf->Cell(10,10,$Tabid, 1,0, 'C');
	$pdf->Cell(60,10,$persnaNames, 1,0, 'C');
	$pdf->Cell(15,10,$amount, 1,0, 'C');
	$pdf->Cell(50,10,$purposeText, 1,0, 'C');
	$pdf->Cell(30,10,$date_added, 1,0, 'C');
	$pdf->Cell(30,10,$staffFullNAme, 1,1, 'C');

}



$pdf->SetFont('Arial','B',14);
$pdf->Cell(180,10, 'TOTAL LOAN INTEREST :  GHC '  . number_format($TOTAL, 2), 1,1, 'C');


$pdf->Output();

}


?>