<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMemberName = $_GET["PRINT_CARD_FOR"];
$getMemberID = $_GET["TRUE"];



$seleAllFromBoook2 = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$getMemberID'  AND surname='$getMemberName'  AND active='yes'  LIMIT 1  ");

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
$next_of_kin_name = $getDem["next_of_kin_name"];
$next_of_kin_mobile = $getDem["next_of_kin_mobile"];
$next_of_kin_resi_address = $getDem["next_of_kin_resi_address"];
$date_created = $getDem["date_created"];

$fullname = $firstname . " " . $surname;


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$Schoolname = $ahema["name"];
 

$IDCARD = "ID Card";

$noImageForMale = '../../assets/images/customs/male.png';
$noImageForFeMale = '../../assets/images/customs/female.jpg';





if (mysqli_num_rows($seleAllFromBoook2) > 0) {

	

	$pdf = new FPDF('L','mm','A5');

	$pdf->AddPage();

//set font to arial, bold, 14pt
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(12);


	/*-------------------SCHOOL NAME ===========*/
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10,$Schoolname ,0,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');


	/*-------------------ID CARD ===========*/
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10,$IDCARD ,1,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');

	/*-------------------student name ===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10,'Name : ' . $fullname ,1,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');


	/*------------------Admission number ===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10,'Member ID : ' . $customer_id ,1,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');

	/*-------------------Admission Year :===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10, ' Date Created : '. $date_created ,1,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');



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
	




	$pdf->Output();



} else {
	
	?>
	<script type="text/javascript">
		window.close();
	</script>
	<?php
}




?>