<?php 


include '../../../cores/config.php';


require('../../../fpdf/fpdf.php');


$MALE = $_GET["MALE"];
$FEMALE = $_GET["FEMALE"];
$TOTAL = $_GET["TOTAL"];
$MINDATE = $_GET["MINDATE"];
$MAXDATE = $_GET["MAXDATE"];

$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];




class PDF extends FPDF {
	function Header(){

		global $MALE;
		global $FEMALE;
		global $TOTAL;
		global $MINDATE;
		global $MAXDATE;
		global $letterhead;

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

		$this->Cell(270,10,'ACTIVE MEMBERS LIST FROM       ' . $MINDATE . '      TO         ' . $MAXDATE ,0,1,'C');
		

		$this->SetFont('Arial','B',9);

		
		$this->SetFont('Arial','B',9);

		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(30,10,'ID',1,0,'C',true);
		$this->Cell(70,10,'Name',1,0,'C',true);
		$this->Cell(25,10,'Date Of Birth',1,0,'C',true);
		$this->Cell(25,10,'Mobile',1,0,'C',true);
		$this->Cell(20,10,'Gender',1,0,'C',true);
		$this->Cell(30,10,'Residence',1,0,'C',true);
		$this->Cell(40,10,'Contribution Made',1,0,'C',true);
		$this->Cell(35,10,'Date Join',1,1,'C',true);


		
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



$selectCust = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' ORDER BY id DESC ");

while ( $getAlls = mysqli_fetch_assoc($selectCust)) {

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

	$getShortName = substr($firstname, 0,1);


	$pdf->Cell(30,10,$member_id, 1,0, 'C');
	$pdf->Cell(70,10,$fullname, 1,0, 'C');
	$pdf->Cell(25,10,$dob, 1,0, 'C');
	$pdf->Cell(25,10,$telephone, 1,0, 'C');
	$pdf->Cell(20,10,$gender, 1,0, 'C');
	$pdf->Cell(30,10,$residencial_address, 1,0, 'C');
	$pdf->Cell(40,10,number_format($total_contribution_made,2), 1,0, 'C');
	$pdf->Cell(35,10,$date_created, 1,1, 'C');


}



$pdf->SetFont('Arial','B',14);
$pdf->Cell(275,10, ' # MALE:  ' .$MALE . '       |    # FEMALE :  ' . $FEMALE .  '       |     TOTAL # :  ' . $TOTAL, 1,1, 'C');


$pdf->Output();




?>