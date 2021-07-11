<?php 


include '../../cores/config.php';


require('../../fpdf/fpdf.php');


$getSTUDENT = $_GET["STUDENT"];
$gettabId = $_GET["TRACK"];
$getAdmisionNumber = $_GET["TRUE"];


$selStu = mysqli_query($conn, "SELECT * FROM students WHERE admissionNumber='$getAdmisionNumber'  AND last_name='$getSTUDENT' AND id='$gettabId' AND active='yes' LIMIT 1 ");

$ahem = mysqli_fetch_assoc($selStu);


$id = $ahem["id"];
$first_name = $ahem["first_name"];
$last_name = $ahem["last_name"];
$middle_name = $ahem["middle_name"];
$place_of_birth = $ahem["place_of_birth"];
$admissionNumber = $ahem["admissionNumber"];
$dob_day = $ahem["dob_day"];
$dob_month = $ahem["dob_month"];
$dob_year = $ahem["dob_year"];
$gender = $ahem["gender"];
$hometown = $ahem["hometown"];
$house_address = $ahem["house_address"];
$tribe = $ahem["tribe"];
$nationality = $ahem["nationality"];
$religion = $ahem["religion"];
$languages = $ahem["languages"];
$disabilities = $ahem["disabilities"];
$class = $ahem["class"];
$passport = $ahem["passport"];
$father_name = $ahem["father_name"];
$father_occupation = $ahem["father_occupation"];
$father_nationality = $ahem["father_nationality"];
$father_hometown = $ahem["father_hometown"];
$father_mobile_number = $ahem["father_mobile_number"];
$father_address = $ahem["father_address"];
$father_email = $ahem["father_email"];
$father_denomination = $ahem["father_denomination"];
$mother_name = $ahem["mother_name"];
$mother_occupation = $ahem["mother_occupation"];
$mother_nationality = $ahem["mother_nationality"];
$mother_hometown = $ahem["mother_hometown"];
$mother_mobile_number = $ahem["mother_mobile_number"];
$mother_address = $ahem["mother_address"];
$mother_email = $ahem["mother_email"];
$mother_denomination = $ahem["mother_denomination"];
$allergies = $ahem["allergies"];
$insurance_number = $ahem["insurance_number"];
$child_lives_with = $ahem["child_lives_with"];
$Poliomyelitis = $ahem["Poliomyelitis"];
$Measles = $ahem["Measles"];
$YellowFever = $ahem["YellowFever"];
$Tetanus = $ahem["Tetanus"];
$WhoopingCough = $ahem["WhoopingCough"];


$fullname = $first_name . " " . $last_name . " " . $middle_name;
$dob = $dob_day . " " . $dob_month . " , " . $dob_year;


$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];



 

class PDF extends FPDF {
	function Header(){

		global $getAdmisionNumber;
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

		$this->Cell(180,10,'STUDENT INFORMATION   ',0,1,'C');

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




	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Admission #', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$admissionNumber, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$fullname, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Date of Birth', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$dob, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Place of Birth', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$place_of_birth, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Gender', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$gender, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'House Address', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$house_address, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Home Town', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$hometown, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Nationality', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$nationality, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Tribe', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$tribe, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Denomination', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$religion, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Language Spoken', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$languages, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Disabilities', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$disabilities, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Class', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$class, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Allergies', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$allergies, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Insurance Number', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$insurance_number, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Child lives with', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$child_lives_with, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Poliomyelitis', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$Poliomyelitis, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Measles', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$Measles, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Yellow Fever', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$YellowFever, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Tetanus', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$Tetanus, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Whooping Cough', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$WhoopingCough, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$father_name, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Occupation', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$father_occupation, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Nationality', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$father_nationality, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Hometown', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$father_hometown, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father mobile number', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$father_mobile_number, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Address', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(150,10,$father_address, 1,1, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Email', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(150,10,$father_email, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Father Denomination', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$father_denomination, 1,0, 'C');





	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$mother_name, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Occupation', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$mother_occupation, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Nationality', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$mother_nationality, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Hometown', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$mother_hometown, 1,0, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother mobile number', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$mother_mobile_number, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Address', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(150,10,$mother_address, 1,1, 'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Email', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(150,10,$mother_email, 1,1, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Mother Denomination', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$mother_denomination, 1,1, 'C');

	





$pdf->Output();




?>