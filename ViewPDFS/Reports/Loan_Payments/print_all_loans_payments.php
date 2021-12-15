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

		global $MINDATE;
		global $MAXDATE;
		global $letterhead;

		$this->SetFont('Arial','B',15);


		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);

		//put logo
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


		$this->Cell(180,10,'ALL LOAN PAYMENT  FROM ' . $MINDATE . '  -  ' . $MAXDATE,0,1,'C');

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(10,10,'NO.',1,0,'C',true);
		$this->Cell(60,10,'Name',1,0,'C',true);
		$this->Cell(25,10,'Loan Amount',1,0,'C',true);
		$this->Cell(25,10,'Amount Paid',1,0,'C',true);
		$this->Cell(25,10,'Balance Before',1,0,'C',true);
		$this->Cell(10,10,'Month',1,0,'C',true);
		$this->Cell(10,10,'year',1,0,'C',true);
		$this->Cell(20,10,'status',1,0,'C',true);
		$this->Cell(20,10,'receipt_no',1,0,'C',true);
		$this->Cell(35,10,'date_paid',1,0,'C',true);
		$this->Cell(40,10,'Staff',1,1,'C',true);
	


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

 $no=1;

 $selectLoansPayyyy = mysqli_query($conn, "SELECT * FROM loans_pay WHERE active='yes' AND
        date_created
        BETWEEN '$MINDATE' AND '$MAXDATE'
        ORDER BY id DESC 

        "); 

 while ($getdac = mysqli_fetch_assoc($selectLoansPayyyy)) {


          $person_id = $getdac["person_id"];
          $loan_id = $getdac["loan_id"];
          $amount_paid = number_format($getdac["amount_paid"], 2);
          $amount_collected = number_format($getdac["amount_collected"], 2);
          $balance_before = $getdac["balance_before"];
          $month = $getdac["month"];
          $year = $getdac["year"];
          $date_paid = $getdac["date_paid"];
          $receipt_no = $getdac["receipt_no"];
          $staff = $getdac["staff"];


          $loanIDD = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id'  LIMIT 1 ");
          $llI = mysqli_fetch_assoc($loanIDD);

          $status = $llI["status"];


          if ($status==="Member") {
            $memB = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id'  LIMIT 1 ");
            $memaame = mysqli_fetch_assoc($memB);

            $firstname = $memaame["firstname"];
            $surname = $memaame["surname"];
            $persnaNames = $firstname . " " . $surname;
          } else {
           $memB = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id'  LIMIT 1 ");
           $memaame = mysqli_fetch_assoc($memB);

           $firstname = $memaame["firstname"];
           $surname = $memaame["surname"];
           $persnaNames = $firstname . " " . $surname;
         }

         $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$staff'   LIMIT 1 ");
         $ahemvals = mysqli_fetch_assoc($staffss);

         $firstName = $ahemvals["firstName"];
         $lastName = $ahemvals["lastName"];
         $staffFullNAme = $firstName . " " . $lastName;

		// $this->Cell(10,10,'NO.',1,0,'C',true);
		// $this->Cell(60,10,'Name',1,0,'C',true);
		// $this->Cell(25,10,'Loan Amount',1,0,'C',true);
		// $this->Cell(25,10,'Amount Paid',1,0,'C',true);
		// $this->Cell(25,10,'Balance Before',1,0,'C',true);
		// $this->Cell(15,10,'Month',1,0,'C',true);
		// $this->Cell(10,10,'year',1,0,'C',true);
		// $this->Cell(20,10,'status',1,0,'C',true);
		// $this->Cell(20,10,'receipt_no',1,0,'C',true);
		// $this->Cell(20,10,'date_paid',1,0,'C',true);
		// $this->Cell(30,10,'Staff',1,1,'C',true);

     $pdf->Cell(10,10,$no, 1,0, 'C');
     $pdf->Cell(60,10,$persnaNames, 1,0, 'C');
     $pdf->Cell(25,10,$amount_collected, 1,0, 'C');
     $pdf->Cell(25,10,$amount_paid, 1,0, 'C');
     $pdf->Cell(25,10,$balance_before, 1,0, 'C');
     $pdf->Cell(10,10,$month, 1,0, 'C');
     $pdf->Cell(10,10,$year, 1,0, 'C');
     $pdf->Cell(20,10,$status, 1,0, 'C');
     $pdf->Cell(20,10,$receipt_no, 1,0, 'C');
     $pdf->Cell(35,10,$date_paid, 1,0, 'C');
	$pdf->Cell(40,10,$staffFullNAme, 1,1, 'C');



$no++;

       }








$pdf->SetFont('Arial','B',14);
// $pdf->Cell(180,10, 'TOTAL LOAN INTEREST :  GHC '  . number_format($TOTAL, 2), 1,1, 'C');


$pdf->Output();




?>