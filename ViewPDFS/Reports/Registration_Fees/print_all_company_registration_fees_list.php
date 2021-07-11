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


		$this->Cell(180,10,'MEMBER REGISTRATION FEES FOR   ' . $MINDATE . '  -  ' . $MAXDATE,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(50,10,'Name',1,0,'C',true);
		$this->Cell(30,10,' Amount ',1,0,'C',true);
		$this->Cell(30,10,' Receipt Number ',1,0,'C',true);
		$this->Cell(30,10,' Date ',1,0,'C',true);
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







	$selectAllMEmbers = mysqli_query($conn, "SELECT * FROM registration_fees WHERE active ='yes' AND 
        date_created
        BETWEEN '$MINDATE' AND '$MAXDATE'
        ORDER BY id DESC 

        "); 



	$getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM registration_fees WHERE  active='yes' AND date_created

		BETWEEN '$MINDATE' AND '$MAXDATE'
		ORDER BY id DESC

		");

	$getRow = mysqli_fetch_assoc($getCoRev); 
	$totalContrExpense = $getRow["amount"];

	$totalContrExpense = round($totalContrExpense);




	while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


		$member_id = $getdac["member_id"];
          $amount = number_format($getdac["amount"], 2);
          $receipt_number = $getdac["receipt_number"];
          $date_created = $getdac["date_created"];
          $done_by = $getdac["done_by"];


          $staffsslo = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id' AND active='yes' LIMIT 1 ");
          $bab = mysqli_fetch_assoc($staffsslo);

          $member_id = $bab["member_id"];
          $member_id_encrypt = $bab["member_id_encrypt"];
          $firstname = $bab["firstname"];
          $surname = $bab["surname"];
          $telephone = $bab["telephone"];

          $memberFullName = $firstname . " " . $surname;





          $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$done_by' AND active='yes' LIMIT 1 ");
          $ahemvals = mysqli_fetch_assoc($staffss);

          $firstName = $ahemvals["firstName"];
          $lastName = $ahemvals["lastName"];
          $staffFullNAme = $firstName . " " . $lastName;


		$pdf->Cell(50,10,$memberFullName, 1,0, 'C');
		$pdf->Cell(30,10,$amount, 1,0, 'C');
		$pdf->Cell(30,10,$receipt_number, 1,0, 'C');
		$pdf->Cell(30,10,$date_created, 1,0, 'C');
		$pdf->Cell(40,10,$staffFullNAme, 1,1, 'C');

	}



	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(180,10, 'TOTAL REGISTRATION FEES :  GHC '  . number_format($TOTAL, 2), 1,1, 'C');


$pdf->Output();




?>