<?php 


include '../../cores/config.php';


require('../../fpdf/fpdf.php');


$getMemberName = $_GET["PRINT_INFO_FOR"];
$getMemberID = $_GET["TRUE"];



$seleAllFromBoook2 = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$getMemberID'  AND surname='$getMemberName'  AND active='yes'  LIMIT 1  ");

$getAlls = mysqli_fetch_assoc($seleAllFromBoook2);

$id = $getAlls["id"];
$member_id = $getAlls["member_id"];
$member_id_encrypt = $getAlls["member_id_encrypt"];
$password = $getAlls["password"];
$firstname = $getAlls["firstname"];
$surname = $getAlls["surname"];
$residencial_address = $getAlls["residencial_address"];
$postal_address = $getAlls["postal_address"];
$place_of_work = $getAlls["place_of_work"];
$home_town = $getAlls["home_town"];
$email = $getAlls["email"];
$telephone = $getAlls["telephone"];
$dob = $getAlls["dob"];
$gender = $getAlls["gender"];
$marital_status = $getAlls["marital_status"];
$contribution_amount = $getAlls["contribution_amount"];
$total_contribution_made = $getAlls["total_contribution_made"];
$last_month_contributed = $getAlls["last_month_contributed"];
$image = $getAlls["image"];
$kin_1_name = $getAlls["kin_1_name"];
$kin_1_mobile = $getAlls["kin_1_mobile"];
$kin_1_percent = $getAlls["kin_1_percent"];
$kin_2_name = $getAlls["kin_2_name"];
$kin_2_mobile = $getAlls["kin_2_mobile"];
$kin_2_percent = $getAlls["kin_2_percent"];
$kin_3_name = $getAlls["kin_3_name"];
$kin_3_mobile = $getAlls["kin_3_mobile"];
$kin_3_percent = $getAlls["kin_3_percent"];
$kin_4_name = $getAlls["kin_4_name"];
$kin_4_mobile = $getAlls["kin_4_mobile"];
$kin_4_percent = $getAlls["kin_4_percent"];
$kin_5_name = $getAlls["kin_5_name"];
$kin_5_mobile = $getAlls["kin_5_mobile"];
$kin_5_percent = $getAlls["kin_5_percent"];
$kin_6_name = $getAlls["kin_6_name"];
$kin_6_mobile = $getAlls["kin_6_mobile"];
$kin_6_percent = $getAlls["kin_6_percent"];
$kin_7_name = $getAlls["kin_7_name"];
$kin_7_mobile = $getAlls["kin_7_mobile"];
$kin_7_percent = $getAlls["kin_7_percent"];
$kin_8_name = $getAlls["kin_8_name"];
$kin_8_mobile = $getAlls["kin_8_mobile"];
$kin_8_percent = $getAlls["kin_8_percent"];
$kin_9_name = $getAlls["kin_9_name"];
$kin_9_mobile = $getAlls["kin_9_mobile"];
$kin_9_percent = $getAlls["kin_9_percent"];
$kin_10_name = $getAlls["kin_10_name"];
$kin_10_mobile = $getAlls["kin_10_mobile"];
$kin_10_percent = $getAlls["kin_10_percent"];
$paid_reg_form = $getAlls["paid_reg_form"];
$has_loan = $getAlls["has_loan"];
$staff = $getAlls["staff"];
$date_created = $getAlls["date_created"];

$fullname = $firstname . " " . $surname;



$noImageForMale = '../../assets/images/customs/male.png';
$noImageForFeMale = '../../assets/images/customs/female.jpg';




$juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$staff' AND active='yes'  LIMIT 1  ");

	$getDem2 = mysqli_fetch_assoc($juju);
	$firstName = $getDem2["firstName"];
	$lastName = $getDem2["lastName"];
	$staffName = $firstName . ' ' . ' ' . ' ' .  $lastName;



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

		$this->Cell(180,10,'MEMBER INFORMATION  |   ' . $member_id ,0,1,'C');
		$this->Cell(180,10,'DATE JOINED  :     ' . $date_created ,0,1,'C');

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


