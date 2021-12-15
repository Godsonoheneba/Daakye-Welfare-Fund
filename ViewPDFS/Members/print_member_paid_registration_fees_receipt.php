<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMEmberID = $_GET["TRUE"];
$getReceiptNumber = $_GET["RECEIPT"];
$getAMOUNT = $_GET["AMOUNT"];


				

$seleContrins = mysqli_query($conn, "SELECT * FROM comp_reve_memb_reg_fee WHERE member_id='$getMEmberID' AND receipt_number='$getReceiptNumber' AND amount='$getAMOUNT' AND active='yes' LIMIT 1  ");

$getDem = mysqli_fetch_assoc($seleContrins);
$Tableid = $getDem["id"];
$member_id = $getDem["member_id"];
$amount = $getDem["amount"];
$receipt_number = $getDem["receipt_number"];
$date_added = $getDem["date_added"];
$done_by = $getDem["done_by"];
$amount = @number_format($amount,2);



$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id'   LIMIT 1  ");

$getDemMem = mysqli_fetch_assoc($selMems);

$firstname = $getDemMem["firstname"];
$surname = $getDemMem["surname"];
$member_idDB = $getDemMem["member_id"];

$memberName = $firstname . ' ' . ' ' . ' ' .  $surname ;


$payment_type = " Registration Fees";

if (mysqli_num_rows($seleContrins) > 0) {

	$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by'   LIMIT 1  ");

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

	$pdf->Cell(99,10,'REGISTRATION FEE| Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Receipt #: ' . $receipt_number, 0,1,'R');


	$pdf->Cell(99,10, $payment_type  ,0,0,'L');
	$pdf->Cell(90,10,'Date: ' . $date_added,0,1,'R');

	$pdf->SetFont('Arial','B',10);

	// $pdf->Cell(90,10,'Contribution: GHC' . number_format($contribution_amount,2), 0,0,'L');

	$pdf->Cell(99,10,'Member Reg #        : ' . $member_idDB, 0,1,'L');

	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(50,10,'Receive from: ' ,0,0,'L');
	$pdf->Cell(139,10, $memberName,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(50,10,'Amount Paid: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC ' . $amount ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Balance: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC 0.00',0,1,'L');
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