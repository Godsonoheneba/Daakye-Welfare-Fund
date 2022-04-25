<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMEmberID = $_GET["TRUE"];
$getReceiptNumber = $_GET["RECEIPT"];


$seleContrins = mysqli_query($conn, "SELECT * FROM deduct_contributions WHERE member_id='$getMEmberID' AND reciept_number='$getReceiptNumber' AND active='yes' LIMIT 1  ");

$getDem = mysqli_fetch_assoc($seleContrins);
$Tableid = $getDem["id"];


$tabId = $getDem["id"];
$member_id = $getDem["member_id"];
$amount = $getDem["amount"];
$reason = $getDem["reason"];
$balance_before = $getDem["balance_before"];
$current_balance = $getDem["current_balance"];
$reciept_number = $getDem["reciept_number"];
$date_done = $getDem["date_done"];
$staff = $getDem["staff"];

$amount = @number_format($amount,2);



$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id' AND active='yes'  LIMIT 1  ");

$getDemMem = mysqli_fetch_assoc($selMems);

$firstname = $getDemMem["firstname"];
$surname = $getDemMem["surname"];
$contribution_amount = $getDemMem["contribution_amount"];
$total_contribution_made = $getDemMem["total_contribution_made"];

$memberName = $firstname . ' ' . ' ' . ' ' .  $surname ;


$payment_type = "  Contribution Deductions";





if (mysqli_num_rows($seleContrins) > 0) {

	$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$staff' AND active='yes'  LIMIT 1  ");

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
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(12);

	$pdf->Image('../../school_data/letter_head/'.$letterhead,10,10,180);

//dummy cell to give line spacing
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,5,'',0,1);




	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(189,10,' CONTRIBUTION DEDUCTIONS | Original Copy' ,0,1,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Receipt #: ' . $reciept_number, 0,0,'L');


	// $pdf->Cell(99,10, $payment_type . ' for ' .  $year . '  |   ' . $getMonthInWords ,0,0,'L');
	$pdf->Cell(90,10,'Date: ' . $date_done,0,1,'R');

	$pdf->SetFont('Arial','B',10);



	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(50,10,'Receive from: ' ,0,0,'L');
	$pdf->Cell(139,10, $memberName,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');


		$pdf->Cell(50,10,'Reason : ' ,0,0,'L');
	$pdf->Cell(139,10, $reason,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(50,10,'Amount Deducted: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC ' . $amount ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Balance Before : ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, number_format($balance_before,2),0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');


	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(0,10,'',0,1);


	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(189,10, '......................................',0,1,'R');
	$pdf->Cell(189,5, $staffName,0,1,'R');


	$pdf->Output();



} else {
	
	?>
	<script type="text/javascript">
		window.close();
	</script>
	<?php
}




?>