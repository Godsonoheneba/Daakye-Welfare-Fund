<?php 
 
 
include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMemberID = $_GET["DACO"];
$getMemberIDEncrypt = $_GET["TRUE"];

$stud = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id='$getMemberID' AND customer_id_encrypt='$getMemberIDEncrypt' AND active='yes' LIMIT 1 ");

$ahem = mysqli_fetch_assoc($stud);
$firstname = $ahem["firstname"];
$surname = $ahem["surname"];

$memberFullname = $firstname . " " . $surname;


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




class PDF extends FPDF {
	function Header(){

		global $getMemberID;
		global $memberFullname;
		global $letterhead;

		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);
		
		$this->Image('../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		
		//dummy cell to give line spacing
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',18);




		$this->SetFont('Arial','B',12);

		$this->Cell(180,10,'CUSTOMER ACTIVITIES   ',0,1,'C');
		$this->Cell(180,10,$memberFullname . ' | ' . $getMemberID,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(40,10,' Type ',1,0,'C',true);
		$this->Cell(75,10,'Description',1,0,'C',true);
		$this->Cell(35,10,'Date',1,0,'C',true);
		$this->Cell(45,10,'Done by',1,1,'C',true);
		
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





$sle = mysqli_query($conn, "SELECT * FROM customer_activities WHERE customer_id='$getMemberID' AND active='yes'");

if (mysqli_num_rows($sle)>0) {

	while ($ded = mysqli_fetch_assoc($sle)) {

		$id = $ded["id"];
		$customer_id = $ded["customer_id"];
		$activity_type = $ded["activity_type"];
		$description = $ded["description"];
		$datecreated = $ded["datecreated"];
		$added_by = $ded["added_by"];

		$staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$added_by' AND active='yes' LIMIT 1 ");

		$ahe = mysqli_fetch_assoc($staffss);

		$firstName = $ahe["firstName"];
		$lastName = $ahe["lastName"];

		$staffFullNAme = $firstName . " " . $lastName;


		$pdf->Cell(40,10,$activity_type, 1,0, 'C');
		$pdf->Cell(75,10,$description, 1,0, 'C');
		$pdf->Cell(35,10,$datecreated, 1,0, 'C');
		$pdf->Cell(45,10,$staffFullNAme, 1,1, 'C');


	}

}else{

	$pdf->Cell(180,10,'No activities yes', 1,1, 'C');

}



	$pdf->Output();




	?>