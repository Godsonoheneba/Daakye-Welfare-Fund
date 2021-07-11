<?php 


include '../../cores/config.php';


require('../../fpdf/fpdf.php');


$getCustomerName = $_GET["PRINT_INFO_FOR"];
$getCustomerID = $_GET["TRUE"];



$seleAllFromBoook2 = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$getCustomerID'  AND surname='$getCustomerName'  AND active='yes'  LIMIT 1  ");

$getDem = mysqli_fetch_assoc($seleAllFromBoook2);

$id = $getDem["id"];
$customer_id = $getDem["customer_id"];
$customer_id_encrypt = $getDem["customer_id_encrypt"];
$firstname = $getDem["firstname"];
$surname = $getDem["surname"];
$residencial_address = $getDem["residencial_address"];
$postal_address = $getDem["postal_address"];
$place_of_work = $getDem["place_of_work"];
$home_town = $getDem["home_town"];
$email = $getDem["email"];
$telephone = $getDem["telephone"];
$dob = $getDem["dob"];
$gender = $getDem["gender"];
$marital_status = $getDem["marital_status"];
$image = $getDem["image"];
$staff = $getDem["staff"];
$date_created = $getDem["date_created"];

$fullname = $firstname . " " . $surname;



$noImageForMale = '../../assets/images/customs/male.png';
$noImageForFeMale = '../../assets/images/customs/female.jpg';



$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$staff' AND active='yes'  LIMIT 1  ");

	$getDem2 = mysqli_fetch_assoc($juju);
	$firstName = $getDem2["firstName"];
	$lastName = $getDem2["lastName"];
	$staffName = $firstName . ' ' . ' ' . ' ' .  $lastName;



$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];





class PDF extends FPDF {
	function Header(){

		global $customer_id;
		global $letterhead;

		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);
		
		//put logo
		$this->Image('../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		//dummy cell to give line spacing
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',18);




		$this->SetFont('Arial','B',12);

		$this->Cell(180,10,'CUSTOEMR INFORMATION  |   ' . $customer_id ,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		
		
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


if ($image==="" || $image==="/") {

	if ($gender==="Male") {

		/*------------------PHOTO===========*/
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(45,10,'' ,0,0,'C');
		$pdf->Image($noImageForMale,70,70,60);
		$pdf->Cell(45,10,'' ,0,1,'C');


	} else {
		
		/*------------------PHOTO===========*/
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(45,10,'' ,0,0,'C');
		$pdf->Image($noImageForFeMale,70,70,60);
// $pdf->Cell(90,10,$IDCARD ,0,0,'C');
		$pdf->Cell(45,10,'' ,0,1,'C');


	}
	

} else {

	/*------------------PHOTO===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Image('../../Datas/customers_datas/'.$image,70,70,60);
// $pdf->Cell(90,10,$IDCARD ,0,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');

}


$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');


$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Customer ID #', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$customer_id, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Name', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$fullname, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Date of Birth', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$dob, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Residential Address', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$residencial_address, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Place of Work', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$place_of_work, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Home Town', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$home_town, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Email', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$email, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Gender', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$gender, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Mobile', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$telephone, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Marital Status', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$marital_status, 1,1, 'C');




$pdf->Cell(180,10, '',0,1,'C');


$pdf->Cell(10,10, '',1,0,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(180,10, '  I , ' . $fullname . ' Agree to Daakye Welfare Fund Terms and Conditions Conditions ',0,1,'L');
$pdf->Cell(180,10, '',0,1,'C');


$pdf->SetFont('Arial','B',10);

$pdf->Cell(90,10, '......................................',0,0,'L');
$pdf->Cell(90,10, '......................................',0,1,'R');

$pdf->Cell(90,5, $fullname,0,0,'L');
$pdf->Cell(90,5, $staffName,0,1,'R');



$pdf->Output();




?>




