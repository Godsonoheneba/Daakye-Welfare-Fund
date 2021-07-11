<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getPersonID = $_GET["TRUE"];
$getLoanID = $_GET["MY_LOAN"];
$getReceiptNumber = $_GET["RECEIPT"];
$getDatePaid = $_GET["DATEPAY"];




$seleContrins = mysqli_query($conn, "SELECT * FROM loans_pay WHERE person_id='$getPersonID' AND loan_id='$getLoanID' AND receipt_no='$getReceiptNumber' AND active='yes' LIMIT 1 ");

$getdac = mysqli_fetch_assoc($seleContrins);

$id = $getdac["id"];
$person_id = $getdac["person_id"];
$loan_id = $getdac["loan_id"];
$loan_collected_date = $getdac["loan_collected_date"];
$amount_collected = $getdac["amount_collected"];
$amount_paidRe = $getdac["amount_paid"];
$balance_before = $getdac["balance_before"];
$date_paid = $getdac["date_paid"];
$receipt_no = $getdac["receipt_no"];
$date_created = $getdac["date_created"];
$staff = $getdac["staff"];


$selectCust2 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND person_id='$person_id' AND id='$loan_id' LIMIT 1");

$getdac2 = mysqli_fetch_assoc($selectCust2);

$loanID = $getdac2["id"];
$person_id = $getdac2["person_id"];
$status = $getdac2["status"];
$amount_collected = $getdac2["amount_collected"];
$interest_rate = $getdac2["interest_rate"];
$total_interest_rate_amount = $getdac2["total_interest_rate_amount"];
$interest_amount_paid = $getdac2["interest_amount_paid"];
$total_amount_to_pay = $getdac2["total_amount_to_pay"];
$amount_paid = $getdac2["amount_paid"];
$balance = $getdac2["balance"];
$date_requested = $getdac2["date_requested"];
$date_issued = $getdac2["date_issued"];
$monthly_installment = $getdac2["monthly_installment"];
$total_months_for_payment = $getdac2["total_months_for_payment"];
$months_left = $getdac2["months_left"];
$date_of_completion = $getdac2["date_of_completion"];
$next_month_payment_date = $getdac2["next_month_payment_date"];
      $next_month_payment_amount = $getdac2["next_month_payment_amount"];
$had_penalty = $getdac2["had_penalty"];
$finish_paying = $getdac2["finish_paying"];
$guarantor1 = $getdac2["guarantor1"];
$guarantor1_confirm = $getdac2["guarantor1_confirm"];
$guarantor2 = $getdac2["guarantor2"];
$guarantor2_confirm = $getdac2["guarantor2_confirm"];
$loan_status = $getdac2["loan_status"];
$issued_by = $getdac2["issued_by"];
$date_added = $getdac2["date_added"];
$loan_added_by = $getdac2["loan_added_by"];






if ($status==="Member") {
	
	$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$getPersonID' AND active='yes'  LIMIT 1  ");

	$getDemMem = mysqli_fetch_assoc($selMems);
	$thePersID = $getDemMem["member_id"];
	$firstname = $getDemMem["firstname"];
	$surname = $getDemMem["surname"];

	$personName = $firstname . ' ' . ' ' . ' ' .  $surname ;

} else {
	
	$selMems2 = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$getPersonID' AND active='yes'  LIMIT 1  ");

	$getDemMem2 = mysqli_fetch_assoc($selMems2);
	$thePersID = $getDemMem2["customer_id"];
	$firstname = $getDemMem2["firstname"];
	$surname = $getDemMem2["surname"];

	$personName = $firstname . ' ' . ' ' . ' ' .  $surname ;
}




if (mysqli_num_rows($seleContrins) > 0) {

	$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$issued_by' AND active='yes'  LIMIT 1  ");

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

	$pdf->Cell(99,10,'LOAN PAYMENT | Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Receipt #: '  .' DWF-LOAN-'. $receipt_no, 0,1,'R');


	$pdf->Cell(60,10,  ' Loan Collected ' .  number_format($amount_collected, 2) ,0,0,'L');
	$pdf->Cell(60,10,'Pay For : ' . $getDatePaid,0,0,'C');
	$pdf->Cell(70,10,'Date: ' . $date_created,0,1,'R');





	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Total Amount to Pay: GHC' . number_format($total_amount_to_pay,2), 0,0,'L');

	$pdf->Cell(99,10,' Reg #        : ' . $thePersID, 0,1,'R');


	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Balance Before: GHC' . number_format($balance_before,2), 0,0,'L');

	$pdf->Cell(99,10,' Loan Date Received       : ' . $date_issued, 0,1,'R');

	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(50,10,'Receive from: ' ,0,0,'L');
	$pdf->Cell(139,10, $personName,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(50,10,'Amount Paid: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC ' . number_format($amount_paidRe, 2) ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Balance : ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC ' . number_format($balance, 2),0,1,'L');




	$pdf->Cell(189,.01, '',1,1,'L');


	$pdf->Cell(0,5,'',0,1);


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