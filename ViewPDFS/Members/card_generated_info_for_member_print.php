<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMemberName = $_GET["PRINT_CARD_FOR"];
$getMemberID = $_GET["TRUE"];



$seleAllFromBoook2 = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$getMemberID'  AND surname='$getMemberName'  AND active='yes'  LIMIT 1  ");

$getAlls = mysqli_fetch_assoc($seleAllFromBoook2);

$id = $getAlls["id"];
$member_id = $getAlls["member_id"];
$member_id_encrypt = $getAlls["member_id_encrypt"];
$password = $getAlls["password"];
$firstname = $getAlls["firstname"];
$surname = $getAlls["surname"];
$residencial_address = $getAlls["residencial_address"];
$postal_address = $getAlls["postal_address"];
$place_of_work = $getAlls["place_of_work"];
$home_town = $getAlls["home_town"];
$email = $getAlls["email"];
$telephone = $getAlls["telephone"];
$dob = $getAlls["dob"];
$gender = $getAlls["gender"];
$marital_status = $getAlls["marital_status"];
$contribution_amount = $getAlls["contribution_amount"];
$total_contribution_made = $getAlls["total_contribution_made"];
$last_month_contributed = $getAlls["last_month_contributed"];
$image = $getAlls["image"];
$kin_1_name = $getAlls["kin_1_name"];
$kin_1_mobile = $getAlls["kin_1_mobile"];
$kin_1_percent = $getAlls["kin_1_percent"];
$kin_2_name = $getAlls["kin_2_name"];
$kin_2_mobile = $getAlls["kin_2_mobile"];
$kin_2_percent = $getAlls["kin_2_percent"];
$kin_3_name = $getAlls["kin_3_name"];
$kin_3_mobile = $getAlls["kin_3_mobile"];
$kin_3_percent = $getAlls["kin_3_percent"];
$kin_4_name = $getAlls["kin_4_name"];
$kin_4_mobile = $getAlls["kin_4_mobile"];
$kin_4_percent = $getAlls["kin_4_percent"];
$kin_5_name = $getAlls["kin_5_name"];
$kin_5_mobile = $getAlls["kin_5_mobile"];
$kin_5_percent = $getAlls["kin_5_percent"];
$kin_6_name = $getAlls["kin_6_name"];
$kin_6_mobile = $getAlls["kin_6_mobile"];
$kin_6_percent = $getAlls["kin_6_percent"];
$kin_7_name = $getAlls["kin_7_name"];
$kin_7_mobile = $getAlls["kin_7_mobile"];
$kin_7_percent = $getAlls["kin_7_percent"];
$kin_8_name = $getAlls["kin_8_name"];
$kin_8_mobile = $getAlls["kin_8_mobile"];
$kin_8_percent = $getAlls["kin_8_percent"];
$kin_9_name = $getAlls["kin_9_name"];
$kin_9_mobile = $getAlls["kin_9_mobile"];
$kin_9_percent = $getAlls["kin_9_percent"];
$kin_10_name = $getAlls["kin_10_name"];
$kin_10_mobile = $getAlls["kin_10_mobile"];
$kin_10_percent = $getAlls["kin_10_percent"];
$paid_reg_form = $getAlls["paid_reg_form"];
$has_loan = $getAlls["has_loan"];
$staff = $getAlls["staff"];
$date_created = $getAlls["date_created"];

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


	if ($image==="" || $image==="/") {
		
		if ($gender==="Male") {
			
			/*------------------PHOTO===========*/
			$pdf->Image($noImageForMale,55,20,15);


		} else {
			
			/*------------------PHOTO===========*/
			$pdf->Image($noImageForFeMale,55,20,15);


		}
		

	} else {
		

		/*------------------PHOTO===========*/
		$pdf->Image('../../Datas/members_datas/'.$image,55,20,15);

	}


	
	// $pdf->Image('../../Datas/members_datas/'.$image,55,20,15);
	$pdf->Cell(90,10,$IDCARD ,0,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');



	/*-------------------student name ===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10,'Name : ' . $fullname ,0,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');


	/*------------------Admission number ===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10,'Member ID : ' . $member_id ,1,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');

	/*-------------------Admission Year :===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Cell(90,10, ' Date Joined : '. $date_created ,1,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');



	




	$pdf->Output();



} else {
	
	?>
	<script type="text/javascript">
		window.close();
	</script>
	<?php
}




?>