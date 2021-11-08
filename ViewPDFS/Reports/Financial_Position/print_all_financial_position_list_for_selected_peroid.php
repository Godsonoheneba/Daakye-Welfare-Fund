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


		$this->Cell(180,10,'FINANCIAL POSITION  AS AT  ' . $MAXDATE,0,1,'C');

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




      /*----------------GET OTTAL CONTRIBUTIONS MADE*/
      $getTotalContributions = mysqli_query($conn, "SELECT SUM(total_contribution_made) AS total_contribution_made FROM members WHERE active='yes'    ");
      $getRow = mysqli_fetch_assoc($getTotalContributions);
      $totalContributionReal = $getRow["total_contribution_made"];
      $totalContribution = number_format($getRow["total_contribution_made"], 2);



        /*----------------GET TOTAL COMPANY RETURNSHIP-----------------------*/
      $getTotalCompanyReturnship = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_returnship WHERE active='yes'    ");
      $getRow5 = mysqli_fetch_assoc($getTotalCompanyReturnship);
      $totalReturnshipReal = $getRow5["amount"];
      $totalReturnship = round($getRow5["amount"], 2);



      /*---------------------TOTAL ASSETS--------------*/
      $TOtalAssets = round($totalContributionReal + $totalReturnshipReal, 2);




      /*----------------GET TOTAL LOANS GIVING------------------*/
      $getTotalLoans = mysqli_query($conn, "SELECT SUM(amount_collected) AS amount_collected FROM loans_all WHERE active='yes' AND  loan_status='issued' AND  finish_paying='no'  ");
      $getRow2 = mysqli_fetch_assoc($getTotalLoans);
      $totalLoanCollectedReal = $getRow2["amount_collected"];
      $totalLoanCollected = number_format($getRow2["amount_collected"], 2);



      /*---------------get cash at bank-------------------- */
      $getCashAtBank = mysqli_query($conn, "SELECT * FROM company_bank_statement WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");
      $getRow23 = mysqli_fetch_assoc($getCashAtBank);
      $getTOtalCashAtBnkReal = $getRow23["amount"];
      $getTOtalCashAtBnk = number_format($getRow23["amount"], 2);


      $getTotalLiability = number_format($totalLoanCollectedReal + $getTOtalCashAtBnkReal, 2) ; 





		$pdf->Cell(190,10,'', 1,1, 'C');

      	/*-------------------------ASSETS--------------------------*/
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(190,10,' ASSETS   ', 1,1, 'L');


		/*-------------------------Total Contributions --------------------------*/
		$pdf->SetFont('Arial','',14);
		$pdf->Cell(120,10,' Total Contributions  :  ', 1,0, 'L');
		$pdf->Cell(70,10,' GHC '. $totalContribution, 1,1, 'C');


			/*-------------------------Total Comapny Retention  --------------------------*/
		$pdf->SetFont('Arial','',14);
		$pdf->Cell(120,10,' Total Comapny Retention   :  ', 1,0, 'L');
		$pdf->Cell(70,10,' GHC '. $totalReturnship, 1,1, 'C');


			/*-------------------------TOTAL ASSETS --------------------------*/
		$pdf->SetFont('Arial','B',18);
		$pdf->Cell(120,10,' TOTAL   :  ', 1,0, 'L');
		$pdf->Cell(70,10,' GHC '. $TOtalAssets, 1,1, 'C');







		$pdf->Cell(190,10,'', 1,1, 'C');





		/*-------------------------LIABILITY--------------------------*/
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(190,10,' LIABILITY   ', 1,1, 'L');

		
		/*-------------------------Total Loans  --------------------------*/
		$pdf->SetFont('Arial','',14);
		$pdf->Cell(120,10,' Total Loans (Principal)  :  ', 1,0, 'L');
		$pdf->Cell(70,10,' GHC '. $totalLoanCollected, 1,1, 'C');


				/*-------------------------Cash At Bank  --------------------------*/
		$pdf->SetFont('Arial','',14);
		$pdf->Cell(120,10,' Cash At Bank   :  ', 1,0, 'L');
		$pdf->Cell(70,10,' GHC '. $getTOtalCashAtBnk, 1,1, 'C');


				/*-------------------------TOTAL LIABILITY --------------------------*/
		$pdf->SetFont('Arial','B',18);
		$pdf->Cell(120,10,' TOTAL   :  ', 1,0, 'L');
		$pdf->Cell(70,10,' GHC '. $getTotalLiability, 1,1, 'C');



		$pdf->Cell(190,10,'', 1,1, 'C');







	



	$pdf->SetFont('Arial','B',14);
	// $pdf->Cell(180,10, 'TOTAL REGISTRATION FEES :  GHC '  . number_format($TOTAL, 2), 1,1, 'C');


$pdf->Output();




?>