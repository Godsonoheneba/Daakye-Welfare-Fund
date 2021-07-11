<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$gettableID = $_GET["TABLEID"];
$getPersonID = $_GET["TRUE"];


$seleContrins = mysqli_query($conn, "SELECT * FROM loans_all WHERE person_id='$getPersonID' AND id='$gettableID' AND active='yes' LIMIT 1  ");

$getDem = mysqli_fetch_assoc($seleContrins);
$loanID  = $getDem["id"];
$person_id = $getDem["person_id"];
$status = $getDem["status"];
$amount_collected = $getDem["amount_collected"];
$interest_rate = $getDem["interest_rate"];
$total_interest_rate_amount = $getDem["total_interest_rate_amount"];
$interest_amount_paid = $getDem["interest_amount_paid"];
$total_amount_to_pay = $getDem["total_amount_to_pay"];
$amount_paid = $getDem["amount_paid"];
$balance = $getDem["balance"];
$date_requested = $getDem["date_requested"];
$date_issued = $getDem["date_issued"];
$monthly_installment = $getDem["monthly_installment"];
$total_months_for_payment = $getDem["total_months_for_payment"];
$months_left = $getDem["months_left"];
$date_of_completion = $getDem["date_of_completion"];
$next_month_payment_date = $getDem["next_month_payment_date"];
$next_month_payment_amount = $getDem["next_month_payment_amount"];
$had_penalty = $getDem["had_penalty"];
$finish_paying = $getDem["finish_paying"];
$guarantor1 = $getDem["guarantor1"];
$guarantor1_confirm = $getDem["guarantor1_confirm"];
$guarantor2 = $getDem["guarantor2"];
$guarantor2_confirm = $getDem["guarantor2_confirm"];
$loan_status = $getDem["loan_status"];
$issued_by = $getDem["issued_by"];
$date_added = $getDem["date_added"];
$loan_added_by = $getDem["loan_added_by"];



if ($finish_paying==='no') {
	$showLoanSTat = "Uncomplete";
} else {
	$showLoanSTat = "Complete";
}


if ($interest_rate==='0.05') {
	$showrate = "5%";
} else {
	$showrate = "10%";
}


$loanID = md5($loanID);

if ($status==="Customer") {
	

	$selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

	$getDemMem = mysqli_fetch_assoc($selMems);

	$person_idss = $getDemMem["customer_id"];
	$firstname = $getDemMem["firstname"];
	$surname = $getDemMem["surname"];

	$personName = $firstname . ' ' . ' ' . ' ' .  $surname ;

} else {
	$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

	$getDemMem = mysqli_fetch_assoc($selMems);

	$person_idss = $getDemMem["member_id"];
	$firstname = $getDemMem["firstname"];
	$surname = $getDemMem["surname"];

	$personName = $firstname . ' ' . ' ' . ' ' .  $surname ;
}

if (mysqli_num_rows($seleContrins) > 0) {


	$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

	$ahema = mysqli_fetch_assoc($WERES);

	$letterhead = $ahema["letterhead"];



	$pdf = new FPDF('P','mm','A4');

    // $pdf = new FPDF('P','mm',array(220,250));

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


	

	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(99,10,$personName  ,0,0,'L');
	$pdf->Cell(99,10,' LOAN STATUS : ' . $showLoanSTat ,0,1,'L');


	$pdf->Cell(99,10,$status . ' LOAN GRANTED REPORT| Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Loan #: ' . $loanID, 0,1,'R');


	$pdf->Cell(50,10,'Reg #        : ' . $person_idss, 0,0,'L');

	$pdf->Cell(50,10,'No. Of Months        : ' . $total_months_for_payment, 0,0,'C');
	
	$pdf->Cell(90,10,'Date: ' . $date_added,0,1,'R');

	$pdf->SetFont('Arial','B',10);



	$pdf->Cell(189,.01, '',1,1,'L');


	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(30,10,'Amount granted: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(40,10, 'GHC ' . number_format($amount_collected, 2) ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(25,10, $showrate . ' Interest: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(35,10, 'GHC ' . number_format($total_interest_rate_amount,2),0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,10,'Total Amount: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);

	$pdf->Cell(40,10, 'GHC ' . number_format($total_amount_to_pay,2),0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');




	/*----------------------aboiut the date-------------*/
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(25,10,'Date granted: ' ,0,0,'L');
	
	$pdf->Cell(30,10, $date_requested ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(25,10,'Issued Date: ' ,0,0,'L');
	

	$pdf->Cell(40,10, $date_issued,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Monthly Instalment: ' ,0,0,'L');
	
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(30,10, 'GHC ' . number_format($monthly_installment,2),0,1,'L');







	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(189,10, '',0,1,'L');


	// $pdf->Cell(189,.01, '',0,1,'L');
	// $pdf->Cell(189,.01, '',0,1,'L');

	

	$pdf->SetFont('Arial','B',14);


	$pdf->Cell(190,10,' LOAN PAYMENT REPORT ' ,0,1,'C');

$pdf->Cell(189,10, '',0,1,'L');


	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(50,10,'AMOUNT PAID ' ,0,0,'L');
	$pdf->Cell(50,10,'BALANCE ' ,0,0,'L');
	$pdf->Cell(50,10,'DATE ' ,0,0,'L');
	$pdf->Cell(50,10,'STAFF ' ,0,1,'L');



	$pdf->Cell(189,.01, '',1,1,'L');


	$selCont2 = mysqli_query($conn, "SELECT * FROM loans_pay WHERE person_id='$getPersonID'  AND  active='yes' AND loan_id ='$gettableID' ORDER BY id ASC  ");

     while ( $getDemdac = mysqli_fetch_assoc($selCont2)) {

       $Tableid = $getDemdac["id"];
       $person_id = $getDemdac["person_id"];
       $loan_id = $getDemdac["loan_id"];
       $loan_collected_date = $getDemdac["loan_collected_date"];
       $amount_collected = $getDemdac["amount_collected"];
       $amount_paid = $getDemdac["amount_paid"];
       $balance_before = $getDemdac["balance_before"];
       $date_paid = $getDemdac["date_paid"];
       $receipt_no = $getDemdac["receipt_no"];
       $date_created = $getDemdac["date_created"];
       $staff = $getDemdac["staff"];


       $balance_left_there = $balance_before - $amount_paid;



       $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE username='$staff' AND active='yes'");

       $fetch =mysqli_fetch_assoc($queryInfo);
       $table_id = $fetch["id"];

       $firstName = $fetch["firstName"];
       $lastName = $fetch["lastName"];

       $staffFullName = $firstName . " " . $lastName; 


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(50,10, number_format($amount_paid, 2) ,0,0,'L');
	$pdf->Cell(50,10, number_format($balance_left_there, 2) ,0,0,'L');
	$pdf->Cell(50,10, $date_paid ,0,0,'L');
	$pdf->Cell(50,10, $staffFullName ,0,1,'L');


	$pdf->Cell(189,.01, '',1,1,'L'); 


}

	$pdf->Cell(189,10, '',0,1,'L');
	$pdf->Cell(189,10, '',0,1,'L');


	$pdf->SetFont('Arial','B',15);
	
	$pdf->Cell(95,10,'Amount Paid GHC : ' . number_format($amount_paid, 2) ,0,0,'L');
	$pdf->Cell(95,10, 'Balance Left GHC: ' . number_format($balance, 2) ,0,1,'L');


	$pdf->Output();



} else {

	?>
	<script type="text/javascript">
		window.close();
	</script>
	<?php
}




?>