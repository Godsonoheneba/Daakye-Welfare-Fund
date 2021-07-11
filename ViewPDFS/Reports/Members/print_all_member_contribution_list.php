<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




$TOTAL = $_GET["TOTAL"];
$MINDATE = $_GET["MINDATE"];
$MAXDATE = $_GET["MAXDATE"];

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

		$this->Cell(270,10,'ACTIVE MEMBER CONTRIBUTION LIST ' ,0,1,'C');
		

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(30,10,'ID',1,0,'C',true);
		$this->Cell(50,10,'Name',1,0,'C',true);
		$this->Cell(25,10,'Mobile',1,0,'C',true);
		$this->Cell(20,10,'Amount',1,0,'C',true);
		$this->Cell(25,10,'Total',1,0,'C',true);
		$this->Cell(20,10,'Month',1,0,'C',true);
		$this->Cell(20,10,'Year',1,0,'C',true);
		$this->Cell(35,10,'Payment Date',1,0,'C',true);
		$this->Cell(45,10,'Done By',1,1,'C',true);
	


		
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



// $selectCust = mysqli_query($conn, "SELECT * FROM members_contributions WHERE active ='yes' ORDER BY id DESC ");

   $selectCust = mysqli_query($conn, "SELECT * FROM members_contributions WHERE active ='yes' AND 
        date_created
        BETWEEN '$MINDATE' AND '$MAXDATE'
        ORDER BY id DESC 

        "); 
 
while ( $getdac = mysqli_fetch_assoc($selectCust)) {


	$Tabid = $getdac["id"];
	$member_id = $getdac["member_id"];
	$member_id_encrypt = $getdac["member_id_encrypt"];
	$year = $getdac["year"];
	$month = $getdac["month"];
	$amount = $getdac["amount"];
	$receipt_number = $getdac["receipt_number"];
	$date_paid = $getdac["date_paid"];
	$date_created = $getdac["date_created"];
	$done_by = $getdac["done_by"];




/*-----------------get total amount contribution ----------------*/
$getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE  active='yes' AND 
        date_created
        BETWEEN '$MINDATE' AND '$MAXDATE'
        ORDER BY id DESC   ");
$getRow = mysqli_fetch_assoc($getToContribution);
$totalContriAmount = $getRow["amount"];



/*-----------------get total amount contribution PER PERSON ----------------*/
$getToContribution2 = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE  active='yes' AND 
        date_created
        BETWEEN '$MINDATE' AND '$MAXDATE' AND member_id='$member_id'
        ORDER BY id DESC   ");
$getRow2 = mysqli_fetch_assoc($getToContribution2);
$totalContriAmount2 = $getRow2["amount"];



 


	$selectst = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND staffID='$done_by' ");

	$getdac2 = mysqli_fetch_assoc($selectst);

	$id = $getdac2["id"];
	$firstName = $getdac2["firstName"];
	$lastName = $getdac2["lastName"];

	$staffName = $firstName . " " . $lastName;



	$selectst2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id_encrypt='$member_id_encrypt' ");

	$getdac3 = mysqli_fetch_assoc($selectst2);

	$id = $getdac3["id"];
	$member_id = $getdac3["member_id"];
	$member_id_encrypt = $getdac3["member_id_encrypt"];
	$firstname = $getdac3["firstname"];
	$surname = $getdac3["surname"];
	$telephone = $getdac3["telephone"];

	$memberName = $firstname . " " . $surname;

 

	$pdf->Cell(30,10,$member_id, 1,0, 'C');
	$pdf->Cell(50,10,$memberName, 1,0, 'C');
	$pdf->Cell(25,10,$telephone, 1,0, 'C');
	$pdf->Cell(20,10,$amount, 1,0, 'C');
	$pdf->Cell(25,10,number_format($totalContriAmount2,2), 1,0, 'C');
	$pdf->Cell(20,10,$month, 1,0, 'C');
	$pdf->Cell(20,10,$year, 1,0, 'C');
	$pdf->Cell(35,10,$date_created, 1,0, 'C');
	$pdf->Cell(45,10,$staffName, 1,1, 'C');


}



$pdf->SetFont('Arial','B',14);
$pdf->Cell(275,10, 'TOTAL COUNT  :  ' . $TOTAL, 1,1, 'C');
$pdf->Cell(275,10, 'TOTAL AMOUNT CONTRIBUTED:  ' . number_format($totalContriAmount, 2), 1,1, 'C');


$pdf->Output();




?>