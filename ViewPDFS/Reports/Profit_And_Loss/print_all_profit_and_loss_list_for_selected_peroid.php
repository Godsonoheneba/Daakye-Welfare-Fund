<?php 

 
include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');

$MINDATE = $_GET["MINDATE"];
$MAXDATE = $_GET["MAXDATE"];


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




class PDF extends FPDF {
	function Header(){

		global $TOTAL;
		global $MINDATE;
		global $MAXDATE;
		global $letterhead;

		$this->SetFont('Arial','B',15);


		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);

		//put logo
		$this->Image('../../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Cell(0,5,'',0,1);
		$this->Ln(5);


		$this->Cell(180,10,'PROFIT AND LOSS ACCOUNT AS AT  ' . $MAXDATE,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		
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

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);



    $LoaninterestPurpose1 = "Loan Interest";
$LoaninterestPurpose2 = "Loans Interest Paid by the Guarantors";
$LoaninterestPurpose3 = "Loan Interest and Penalty Interest";
$RegistrationFeePurpose = "Member Registration Fee";
$memDeductionPurpose = "5% of Member Deactivated charge";





        /*-----------------get total LOAN Interest  ----------------*/
        $getTotalInteresr = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND date_added BETWEEN '$MINDATE' AND '$MAXDATE' AND year_finish='no' AND ( purpose='$LoaninterestPurpose1' OR  purpose='$LoaninterestPurpose2' OR  purpose='$LoaninterestPurpose3' )  ");
        $getRow248 = mysqli_fetch_assoc($getTotalInteresr);
        $totalInterest = $getRow248["amount"];




        /*-----------------get total penalty Interest  ----------------*/
        $getTotalPenalty = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM comp_reve_contrib_penalty WHERE  active='yes' AND date_added BETWEEN '$MINDATE' AND '$MAXDATE' AND year_finish='no'  ");
        $getRow2482 = mysqli_fetch_assoc($getTotalPenalty);
        $totalPenalty = $getRow2482["amount"];

        /*-----------------get total LOAN  penalty Interest  ----------------*/
        $getTotallOANPenalty = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM comp_reve_loan_penalty WHERE  active='yes' AND date_added BETWEEN '$MINDATE' AND '$MAXDATE' AND year_finish='no'  ");
        $getRow2555656 = mysqli_fetch_assoc($getTotallOANPenalty);
        $totalLoanPenalty = $getRow2555656["amount"];






        /*-----------------get total Registration fee  ----------------*/
        $getTotalReFee = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM comp_reve_memb_reg_fee WHERE  active='yes' AND date_added BETWEEN '$MINDATE' AND '$MAXDATE' AND year_finish='no'  ");
        $getRow24823 = mysqli_fetch_assoc($getTotalReFee);
        $totalRegFee = $getRow24823["amount"];



         

        /*-----------------get total 5% deduction fee  ----------------*/
        $getTotalDedcutionPercen = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM comp_reve_5_perc_mem_deactivate_deduction WHERE  active='yes' AND date_added BETWEEN '$MINDATE' AND '$MAXDATE' AND year_finish='no'  ");
        $getRow248235 = mysqli_fetch_assoc($getTotalDedcutionPercen);
        $totalPercDeduction = $getRow248235["amount"];



              /*-----------------get total Expenses ----------------*/
      $getTotalExp = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE  active='yes' AND date_added BETWEEN '$MINDATE' AND '$MAXDATE'  AND year_finish='no'  ");
      $getRow231 = mysqli_fetch_assoc($getTotalExp);
      $totalExpenses = $getRow231["amount"];




        /*-----------------get total Revenue ----------------*/

        $getAllTOtalInterest = $totalInterest + $totalPenalty + $totalLoanPenalty + $totalRegFee + $totalPercDeduction;

        $totalSurplusORDeficit = $getAllTOtalInterest - $totalExpenses;

 

      /*-------------------company returnship share -----------*/
      $returnshipShare = 0.05 * $totalSurplusORDeficit;
      $returnshipShare = round($returnshipShare, 2);

      $TotalBalanceAfterReturnship = $totalSurplusORDeficit - $returnshipShare;


      /*-------------------managements share -----------*/
      $managements = 0.07 * $TotalBalanceAfterReturnship;
      $managements = round($managements, 2);

      $TotalBalanceAfterManagement = $TotalBalanceAfterReturnship - $managements;


      /*-------------------founders share -----------*/
      $founderShare = 0.1 * $TotalBalanceAfterManagement;
      $founderShare = round($founderShare, 2); 

      $TotalBalanceAfterFounders = $TotalBalanceAfterManagement - $founderShare;


      /*-------------------CO- founders share -----------*/
      $CofounderShare = 0.09 * $TotalBalanceAfterFounders;
      $CofounderShare = round($CofounderShare, 2);

      $TotalBalanceAfterCoFounders = $TotalBalanceAfterFounders - $CofounderShare;


      /*-------------------2nd year people share -----------*/
      $SeniorStaffShare = 0.05 * $TotalBalanceAfterCoFounders;
      $SeniorStaffShare = round($SeniorStaffShare, 2);

      $TotalBalanceAfterSeniorStaffShare = $TotalBalanceAfterCoFounders - $SeniorStaffShare;


      /*-------------------3rd year people share -----------*/
      $juniorStaffSHare = 0.03 * $TotalBalanceAfterSeniorStaffShare;
      $juniorStaffSHare = round($juniorStaffSHare, 2);

      $TotalBalanceAfterjuniorStaffSHare = $TotalBalanceAfterSeniorStaffShare - $juniorStaffSHare;



      $allShares = $founderShare + $CofounderShare + $SeniorStaffShare + $juniorStaffSHare + $managements + $returnshipShare;

      $shareLeft = $totalSurplusORDeficit -  $allShares;


      $totalInterest = number_format($totalInterest,2);
      $totalLoanPenalty = number_format($totalLoanPenalty,2);
      $totalPenalty = number_format($totalPenalty,2);
      $totalRegFee = number_format($totalRegFee,2);
      $totalPercDeduction = number_format($totalPercDeduction,2);
      $getAllTOtalInterest = number_format($getAllTOtalInterest,2);
      $totalExpenses = number_format($totalExpenses,2);
      $totalSurplusORDeficit = number_format($totalSurplusORDeficit,2);
      $allShares = number_format($allShares,2);
      $shareLeft = number_format($shareLeft,2);



$pdf->Cell(150,10,' Items', 1,0, 'L');
$pdf->Cell(40,10,'GHC', 1,1, 'C');

/*-------------------------Interest on Loans --------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Interest on Loans  :  ', 1,0, 'L');
$pdf->Cell(40,10, $totalInterest, 1,1, 'C');


$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Penalties on Loans  :  ', 1,0, 'L');
$pdf->Cell(40,10, $totalLoanPenalty, 1,1, 'C');


$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Penalties on Contributions  :  ', 1,0, 'L');
$pdf->Cell(40,10, $totalPenalty, 1,1, 'C');


$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Registration Fees  :  ', 1,0, 'L');
$pdf->Cell(40,10, $totalRegFee, 1,1, 'C');


$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 5% Members Deduction  :  ', 1,0, 'L');
$pdf->Cell(40,10, $totalPercDeduction, 1,1, 'C');


$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' TOTAL  REVENUE  :  ', 1,0, 'L');
$pdf->Cell(40,10, $getAllTOtalInterest, 1,1, 'C');


/*-------------------------Less Total Sundry Expenses --------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Less Total Sundry Expenses  :  ', 1,0, 'L');
$pdf->Cell(40,10, $totalExpenses, 1,1, 'C');



/*-------------------------Total Surplus / Deficit  (Total Interest  + Other Income - Expenses ) --------------------------*/
$pdf->SetFont('Arial','B',14);
$pdf->Cell(150,10,'  Surplus / Deficit  (Total Revenue - Expenses) ', 1,0, 'L');
$pdf->Cell(40,10, $totalSurplusORDeficit, 1,1, 'C');







/*-------------------------10% For Founders--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 10% For Founders :  ', 1,0, 'L');
$pdf->Cell(40,10, $founderShare, 1,1, 'C');


/*-------------------------9% For Co-Founders--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 9% For Co-Founders :  ', 1,0, 'L');
$pdf->Cell(40,10, $CofounderShare, 1,1, 'C');


/*-------------------------5% For 2nd Year Group--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 5% For 2nd Year Group :  ', 1,0, 'L');
$pdf->Cell(40,10, $SeniorStaffShare, 1,1, 'C');


/*-------------------------3% For 3rd Year Group--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 3% For 3rd Year Group :  ', 1,0, 'L');
$pdf->Cell(40,10, $juniorStaffSHare, 1,1, 'C');



/*------------------------- 5% for Company Returnship--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,'  5% for Company Returnship :  ', 1,0, 'L');
$pdf->Cell(40,10, $returnshipShare, 1,1, 'C');



/*------------------------- 7% for Managements--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,'  7% for Managements :  ', 1,0, 'L');
$pdf->Cell(40,10, $managements, 1,1, 'C');







/*-------------------------TOTAL--------------------------*/
$pdf->SetFont('Arial','B',14);
$pdf->Cell(150,10,' TOTAL:  ', 1,0, 'L');
$pdf->Cell(40,10, $allShares, 1,1, 'C');


/*-------------------------Dividend to be Shared--------------------------*/
$pdf->SetFont('Arial','B',16);
$pdf->Cell(150,10,' Dividend to be Shared:  ', 1,0, 'L');
$pdf->Cell(40,10, $shareLeft, 1,1, 'C');








$pdf->SetFont('Arial','B',14);
	// $pdf->Cell(180,10, 'TOTAL REGISTRATION FEES :  GHC '  . number_format($TOTAL, 2), 1,1, 'C');


$pdf->Output();




?>