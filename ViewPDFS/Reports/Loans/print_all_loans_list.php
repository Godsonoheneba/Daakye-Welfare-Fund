<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];

$getLoanTypeName = $_GET["TRUE"];
$TOTAL = $_GET["TOTAL"];
$MINDATE = $_GET["MINDATE"];
$MAXDATE = $_GET["MAXDATE"];





 class PDF extends FPDF {
 	function Header(){

 		global $letterhead;
 		global $getLoanTypeName;
 		global $TOTAL;
 		global $MINDATE;
 		global $MAXDATE;

 		$this->SetFont('Arial','B',15);

		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
 		$this->Cell(12);

 		$this->Image('../../../school_data/letter_head/'.$letterhead,10,10,270);



		//dummy cell to give line spacing
 		$this->Cell(0,10,'',0,1);
 		$this->Cell(0,10,'',0,1);
 		$this->Cell(0,10,'',0,1);
 		$this->Cell(0,10,'',0,1);
 		$this->Cell(0,10,'',0,1);
		//is equivalent to:
 		$this->Ln(5);

 		$this->SetFont('Arial','B',18);




 		$this->SetFont('Arial','B',12);

 		$this->Cell(270,10,'ACTIVE LOANS COLLECTED LIST FOR : ' . $getLoanTypeName ,0,1,'C');


 		$this->SetFont('Arial','B',9);


 		$this->SetFont('Arial','B',9);

 		$this->SetFillColor(180,180,255);
 		$this->SetDrawColor(180,180,255);
 		$this->Cell(30,10,'ID',1,0,'C',true);
 		$this->Cell(60,10,'Name',1,0,'C',true);
 		$this->Cell(20,10,'Mobile',1,0,'C',true);
 		$this->Cell(20,10,'Loan',1,0,'C',true);
 		$this->Cell(20,10,'Total',1,0,'C',true);
 		$this->Cell(20,10,'Balance',1,0,'C',true);
 		$this->Cell(25,10,'Monthly ',1,0,'C',true);
 		$this->Cell(30,10,'Date Issued',1,0,'C',true);
 		$this->Cell(30,10,'Repayment period',1,0,'C',true);
 		$this->Cell(20,10,'Status',1,1,'C',true);





 	}
 	function Footer(){




		//add table's bottom line
 		$this->Cell(190,0,'','T',1,'',true);

		//Go to 1.5 cm from bottom
 		$this->SetY(-15);

 		$this->SetFont('Arial','',8);

		//width = 0 means the cell is extended up to the right margin
 		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages} |  "  ,0,0,'C');
 	}
 }


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('L','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);



 $selectLoanTypee = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND loan_status='issued' AND status='$getLoanTypeName' AND 
        date_added
        BETWEEN '$MINDATE' AND '$MAXDATE'
        ORDER BY id DESC 

        "); 


       $selectLoanAll = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND loan_status='issued'  AND 
        date_added
        BETWEEN '$MINDATE' AND '$MAXDATE'
        ORDER BY id DESC 

        "); 



if ($getLoanTypeName==="Member") {




	while ( $getdac = mysqli_fetch_assoc($selectLoanTypee)) {


		$id = $getdac["id"];
		$person_id = $getdac["person_id"];
		$status = $getdac["status"];
		$amount_collected = number_format($getdac["amount_collected"], 2);
		$interest_rate = $getdac["interest_rate"];
		$total_interest_rate_amount = $getdac["total_interest_rate_amount"];
		$interest_amount_paid = $getdac["interest_amount_paid"];
		$total_amount_to_pay = number_format($getdac["total_amount_to_pay"], 2);
		$amount_paid = $getdac["amount_paid"];
		$balance = number_format( $getdac["balance"], 2);
		$date_requested = $getdac["date_requested"];
		$date_issued = $getdac["date_issued"];
		$monthly_installment = number_format($getdac["monthly_installment"], 2);
		$total_months_for_payment = $getdac["total_months_for_payment"];
		$months_left = $getdac["months_left"];
		$date_of_completion = $getdac["date_of_completion"];
		$next_month_payment_date = $getdac["next_month_payment_date"];
		$next_month_payment_amount = $getdac["next_month_payment_amount"];
		$had_penalty = $getdac["had_penalty"];
		$finish_paying = $getdac["finish_paying"];
		$guarantor1 = $getdac["guarantor1"];
		$guarantor1_confirm = $getdac["guarantor1_confirm"];
		$guarantor2 = $getdac["guarantor2"];
		$guarantor2_confirm = $getdac["guarantor2_confirm"];
		$loan_status = $getdac["loan_status"];
		$issued_by = $getdac["issued_by"];
		$date_added = $getdac["date_added"];
		$loan_added_by = $getdac["loan_added_by"];


		if ($total_months_for_payment==="1") {
			$MonthsString = "Month";
		} else {
			$MonthsString = "Months";

		}


		if ($finish_paying==="yes") {
			$mySTat = "Completed";
		} else {
			$mySTat = "Outstanding";

		}

		if ($status==="Customer") {

			$selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

			$getDemMem = mysqli_fetch_assoc($selMems);

			$person_idss = $getDemMem["customer_id"];
			$firstname = $getDemMem["firstname"];
			$surname = $getDemMem["surname"];
			$telephone = $getDemMem["telephone"];

			$personName = $firstname . ' ' .  $surname ;

		} else {
			$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

			$getDemMem = mysqli_fetch_assoc($selMems);

			$person_idss = $getDemMem["member_id"];
			$firstname = $getDemMem["firstname"];
			$surname = $getDemMem["surname"];
			$telephone = $getDemMem["telephone"];

			$personName = $firstname .  ' ' .  $surname ;
		}



		$pdf->Cell(30,10,$person_idss, 1,0, 'C');
		$pdf->Cell(60,10,$personName, 1,0, 'C');
		$pdf->Cell(20,10,$telephone, 1,0, 'C');
		$pdf->Cell(20,10,$amount_collected, 1,0, 'C');
		$pdf->Cell(20,10,$total_amount_to_pay, 1,0, 'C');
		$pdf->Cell(20,10,$balance, 1,0, 'C');
		$pdf->Cell(25,10,$monthly_installment, 1,0, 'C');
		$pdf->Cell(30,10,$date_issued, 1,0, 'C');
		$pdf->Cell(30,10, $total_months_for_payment    . '' . $MonthsString , 1,0, 'C');
		$pdf->Cell(20,10,$mySTat, 1,1, 'C');



	}

	


}else if ($getLoanTypeName==="Customer") {


	

	while ( $getdac = mysqli_fetch_assoc($selectLoanTypee)) {


		$id = $getdac["id"];
		$person_id = $getdac["person_id"];
		$status = $getdac["status"];
		$amount_collected = number_format($getdac["amount_collected"], 2);
		$interest_rate = $getdac["interest_rate"];
		$total_interest_rate_amount = $getdac["total_interest_rate_amount"];
		$interest_amount_paid = $getdac["interest_amount_paid"];
		$total_amount_to_pay = number_format($getdac["total_amount_to_pay"], 2);
		$amount_paid = $getdac["amount_paid"];
		$balance = number_format( $getdac["balance"], 2);
		$date_requested = $getdac["date_requested"];
		$date_issued = $getdac["date_issued"];
		$monthly_installment = number_format($getdac["monthly_installment"], 2);
		$total_months_for_payment = $getdac["total_months_for_payment"];
		$months_left = $getdac["months_left"];
		$date_of_completion = $getdac["date_of_completion"];
		$next_month_payment_date = $getdac["next_month_payment_date"];
		$next_month_payment_amount = $getdac["next_month_payment_amount"];
		$had_penalty = $getdac["had_penalty"];
		$finish_paying = $getdac["finish_paying"];
		$guarantor1 = $getdac["guarantor1"];
		$guarantor1_confirm = $getdac["guarantor1_confirm"];
		$guarantor2 = $getdac["guarantor2"];
		$guarantor2_confirm = $getdac["guarantor2_confirm"];
		$loan_status = $getdac["loan_status"];
		$issued_by = $getdac["issued_by"];
		$date_added = $getdac["date_added"];
		$loan_added_by = $getdac["loan_added_by"];


		if ($total_months_for_payment==="1") {
			$MonthsString = "Month";
		} else {
			$MonthsString = "Months";

		}


		if ($finish_paying==="yes") {
			$mySTat = "Completed";
		} else {
			$mySTat = "Outstanding";

		}

		if ($status==="Customer") {

			$selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

			$getDemMem = mysqli_fetch_assoc($selMems);

			$person_idss = $getDemMem["customer_id"];
			$firstname = $getDemMem["firstname"];
			$surname = $getDemMem["surname"];
			$telephone = $getDemMem["telephone"];

			$personName = $firstname . ' ' .  $surname ;

		} else {
			$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

			$getDemMem = mysqli_fetch_assoc($selMems);

			$person_idss = $getDemMem["member_id"];
			$firstname = $getDemMem["firstname"];
			$surname = $getDemMem["surname"];
			$telephone = $getDemMem["telephone"];

			$personName = $firstname .  ' ' .  $surname ;
		}



		$pdf->Cell(30,10,$person_idss, 1,0, 'C');
		$pdf->Cell(60,10,$personName, 1,0, 'C');
		$pdf->Cell(20,10,$telephone, 1,0, 'C');
		$pdf->Cell(20,10,$amount_collected, 1,0, 'C');
		$pdf->Cell(20,10,$total_amount_to_pay, 1,0, 'C');
		$pdf->Cell(20,10,$balance, 1,0, 'C');
		$pdf->Cell(25,10,$monthly_installment, 1,0, 'C');
		$pdf->Cell(30,10,$date_issued, 1,0, 'C');
		$pdf->Cell(30,10, $total_months_for_payment    . '' . $MonthsString , 1,0, 'C');
		$pdf->Cell(20,10,$mySTat, 1,1, 'C');



	}

	


}else{




	while ( $getdac = mysqli_fetch_assoc($selectLoanAll)) {


		$id = $getdac["id"];
		$person_id = $getdac["person_id"];
		$status = $getdac["status"];
		$amount_collected = number_format($getdac["amount_collected"], 2);
		$interest_rate = $getdac["interest_rate"];
		$total_interest_rate_amount = $getdac["total_interest_rate_amount"];
		$interest_amount_paid = $getdac["interest_amount_paid"];
		$total_amount_to_pay = number_format($getdac["total_amount_to_pay"], 2);
		$amount_paid = $getdac["amount_paid"];
		$balance = number_format( $getdac["balance"], 2);
		$date_requested = $getdac["date_requested"];
		$date_issued = $getdac["date_issued"];
		$monthly_installment = number_format($getdac["monthly_installment"], 2);
		$total_months_for_payment = $getdac["total_months_for_payment"];
		$months_left = $getdac["months_left"];
		$date_of_completion = $getdac["date_of_completion"];
		$next_month_payment_date = $getdac["next_month_payment_date"];
		$next_month_payment_amount = $getdac["next_month_payment_amount"];
		$had_penalty = $getdac["had_penalty"];
		$finish_paying = $getdac["finish_paying"];
		$guarantor1 = $getdac["guarantor1"];
		$guarantor1_confirm = $getdac["guarantor1_confirm"];
		$guarantor2 = $getdac["guarantor2"];
		$guarantor2_confirm = $getdac["guarantor2_confirm"];
		$loan_status = $getdac["loan_status"];
		$issued_by = $getdac["issued_by"];
		$date_added = $getdac["date_added"];
		$loan_added_by = $getdac["loan_added_by"];


		if ($total_months_for_payment==="1") {
			$MonthsString = "Month";
		} else {
			$MonthsString = "Months";

		}


		if ($finish_paying==="yes") {
			$mySTat = "Completed";
		} else {
			$mySTat = "Outstanding";

		}

		if ($status==="Customer") {

			$selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

			$getDemMem = mysqli_fetch_assoc($selMems);

			$person_idss = $getDemMem["customer_id"];
			$firstname = $getDemMem["firstname"];
			$surname = $getDemMem["surname"];
			$telephone = $getDemMem["telephone"];

			$personName = $firstname . ' ' .  $surname ;

		} else {
			$selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

			$getDemMem = mysqli_fetch_assoc($selMems);

			$person_idss = $getDemMem["member_id"];
			$firstname = $getDemMem["firstname"];
			$surname = $getDemMem["surname"];
			$telephone = $getDemMem["telephone"];

			$personName = $firstname .  ' ' .  $surname ;
		}



		$pdf->Cell(30,10,$person_idss, 1,0, 'C');
		$pdf->Cell(60,10,$personName, 1,0, 'C');
		$pdf->Cell(20,10,$telephone, 1,0, 'C');
		$pdf->Cell(20,10,$amount_collected, 1,0, 'C');
		$pdf->Cell(20,10,$total_amount_to_pay, 1,0, 'C');
		$pdf->Cell(20,10,$balance, 1,0, 'C');
		$pdf->Cell(25,10,$monthly_installment, 1,0, 'C');
		$pdf->Cell(30,10,$date_issued, 1,0, 'C');
		$pdf->Cell(30,10, $total_months_for_payment    . '' . $MonthsString , 1,0, 'C');
		$pdf->Cell(20,10,$mySTat, 1,1, 'C');



	}



}


$pdf->SetFont('Arial','B',14);
$pdf->Cell(275,10, ' TOTAL # :  ' . $TOTAL, 1,1, 'C');



$pdf->Output();




?>