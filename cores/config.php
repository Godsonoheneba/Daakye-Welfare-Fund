

<?php 

include 'session.php';
include 'strings.php';



// $hostname = "localhost"; // the hostname you created when creating the database
// $username = "u961292822_daakye";      // the username specified when setting up the database
// $password = "b:8/z1Bv>D";      // the password specified when setting up the database
// $database = "u961292822_daakye";      // the database name chosen when setting up the database 



$hostname = "localhost"; // the hostname you created when creating the database
$username = "root";      // the username specified when setting up the database
$password = "";      // the password specified when setting up the database
$database = "daakye";      // the database name chosen when setting up the database 


$conn = mysqli_connect($hostname, $username, $password, $database);

 if ($conn) {
	
 }else{
     
 	logout();
	 header("Location: ../index.php");
	die();
 }





// if (mysqli_connect_errno()) {
//    die("Connect failed: %s\n" + mysqli_connect_error());
//    exit();
// }








?>
