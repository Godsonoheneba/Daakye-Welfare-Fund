<?php 


$EXPORT = $_GET["EXPORT"];
// $fromDate = $_GET["fromDate"];
// $toDate = $_GET["toDate"];

$fromDate = $_GET["MINDATE"];
$toDate = $_GET["MAXDATE"];


$theTyoess = "Loans_Payment";


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
$fields = array('ID', 'FULL NAME', 'AMOUNT COLLECTED', 'AMOUNT PAID', 'BALANCE BEFORE', 'MONTH', 'YEAR',  'STATUS',  'RECEIPT NO.',  'DATE', 'DONE BY'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $conn->query("SELECT * FROM members ORDER BY id ASC"); 

 $selectLoansPayyyy = mysqli_query($conn, "SELECT * FROM loans_pay WHERE active='yes' AND
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 

if($selectLoansPayyyy->num_rows > 0){ 

    $no=1;
    // Output each row of the data 
    while($getdac = $selectLoansPayyyy->fetch_assoc()){ 


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


        // $activeee = ($row['active'] == 'yes')?'Active':'Inactive'; 


    $lineData = array(

            $no,
            $persnaNames,
            $amount_collected,
            $amount_paid,
            $balance_before,
            $month,
            $year,
            $status,
            $receipt_no,
            $date_paid,
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