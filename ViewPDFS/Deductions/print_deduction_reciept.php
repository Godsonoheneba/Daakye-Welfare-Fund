<?php 

include '../../cores/config.php';


require('../../fpdf/fpdf.php');




$FOR = $_GET["FOR"];
$DATE_DONE = $_GET["DATE"];
$AMOUNTDEDUCTED = $_GET["AMOUNTDEDUCTED"];
$LOANHOLDER = $_GET["LOANHOLDER"];
$LOANHOLDERBALANCE = $_GET["LOANHOLDERBALANCE"];
$THELOAN = $_GET["THELOAN"];


$seleContrins = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$THELOAN'  AND active='yes' LIMIT 1  ");

$getDem = mysqli_fetch_assoc($seleContrins);
$loanID  = $getDem["id"];


$loanID = md5($loanID);




$selMems1 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$FOR' AND active='yes' ");
$getDemMem2 = mysqli_fetch_assoc($selMems1);

$firstnameg = $getDemMem2["firstname"];
$surnameg = $getDemMem2["surname"];
$telephone = $getDemMem2["telephone"];

$gurantorName = $firstnameg .  ' ' .  $surnameg ;



if (mysqli_num_rows($seleContrins) > 0) {



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

	$pdf->Cell(99,10,' DEDUCTION | Original Copy' ,0,0,'L');

	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(90,10,'ID #: ' . $loanID, 0,1,'R');


	$pdf->Cell(100,10,'Member ID #        : ' . $FOR, 0,0,'L');

	
	$pdf->Cell(90,10,'Date: ' . $DATE_DONE,0,1,'R');

	$pdf->Cell(270,10,'Member Name        :  ' . $gurantorName, 0,1,'L');


	$pdf->SetFont('Arial','B',10);



	$pdf->Cell(189,.01, '',1,1,'L');




	$pdf->Cell(190,10,'An amount of  GHC ' . number_format($AMOUNTDEDUCTED, 2) . ' has successfully deducted from your total contribution .'  ,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');


	$pdf->Cell(190,10,'Reason:  ' . $LOANHOLDER . ' failed to pay his / her remaining loan'  ,0,1,'L');





	$pdf->Cell(150,10, $LOANHOLDER . '  Loan\'s Balance was : ' ,0,0,'L');
	$pdf->SetFont('Arial','B',13);


	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(140,10,  ' GHC '. number_format($LOANHOLDERBALANCE, 2) . '  ' ,0,1,'L');
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(189,.01, '',1,1,'L');



	$pdf->Cell(280,5, '',0,1,'L');





	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(190,10,'FOR MORE CLARIFICATION, CONTACT THE ADMIN OR VISIT DAAKYE WELFARE TERMS AND CONDITIONS PAGE' ,0,1,'L');
	$pdf->Cell(189,.01, '',1,1,'L');

	$pdf->Cell(0,5,'',0,1);





	$pdf->Output();



} else {
	
	?>
	<script type="text/javascript">
		// window.close();
	</script>
	<?php
}




?>