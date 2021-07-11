<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');


$MALE = $_GET["MALE"];
$FEMALE = $_GET["FEMALE"];
$TOTAL = $_GET["TOTAL"];
$MINDATE = $_GET["MINDATE"];
$MAXDATE = $_GET["MAXDATE"];

$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




class PDF extends FPDF {
	function Header(){

		global $MALE;
		global $FEMALE;
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

		$this->Cell(270,10,'ACTIVE CUSTOMERS LIST FROM       ' . $MINDATE . '      TO         ' . $MAXDATE ,0,1,'C');
		

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(30,10,'ID',1,0,'C',true);
		$this->Cell(60,10,'Name',1,0,'C',true);
		$this->Cell(25,10,'Date Of Birth',1,0,'C',true);
		$this->Cell(25,10,'Mobile',1,0,'C',true);
		$this->Cell(15,10,'Gender',1,0,'C',true);
		$this->Cell(30,10,'Place of Work',1,0,'C',true);
		$this->Cell(40,10,'Digital Address',1,0,'C',true);
		$this->Cell(15,10,'Home Town',1,0,'C',true);
		$this->Cell(35,10,'Date Join',1,1,'C',true);


		
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



$selectCust = mysqli_query($conn, "SELECT * FROM customers WHERE active ='yes' ORDER BY id DESC ");

while ( $getdac = mysqli_fetch_assoc($selectCust)) {

	$id = $getdac["id"];
	$customer_id = $getdac["customer_id"];
	$customer_id_encrypt = $getdac["customer_id_encrypt"];
	$firstname = $getdac["firstname"];
	$surname = $getdac["surname"];
	$residencial_address = $getdac["residencial_address"];
	$postal_address = $getdac["postal_address"];
	$place_of_work = $getdac["place_of_work"];
	$home_town = $getdac["home_town"];
	$email = $getdac["email"];
	$telephone = $getdac["telephone"];
	$dob = $getdac["dob"];
	$gender = $getdac["gender"];
	$marital_status = $getdac["marital_status"];
	$image = $getdac["image"];
	$next_of_kin_name = $getdac["next_of_kin_name"];
	$next_of_kin_mobile = $getdac["next_of_kin_mobile"];
	$next_of_kin_resi_address = $getdac["next_of_kin_resi_address"];
	$date_created = $getdac["date_created"];

	$fullname = $firstname . " " . $surname;

	$getShortName = substr($firstname, 0,1);


	$pdf->Cell(30,10,$customer_id, 1,0, 'C');
	$pdf->Cell(60,10,$fullname, 1,0, 'C');
	$pdf->Cell(25,10,$dob, 1,0, 'C');
	$pdf->Cell(25,10,$telephone, 1,0, 'C');
	$pdf->Cell(15,10,$gender, 1,0, 'C');
	$pdf->Cell(30,10,$place_of_work, 1,0, 'C');
	$pdf->Cell(40,10,$residencial_address, 1,0, 'C');
	$pdf->Cell(15,10,$home_town, 1,0, 'C');
	$pdf->Cell(35,10,$date_created, 1,1, 'C');


}



$pdf->SetFont('Arial','B',14);
$pdf->Cell(275,10, ' # MALE:  ' .$MALE . '       |    # FEMALE :  ' . $FEMALE .  '       |     TOTAL # :  ' . $TOTAL, 1,1, 'C');


$pdf->Output();




?>