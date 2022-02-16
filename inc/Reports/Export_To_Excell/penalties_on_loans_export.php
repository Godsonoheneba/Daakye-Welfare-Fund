<?php 


$EXPORT = $_GET["EXPORT"];
// $fromDate = $_GET["fromDate"];
// $toDate = $_GET["toDate"];

$fromDate = $_GET["MINDATE"];
$toDate = $_GET["MAXDATE"];


$theTyoess = "Penalties_on_Loans";


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
$fields = array('ID', 'FULL NAME','MOBILE','AMOUNT','DATE', 'DONE BY'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 




$selectAllMEmbers = mysqli_query($conn, "SELECT * FROM comp_reve_loan_penalty WHERE active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        ");  



if($selectAllMEmbers->num_rows > 0){ 

    $no=1;
    // Output each row of the data 
    while($getdac = $selectAllMEmbers->fetch_assoc()){ 



     	  $member_id = $getdac["member_id"];
          $amount = number_format($getdac["amount"], 2);
          $date_added = $getdac["date_added"];
          $done_by = $getdac["done_by"];



          $memB = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id'  LIMIT 1 ");
          $memaame = mysqli_fetch_assoc($memB);

          $firstname = $memaame["firstname"];
          $surname = $memaame["surname"];
          $telephone = $memaame["telephone"];
          $persnaNames = $firstname . " " . $surname;


          $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by'  LIMIT 1 ");
          $ahemvals = mysqli_fetch_assoc($staffss);

          $firstName = $ahemvals["firstName"];
          $lastName = $ahemvals["lastName"];
          $staffFullNAme = $firstName . " " . $lastName;


    $lineData = array(

            $no,
            $persnaNames,
            $telephone,
            $amount,
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