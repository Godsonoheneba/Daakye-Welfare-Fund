<?php 


$EXPORT = $_GET["EXPORT"];
// $fromDate = $_GET["fromDate"];
// $toDate = $_GET["toDate"];

$fromDate = $_GET["MINDATE"];
$toDate = $_GET["MAXDATE"];


$theTyoess = "Loans_Interes";


// Load the database configuration file 
include_once '../../../cores/config.php'; 
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = $theTyoess ." - " . $fromDate . " - ". $toDate.".xls"; 
 


// Column names 
$fields = array('ID', 'FULL NAME', 'INTEREST AMOUNT ', 'PURPOSE', 'DATE', 'DONE BY'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 


 $purpose1 = "Loan Interest";
$purpose2 = "Loans Interest Paid by the Guarantors";
$purpose3 = "Loan Interest and Penalty Interest";



$selectLoansPayyyy = mysqli_query($conn, "SELECT * FROM company_revenue WHERE ( purpose='$purpose1' OR purpose='$purpose2' OR purpose='$purpose3' ) AND active='yes'  AND 
    date_added
    BETWEEN '$fromDate' AND '$toDate'
    ORDER BY id DESC 

    "); 



if($selectLoansPayyyy->num_rows > 0){ 

    $no=1;
    // Output each row of the data 
    while($getdac = $selectLoansPayyyy->fetch_assoc()){ 

    $person_id = $getdac["person_id"];
    $amount = number_format($getdac["amount"], 2);
    $date_added = $getdac["date_added"];
    $done_by = $getdac["done_by"];
    $loan_id = $getdac["loan_id"];
    $thePrup = $getdac["purpose"];


    $amount = str_replace("-", "", $amount);

    // $loanIDD = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id' AND active='yes' LIMIT 1 ");

    $loanIDD = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id'  LIMIT 1 ");


    $llI = mysqli_fetch_assoc($loanIDD);

    $status = $llI["status"];


    if ($status==="Member") {
        $memB = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id'  LIMIT 1 ");
        $memaame = mysqli_fetch_assoc($memB);

        $Tabid = $memaame["id"];
        $firstname = $memaame["firstname"];
        $surname = $memaame["surname"];
        $persnaNames = $firstname . " " . $surname;
    } else {
        $memB = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id'  LIMIT 1 ");
        $memaame = mysqli_fetch_assoc($memB);

        $Tabid = $memaame["id"];
        $firstname = $memaame["firstname"];
        $surname = $memaame["surname"];
        $persnaNames = $firstname . " " . $surname;
    }

    $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by'  LIMIT 1 ");
    $ahemvals = mysqli_fetch_assoc($staffss);

    $firstName = $ahemvals["firstName"];
    $lastName = $ahemvals["lastName"];
    $staffFullNAme = $firstName . " " . $lastName;




    if ($thePrup==$purpose1) {
    
    $purposeText = "Loan Interest";
} 

if ($thePrup==$purpose2) {
    
    $purposeText = " Interest Paid by the Guarantors";
} 


if ($thePrup==$purpose3) {
    
    $purposeText = "Loan Interest and Penalty Interest";
}


    $lineData = array(

            $no,
            $persnaNames,
            $amount,
            $purposeText,
            $date_added,
            $staffFullNAme

        );
        $no++;


        // $lineData = array($row['id'], $row['firstname'], $row['surname'], $row['email'], $row['gender'], $row['telephone'], $row['telephone'], $activeee); 

        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;