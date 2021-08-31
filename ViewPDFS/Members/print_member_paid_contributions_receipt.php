<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMEmberID = $_GET["TRUE"];
$getReceiptNumber = $_GET["RECEIPT"];


$seleContrins = mysqli_query($conn, "SELECT * FROM members_contributions WHERE member_id_encrypt='$getMEmberID' AND receipt_number='$getReceiptNumber' AND active='yes' LIMIT 1  ");

$getDem = mysqli_fetch_assoc($seleContrins);
$Tableid = $getDem["id"];
$member_id = $getDem["member_id"];
$member_id_encrypt = $getDem["member_id_encrypt"];
$year = $getDem["year"];
$month = $getDem["month"];
$amount = $getDem["amount"];
$receipt_number = $getDem["receipt_number"];
$date_paid = $getDem["date_paid"];
$date_created = $getDem["date_created"];
$done_by = $getDem["done_by"];
$amount = @number_format($amount,2);



$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$member_id' AND active='yes'  LIMIT 1  ");

$getDemMem = mysqli_fetch_assoc($selMems);

$firstname = $getDemMem["firstname"];
$surname = $getDemMem["surname"];
$contribution_amount = $getDemMem["contribution_amount"];
$total_contribution_made = $getDemMem["total_contribution_made"];

$memberName = $firstname . ' ' . ' ' . ' ' .  $surname ;


$payment_type = " Monthly Contribution";



if ($month === "01") {

  $getMonthInWords = "January";
}


if ($month === "02") {

  $getMonthInWords = "February";
}


if ($month === "03") {

  $getMonthInWords = "March";
}


if ($month === "04") {

  $getMonthInWords = "April";
}

if ($month === "05") {

  $getMonthInWords = "May";
}

if ($month === "06") {

  $getMonthInWords = "June";
}

if ($month === "07") {

  $getMonthInWords = "July";
}

if ($month === "08") {

  $getMonthInWords = "August";
}

if ($month === "09") {

  $getMonthInWords = "September";
}

if ($month === "10") {

  $getMonthInWords = "October";
}

if ($month === "11") {

  $getMonthInWords = "November";
}

if ($month === "12") {

  $getMonthInWords = "December";
}


if (mysqli_num_rows($seleContrins) > 0) {

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
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(12);

	$pdf->Image('../../school_data/letter_head/'.$letterhead,10,10,180);

//dummy cell to give line spacing
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,5,'',0,1);




	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(99,10,'MONTHLY CONTRIBUTION | Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Receipt #: ' . $receipt_number, 0,1,'R');


	$pdf->Cell(99,10, $payment_type . ' for ' .  $year . '  |   ' . $getMonthInWords ,0,0,'L');
	$pdf->Cell(90,10,'Date: ' . $date_created,0,1,'R');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Contribution: GHC' . number_format($contribution_amount,2), 0,0,'L');

	$pdf->Cell(99,10,'Member Reg #        : ' . $member_id, 0,1,'R');

	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(50,10,'Receive from: ' ,0,0,'L');
	$pdf->Cell(139,10, $memberName,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(50,10,'Amount Paid: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC ' . $amount ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Total Contribution: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, number_format($total_contribution_made,2),0,1,'L');
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