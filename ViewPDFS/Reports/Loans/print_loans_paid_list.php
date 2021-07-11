<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];

$getLoanTypeName = $_GET["TRUE"];



class PDF extends FPDF {
	function Header(){

		global $letterhead;
		global $getLoanTypeName;

		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);
		
		$this->Image('../../../school_data/letter_head/'.$letterhead,10,10,270);
		
		
		
		//dummy cell to give line spacing
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',18);




		$this->SetFont('Arial','B',12);

		$this->Cell(270,10,'ACTIVE LOANS COLLECTED LIST FOR : '  ,0,1,'C');
		

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(30,10,'ID',1,0,'C',true);
		$this->Cell(60,10,'Name',1,0,'C',true);
		$this->Cell(20,10,'Type',1,0,'C',true);
		$this->Cell(25,10,'Mobile',1,0,'C',true);
		$this->Cell(20,10,'Amount Paid',1,0,'C',true);
		$this->Cell(20,10,'Balance Before',1,0,'C',true);
		$this->Cell(40,10,'Date Paid',1,0,'C',true);
		$this->Cell(50,10,'Staff',1,1,'C',true);
		




		
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

$pdf = new PDF('L','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);


$selectLoanAll = mysqli_query($conn, "SELECT * FROM loans_pay WHERE active ='yes' ORDER BY id DESC ");





while ( $getdac = mysqli_fetch_assoc($selectLoanAll)) {


	$id = $getdac["id"];
	$person_id = $getdac["person_id"];
	$loan_id = $getdac["loan_id"];
	$loan_collected_date = $getdac["loan_collected_date"];
	$amount_collected = $getdac["amount_collected"];
	$amount_paid = $getdac["amount_paid"];
	$balance_before = $getdac["balance_before"];
	$date_paid = $getdac["date_paid"];
	$receipt_no = $getdac["receipt_no"];
	$date_created = $getdac["date_created"];
	$staff = $getdac["staff"];



	$selectLoanAll2 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND id='$loan_id' ");

	$getdac3 = mysqli_fetch_assoc($selectLoanAll2);

	$status = $getdac3["status"];


	if ($status==="Customer") {

		$selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

		$getDemMem = mysqli_fetch_assoc($selMems);

		$person_idss = $getDemMem["customer_id"];
		$firstname = $getDemMem["firstname"];
		$surname = $getDemMem["surname"];
		$telephone = $getDemMem["telephone"];

		$personName = $firstname . ' ' .  $surname ;

	} else {
		$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

		$getDemMem = mysqli_fetch_assoc($selMems);

		$person_idss = $getDemMem["member_id"];
		$firstname = $getDemMem["firstname"];
		$surname = $getDemMem["surname"];
		$telephone = $getDemMem["telephone"];

		$personName = $firstname .  ' ' .  $surname ;
	}



		$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$staff' AND active='yes'  LIMIT 1  ");

	$getDem2 = mysqli_fetch_assoc($juju);
	$firstName = $getDem2["firstName"];
	$lastName = $getDem2["lastName"];
	$staffName = $firstName . ' ' . ' ' . ' ' .  $lastName;





	$pdf->Cell(30,10,$person_idss, 1,0, 'C');
	$pdf->Cell(60,10,$personName, 1,0, 'C');
	$pdf->Cell(20,10,$status, 1,0, 'C');
	$pdf->Cell(25,10,$telephone, 1,0, 'C');
	$pdf->Cell(20,10,number_format($amount_paid, 2), 1,0, 'C');
	$pdf->Cell(20,10,number_format($balance_before, 2), 1,0, 'C');
	$pdf->Cell(40,10,$date_created, 1,0, 'C');
	$pdf->Cell(50,10,$staffName, 1,1, 'C');




}



$pdf->Output();




?>