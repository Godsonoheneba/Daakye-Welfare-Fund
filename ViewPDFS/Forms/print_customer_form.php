<?php 


include '../../cores/config.php';


require('../../fpdf/fpdf.php');



$noImageForMale = '../../assets/images/customs/male.png';
$noImageForFeMale = '../../assets/images/customs/female.jpg';




$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];





class PDF extends FPDF {
	function Header(){

		global $date_created;
		global $member_id;
		global $letterhead;

		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to: 
		$this->Cell(12);
		
		//put logo
		$this->Image('../../school_data/letter_head/'.$letterhead,10,10,180);
		
		
		//dummy cell to give line spacing
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		$this->Cell(0,10,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',18);




		$this->SetFont('Arial','B',12);

		$this->Cell(180,10,'CUSTOMER FORM  |   # '   ,0,1,'C');
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



/*------------------PHOTO===========*/
$pdf->SetFont('Arial','B',12);
$pdf->Cell(45,10,'' ,0,0,'C');
$pdf->Image($noImageForMale,10,45,20);
$pdf->Cell(45,10,'' ,0,1,'C');


$pdf->Cell(180,10, '',0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(90,10,'Firstname:  .........................................................  ', 0,0, 'L');
$pdf->Cell(90,10,'    Surname:  ..................................................................', 0,1, 'L');



$pdf->Cell(90,10,'Gender:  ................................................ ', 0,0, 'L');
$pdf->Cell(90,10,' Date of Birth (mm/dd/yyyy):  .........................................', 0,1, 'L');


$pdf->Cell(90,10,'Place of Work:  ......................................................', 0,0, 'L');
$pdf->Cell(90,10,'    Postal Address:  ........................................................', 0,1, 'L');




$pdf->Cell(90,10,'Digital Address:  ......................................................  ', 0,0, 'L');
$pdf->Cell(90,10,'    Mobile  ..............................................................', 0,1, 'L');




// $pdf->Cell(120,10,'Email:  ............................................................................................  ', 0,0, 'L');
// $pdf->Cell(70,10,'      Mobile:  .................................', 0,1, 'L');





// $pdf->Cell(60,10,'Marital Status:  ............................. ', 0,1, 'L');

$pdf->Cell(180,10, '',0,1,'C');
$pdf->Cell(180,10, '',0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,10,'LOANS FORM', 1,1, 'C');
$pdf->Cell(190,10,'Please specify the amount of loan you want and the period with your guarantors names.', 0,1, 'C');



$pdf->Cell(180,10, '',0,1,'C');


$pdf->Cell(90,10,'Amount to collect GHC :  .................................  ', 0,0, 'L');
$pdf->Cell(90,10,'     Period for Payment  ..........................................', 0,1, 'L');



$pdf->Cell(190,10,'Guarantor 1 Name: ......................................................................................................................', 0,1, 'L');




$pdf->Cell(190,10,'Guarantor 2 Name: ......................................................................................................................', 0,1, 'L');






$pdf->Cell(180,10, '',0,1,'C');
$pdf->Cell(180,10, '',0,1,'C');
$pdf->Cell(180,10, '',0,1,'C');
$pdf->Cell(180,10, '',0,1,'C');



$pdf->Cell(10,10, '',1,0,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(180,10, '  I , Agree to Daakye Welfare Fund Terms and  Conditions ',0,1,'L');

$pdf->Cell(180,10, '',0,1,'C');


$pdf->SetFont('Arial','B',10);

$pdf->Cell(90,10, '......................................',0,0,'L');
$pdf->Cell(90,10, '......................................',0,1,'R');

$pdf->Cell(90,5, 'Non - Member',0,0,'L');
$pdf->Cell(90,5, 'Admin',0,1,'R');



$pdf->Output();




?>