if ($image==="" || $image==="/") {

	if ($gender==="Male") {

		/*------------------PHOTO===========*/
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(45,10,'' ,0,0,'C');
		$pdf->Image($noImageForMale,70,70,60);
		$pdf->Cell(45,10,'' ,0,1,'C');


	} else {
		
		/*------------------PHOTO===========*/
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(45,10,'' ,0,0,'C');
		$pdf->Image($noImageForFeMale,70,70,60);
// $pdf->Cell(90,10,$IDCARD ,0,0,'C');
		$pdf->Cell(45,10,'' ,0,1,'C');


	}
	

} else {

	/*------------------PHOTO===========*/
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,10,'' ,0,0,'C');
	$pdf->Image('../../Datas/members_datas/'.$image,70,70,40);
// $pdf->Cell(90,10,$IDCARD ,0,0,'C');
	$pdf->Cell(45,10,'' ,0,1,'C');

}


$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');
$pdf->Cell(190,10,'' ,0,1,'C');


$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Member ID #', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$member_id, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Name', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$fullname, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Date of Birth', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$dob, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Residential Address', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$residencial_address, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Place of Work', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$place_of_work, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Home Town', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$home_town, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Email', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$email, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Gender', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$gender, 1,1, 'C');



$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Mobile', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$telephone, 1,0, 'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Marital Status', 1,0, 'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(55,10,$marital_status, 1,1, 'C');






if ($kin_1_name!=="" || $kin_1_mobile!=="" || $kin_1_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 1 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_1_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 1 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_1_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 1 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_1_percent . '%', 1,1, 'C');



}





if ($kin_2_name!=="" || $kin_2_mobile!=="" || $kin_2_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 2 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_2_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 2 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_2_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 2 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_2_percent . '%', 1,1, 'C');

}


if ($kin_3_name!=="" || $kin_3_mobile!=="" || $kin_3_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 3 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_3_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 3 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_3_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 3 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_3_percent . '%', 1,1, 'C');

}



if ($kin_4_name!=="" || $kin_4_mobile!=="" || $kin_4_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 4 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_4_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 4 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_4_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 4 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_4_percent . '%', 1,1, 'C');

}




if ($kin_5_name!=="" || $kin_5_mobile!=="" || $kin_5_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 5 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_5_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 5 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_5_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 5 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_5_percent . '%', 1,1, 'C');

}



if ($kin_6_name!=="" || $kin_6_mobile!=="" || $kin_6_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 6 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_6_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 6 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_6_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 6 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_6_percent . '%', 1,1, 'C');

}



if ($kin_7_name!=="" || $kin_7_mobile!=="" || $kin_7_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 7 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_7_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 7 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_7_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 7 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_7_percent . '%', 1,1, 'C');

}



if ($kin_8_name!=="" || $kin_8_mobile!=="" || $kin_8_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 8 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_8_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 8 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_8_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 8 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_8_percent . '%', 1,1, 'C');

}



if ($kin_9_name!=="" || $kin_9_mobile!=="" || $kin_9_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 9 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_9_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 9 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_9_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 9 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_9_percent . '%', 1,1, 'C');

}



if ($kin_10_name!=="" || $kin_10_mobile!=="" || $kin_10_percent!=="") {

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next Of Kin 10 Name', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_10_name, 1,0, 'C');


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 10 Mobile', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_10_mobile, 1,1, 'C');



	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,10,'Next of Kin 10 Percent', 1,0, 'C');

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(55,10,$kin_10_percent . '%', 1,1, 'C');

}




$pdf->Cell(180,10, '',0,1,'C');


$pdf->Cell(10,10, '',1,0,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(180,10, '  I , ' . $fullname . ' Agree to Daakye Welfare Fund Terms and  Conditions ',0,1,'L');
$pdf->Cell(180,10, '',0,1,'C');


$pdf->SetFont('Arial','B',10);

$pdf->Cell(90,10, '......................................',0,0,'L');
$pdf->Cell(90,10, '......................................',0,1,'R');

$pdf->Cell(90,5, $fullname,0,0,'L');
$pdf->Cell(90,5, $staffName,0,1,'R');



$pdf->Output();




?>




