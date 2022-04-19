<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');

$getMEmberID = $_GET["TRUE"];
$getReceiptNumber = $_GET["RECEIPT"];


// $seleContrins = mysqli_query($conn, "SELECT * FROM members_contributions WHERE member_id_encrypt='$getMEmberID' AND receipt_number='$getReceiptNumber' AND active='yes' LIMIT 1  ");

// $getDem = mysqli_fetch_assoc($seleContrins);
// $Tableid = $getDem["id"];
// $member_id = $getDem["member_id"];
// $member_id_encrypt = $getDem["member_id_encrypt"];
// $year = $getDem["year"];
// $month = $getDem["month"];
// $amount = $getDem["amount"];
// $receipt_number = $getDem["receipt_number"];
// $date_paid = $getDem["date_paid"];
// $date_created = $getDem["date_created"];
// $done_by = $getDem["done_by"];
// $amount = @number_format($amount,2);



// $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$member_id' AND active='yes'  LIMIT 1  ");

// $getDemMem = mysqli_fetch_assoc($selMems);

// $firstname = $getDemMem["firstname"];
// $surname = $getDemMem["surname"];
// $contribution_amount = $getDemMem["contribution_amount"];
// $total_contribution_made = $getDemMem["total_contribution_made"];


$selCon = mysqli_query($conn, "SELECT mem.*, conw.*  FROM members mem, contributions_withdrawal conw WHERE
  mem.member_id_encrypt = '$getMEmberID' 
  AND conw.member_id = '$getMEmberID' 
  AND conw.receiptNumber = '$getReceiptNumber' 
  AND conw.status = '1' 
  AND conw.active ='yes' 
  AND mem.active ='yes' 

 LIMIT 1 

 ");


 $getAlls = mysqli_fetch_assoc($selCon);

    $id = $getAlls["id"];
    $member_id_encrypt = $getAlls["member_id_encrypt"];
    $member_id = $getAlls["member_id"];
    $firstname = $getAlls["firstname"];
    $surname = $getAlls["surname"];
    $telephone = $getAlls["telephone"];
    $total_contribution_made = $getAlls["total_contribution_made"];
    $balance_before = $getAlls["balance_before"];
    $amount = $getAlls["amount"];
    $receiptNumber = $getAlls["receiptNumber"];
    $date_added = $getAlls["date_added"];
    $date_issued = $getAlls["date_issued"];
    $issued_by = $getAlls["issued_by"];

$memberName = $firstname . ' ' . ' ' . ' ' .  $surname ;


$payment_type = " Withdrawal";



if (mysqli_num_rows($selCon) > 0) {

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

	$pdf->Cell(99,10,' CONTRIBUTION WITHDRAWAL | Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Receipt #: ' . $receiptNumber, 0,1,'R');


	$pdf->Cell(99,10, ' Requested Date:  ' .  $date_added ,0,0,'L');
	$pdf->Cell(90,10,' Issued Date: ' . $date_issued,0,1,'R');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'Contribution Left: GHC' . number_format($total_contribution_made,2), 0,0,'L');

	$pdf->Cell(99,10,'Member Reg #        : ' . $member_id, 0,1,'R');

	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(50,10,'Receive from: ' ,0,0,'L');
	$pdf->Cell(139,10, $memberName,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');





	$pdf->Cell(50,10,'Amount Withdraw: ' ,0,0,'L');
	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(50,10, 'GHC ' . $amount ,0,0,'L');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,' Contribution Before: ' ,0,0,'L');
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