<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMEmberName = $_GET["NAME"];
$getMemberID = $_GET["VIRUS"];
$getMemberIDEncrypt = $_GET["TRUE"];


 


$sel = mysqli_query($conn, "SELECT * FROM members_deactivated WHERE active = 'yes' AND  member_id='$getMemberID' LIMIT 1  ");

if (mysqli_num_rows($sel) > 0) {

$gett= mysqli_fetch_assoc($sel);
$Deacid = $gett["id"];
$member_id = $gett["member_id"];
$reason = $gett["reason"];
$date_added = $gett["date_added"];
$amount_to_be_given = $gett["amount_to_be_given"];
$has_loan = $gett["has_loan"];
$loan_guarantor1 = $gett["loan_guarantor1"];
$guarantor1_amount_deduct = $gett["guarantor1_amount_deduct"];
$loan_guarantor2 = $gett["loan_guarantor2"];
$guarantor2_amount_deduct = $gett["guarantor2_amount_deduct"];
$done_by = $gett["done_by"];

$THEidMD = "MEMB-DEACT-00000". $Deacid;


$loanAMount = $guarantor1_amount_deduct + $guarantor2_amount_deduct;

	
$seleContrins11 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$member_id'   LIMIT 1  ");

$getAlls = mysqli_fetch_assoc($seleContrins11);

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

$staff = $getAlls["staff"];
$date_created = $getAlls["date_created"];



$memberFullname = $firstname . " " . $surname;

$five_percent_of_total = 0.05 * $total_contribution_made;

$realAmounttobegiven = $total_contribution_made - $five_percent_of_total;



$noImageForMale = '../../assets/images/customs/male.png';
$noImageForFeMale = '../../assets/images/customs/female.jpg';


$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by' AND active='yes'  LIMIT 1  ");

$getDem2 = mysqli_fetch_assoc($juju);
$firstName = $getDem2["firstName"];
$lastName = $getDem2["lastName"];
$staffName = $firstName . ' ' . ' ' . ' ' .  $lastName;



$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];



	$pdf = new FPDF('L','mm','A5');

	$pdf->AddPage();

//set font to arial, bold, 14pt
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(12);

	$pdf->Image('../../school_data/letter_head/'.$letterhead,10,10,180);

//dummy cell to give line spacing
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,5,'',0,1);




	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(99,10, ' DEACTIVATED MEMBER FORM | Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Deactivated ID #: ' . $THEidMD, 0,1,'R');


	$pdf->Cell(100,10,'Reg #        : ' . $member_id, 0,0,'L');


	$pdf->Cell(90,10,'Date: ' . $date_added,0,1,'R');

	$pdf->SetFont('Arial','B',10);



	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(190,10,$memberFullname . '     has successfully Deactivate from Daakye Welfare Fund ' ,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');



	$pdf->Cell(190,10,'On the date of  ' . $date_added . ' with a reason of : ' . $reason ,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(40,10,'Total Contribution: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(50,10, 'GHC ' . number_format($total_contribution_made, 2) ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'5% Deduction: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(50,10, 'GHC ' . number_format($five_percent_of_total,2),0,1,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(50,10,'Total Amount to be given: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(50,10, 'GHC ' . number_format($amount_to_be_given,2),0,0,'L');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,10,'Has Loan  : ' . $has_loan,0,0,'L');
	$pdf->SetFont('Arial','',10);

	$pdf->Cell(50,10,   ' Loan Amount:  GHC ' . number_format($loanAMount,2),0,1,'L');


	$pdf->Cell(189,.01, '',1,1,'L');


	$pdf->Cell(0,5,'',0,1);


	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10, '......................................',0,0,'L');
	$pdf->Cell(90,10, '......................................',0,1,'R');

	$pdf->Cell(90,5, $memberFullname,0,0,'L');
	$pdf->Cell(90,5, $staffName,0,1,'R');


	$pdf->Output();



} else {

	?>
	<script type="text/javascript">
		window.close();
	</script>
	<?php
}




?>