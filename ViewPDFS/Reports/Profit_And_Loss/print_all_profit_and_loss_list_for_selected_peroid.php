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





/*----------------getTOtal Loan Interest*/
$getTotalInterest = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE active='yes'  AND 
	date_added
	BETWEEN '$MINDATE' AND '$MAXDATE'
	ORDER BY id DESC  ");
$getRow = mysqli_fetch_assoc($getTotalInterest);
$totalRevenue = round($getRow["amount"], 2);



/*----------------getTOtal other Income */
// $getOtherIncome = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM registration_fees WHERE active='yes'  AND 
// 	date_created
// 	BETWEEN '$MINDATE' AND '$MAXDATE'
// 	ORDER BY id DESC  ");
// $getRow2 = mysqli_fetch_assoc($getOtherIncome);
// $totalOtherIncome = number_format($getRow2["amount"], 2);


/*--------------total for interest and other income----------*/

// $interestAndOtherIncomeTotal = $totalRevenue + $totalOtherIncome;
 

$totalOtherIncome = "0.00";
/*----------------get Less Total Sundry Expenses */
$getLessSundryExpenses = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE active='yes'  AND 
	date_added
	BETWEEN '$MINDATE' AND '$MAXDATE'
	ORDER BY id DESC  ");
$getRow23 = mysqli_fetch_assoc($getLessSundryExpenses);
$getTOtalExpenses = round($getRow23["amount"], 2);


/*--------------total deficit / surplus -------*/
$totalSurplusORDeficit = $totalRevenue + $totalOtherIncome - $getTOtalExpenses;



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








$pdf->Cell(190,10,'', 1,1, 'C');

/*-------------------------Interest on Loans --------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Interest on Loans  :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $totalRevenue, 1,1, 'C');



/*-------------------------Other Income --------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Other Income  :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $totalOtherIncome, 1,1, 'C');


/*-------------------------TOTAL  (Total Interest  + Other Income ) --------------------------*/
$pdf->SetFont('Arial','B',14);
$pdf->Cell(150,10,' TOTAL  (Total Interest  + Other Income ) ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $totalRevenue, 1,1, 'C');



/*-------------------------Less Total Sundry Expenses --------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' Less Total Sundry Expenses  :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $getTOtalExpenses, 1,1, 'C');



/*-------------------------Total Surplus / Deficit  (Total Interest  + Other Income - Expenses ) --------------------------*/
$pdf->SetFont('Arial','B',14);
$pdf->Cell(150,10,'  Surplus / Deficit  (Total Interest  + Other Income - Expenses) ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $totalSurplusORDeficit, 1,1, 'C');



/*------------------------- 5% for Company Returnship--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,'  5% for Company Returnship :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $returnshipShare, 1,1, 'C');



/*------------------------- 7% for Managements--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,'  7% for Managements :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $managements, 1,1, 'C');






/*-------------------------10% For Founders--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 10% For Founders :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $founderShare, 1,1, 'C');


/*-------------------------9% For Co-Founders--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 9% For Co-Founders :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $CofounderShare, 1,1, 'C');


/*-------------------------5% For 2nd Year Group--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 5% For 2nd Year Group :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $SeniorStaffShare, 1,1, 'C');


/*-------------------------3% For 3rd Year Group--------------------------*/
$pdf->SetFont('Arial','',12);
$pdf->Cell(150,10,' 3% For 3rd Year Group :  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $juniorStaffSHare, 1,1, 'C');




/*-------------------------TOTAL--------------------------*/
$pdf->SetFont('Arial','B',14);
$pdf->Cell(150,10,' TOTAL:  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $allShares, 1,1, 'C');


/*-------------------------Dividend to be Shared--------------------------*/
$pdf->SetFont('Arial','B',16);
$pdf->Cell(150,10,' Dividend to be Shared:  ', 1,0, 'L');
$pdf->Cell(40,10,' GHC '. $shareLeft, 1,1, 'C');








$pdf->SetFont('Arial','B',14);
	// $pdf->Cell(180,10, 'TOTAL REGISTRATION FEES :  GHC '  . number_format($TOTAL, 2), 1,1, 'C');


$pdf->Output();




?>