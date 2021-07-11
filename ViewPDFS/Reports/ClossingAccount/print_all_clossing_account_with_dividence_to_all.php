<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




$YEAR = $_GET["YEAR"];
$BY_WHO = $_GET["BY_WHO"];


class PDF extends FPDF {


	// function Header(){}

	
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

$pdf->SetDrawColor(180,180,255);





		$pdf->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$pdf->Cell(12,0,'',0,0);
		//is equivalent to: 
		$pdf->Cell(12);
		
		$pdf->Image('../../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		
		//dummy cell to give line spacing
		$pdf->Cell(0,10,'',0,1);
		$pdf->Cell(0,10,'',0,1);
		$pdf->Cell(0,10,'',0,1);

		//is equivalent to:
		$pdf->Ln(5);
		
		$pdf->SetFont('Arial','B',18);




		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(180,10,'DIVIDEND LIST FOR ALL IN THE YEAR  ' . $YEAR ,0,1,'C');
		

		$pdf->SetFont('Arial','B',9);

		
		$pdf->SetFont('Arial','B',9);

		$pdf->SetFillColor(180,180,255);
		$pdf->SetDrawColor(180,180,255);
		$pdf->Cell(10,10,'ID',1,0,'C',true);
		$pdf->Cell(80,10,'NAME',1,0,'C',true);
		$pdf->Cell(25,10,'MOBILE',1,0,'C',true);
		$pdf->Cell(25,10,'AMOUNT',1,0,'C',true);
		$pdf->Cell(35,10,'DATE',1,0,'C',true);
		$pdf->Cell(15,10,'SIGN',1,1,'C',true);





		
	

$pdf->SetFont('Arial','',9);




//////////////ENDS HEADER/////////

$no = "";

$countPepleShare = mysqli_query($conn, "SELECT count(*) AS count3 FROM company_share_dividend WHERE active ='yes' AND year='$YEAR' AND for_who='$BY_WHO' ORDER BY id ASC "); 

$countFetch3 = mysqli_fetch_array($countPepleShare);
$totalPeopleShared = $countFetch3['count3'];


/*-----------------get total contribution ----------------*/
$getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_share_dividend WHERE active ='yes' AND year='$YEAR' AND for_who='$BY_WHO' ORDER BY id ASC "); 
$getRow = mysqli_fetch_assoc($getToContribution);
$totalContriAmount = $getRow["amount"];



$selectCust = mysqli_query($conn, "SELECT * FROM company_share_dividend WHERE active ='yes' AND year='$YEAR' AND for_who='$BY_WHO' ORDER BY id ASC "); 

while ( $getdac = mysqli_fetch_assoc($selectCust)) {

	$Tabid = $getdac["id"];
	$year = $getdac["year"];
	$member_id = $getdac["member_id"];
	$amount = $getdac["amount"];
	$date_created = $getdac["date_created"];
	$done_by = $getdac["done_by"];



	$selectst = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$done_by' ");

	$getdac2 = mysqli_fetch_assoc($selectst);

	$id = $getdac2["id"];
	$firstName = $getdac2["firstName"];
	$lastName = $getdac2["lastName"];

	$staffName = $firstName . " " . $lastName;



	$selectst2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$member_id'  ");

	$getdac3 = mysqli_fetch_assoc($selectst2);

	$id = $getdac3["id"];
	$member_id = $getdac3["member_id"];
	$member_id_encrypt = $getdac3["member_id_encrypt"];
	$firstname = $getdac3["firstname"];
	$surname = $getdac3["surname"];
	$telephone = $getdac3["telephone"];

	$memberName = $firstname . " " . $surname;

	$no++;
 

	$pdf->Cell(10,10,$no, 1,0, 'C');
	$pdf->Cell(80,10, '  ' . $memberName, 1,0, 'L');
	$pdf->Cell(25,10,$telephone, 1,0, 'C');
	$pdf->Cell(25,10,round($amount,2), 1,0, 'C');
	$pdf->Cell(35,10,$date_created, 1,0, 'C');
	$pdf->Cell(15,10,'', 1,1, 'C');



}



$pdf->SetFont('Arial','B',14);
$pdf->Cell(275,10, 'TOTAL PEOPLE:  ' . $totalPeopleShared, 1,1, 'C');
$pdf->Cell(275,10, 'TOTAL AMOUNT SHARED:  ' . number_format($totalContriAmount, 2), 1,1, 'C');


$pdf->Output();




?>