<?php 

// include 'cores/config.php';

function getUniqueID($unique_ref_length,$possible_chars,$unique_ref,$baseTable,$columnName){
	// include('include/dbCon.php');
	//$unique_ref_length = 7;

// include 'cores/config.php';


// A true/false variable that lets us know if we've
// found a unique reference number or not
$unique_ref_found = false;

// Define possible characters.
// Notice how characters that may be confused such
// as the letter 'O' and the number zero don't exist
//$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ";
//$possible_chars = "0123456789";
// Until we find a unique reference, keep generating new ones
while (!$unique_ref_found) {

	// Start with a blank reference number
	//$unique_ref = "";
	//$unique_ref = $congregationID."-";
	// Set up a counter to keep track of how many characters have 
	// currently been added
	$i = 0;
	
	// Add random characters from $possible_chars to $unique_ref 
	// until $unique_ref_length is reached
	while ($i < $unique_ref_length) {
			// Pick a random character from the $possible_chars list
		$char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);
		$unique_ref .= $char;
		$i++;
	}
	
	// Our new unique reference number is generated.
	// Lets check if it exists or not
	  
			  $query = "SELECT * FROM $baseTable WHERE $columnName= '$unique_ref'";
			 //$baseTable,$columnName
			  //echo $query;exit;
			//   $sql_result = $mysqli->query($query);
			// $sql_count  = $sql_result->num_rows;
			$sql_result = mysqli_query($conn,$query);

			$sql_count = mysqli_num_rows($sql_result);

	//$result = mysql_query($query) or die(mysql_error().' '.$query);
	//if (mysql_num_rows($result)==0) {
	if($sql_count ==0){
		// We've found a unique number. Lets set the $unique_ref_found
		// variable to true and exit the while loop
		$unique_ref_found = true;
	
	}	
	

}
	
 return $unique_ref;



$unique_ref_length = 4;
	$possible_chars = "0123456789";
	//$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ";
	$year = substr(date("Y"),-2);
	$month = date("m");
	
	
	$unique_ref = $year."-".$month."-";
	$baseTable="admission_and_discharge_register";
	$columnName="AdmissionID";
	$visit_id =getUniqueID($unique_ref_length,$possible_chars,$unique_ref,$baseTable,$columnName);
	
	echo $visit_id;exit;

}



	
?>