<?php 


$EXPORT = $_GET["EXPORT"];
// $fromDate = $_GET["fromDate"];
// $toDate = $_GET["toDate"];

$fromDate = $_GET["MINDATE"];
$toDate = $_GET["MAXDATE"];


$theTyoess = "Contributions_Payments";


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
$fields = array('ID', 'MEMBER ID', 'FULL NAME','MOBILE','AMOUNT','MONTH','YEAR', 'DATE', 'DONE BY'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 


$selectAllMEmbers = mysqli_query($conn, "SELECT * FROM members_contributions WHERE 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        ");  



if($selectAllMEmbers->num_rows > 0){ 

    $no=1;
    // Output each row of the data 
    while($getdac = $selectAllMEmbers->fetch_assoc()){ 



     	  $Tabid = $getdac["id"];
          $member_id = $getdac["member_id"];
          $member_id_encrypt = $getdac["member_id_encrypt"];
          $year = $getdac["year"];
          $month = $getdac["month"];
          $amount = $getdac["amount"];
          $receipt_number = $getdac["receipt_number"];
          $date_paid = $getdac["date_paid"];
          $date_created = $getdac["date_created"];
          $done_by = $getdac["done_by"];


          $selectst = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND staffID='$done_by' ");

          $getdac2 = mysqli_fetch_assoc($selectst);

          $id = $getdac2["id"];
          $firstName = $getdac2["firstName"];
          $lastName = $getdac2["lastName"];

          $staffName = $firstName . " " . $lastName;



          $selectst2 = mysqli_query($conn, "SELECT * FROM members WHERE  member_id_encrypt='$member_id_encrypt' ");

          $getdac3 = mysqli_fetch_assoc($selectst2);

          $id = $getdac3["id"];
          $member_id = $getdac3["member_id"];
          $member_id_encrypt = $getdac3["member_id_encrypt"];
          $firstname = $getdac3["firstname"];
          $surname = $getdac3["surname"];
          $telephone = $getdac3["telephone"];

          $memberName = $firstname . " " . $surname;


    $lineData = array(

            $no,
            $member_id,
            $memberName,
            $telephone,
            $amount,
            $month,
            $year,
            $date_created,
            $staffName
      

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