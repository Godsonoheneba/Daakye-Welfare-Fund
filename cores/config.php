<?php 

include 'session.php';
include 'strings.php';




// $hostname = "mysql.daakyewelfare.com"; // the hostname you created when creating the database
// $username = "dh_q8wznj";      // the username specified when setting up the database
// $password = "#Daa$_kye*";      // the password specified when setting up the database
// $database = "daakyewelfare_db";      // the database name chosen when setting up the database 

// $conn = mysqli_connect($hostname, $username, $password, $database);
// if (mysqli_connect_errno()) {
//    die("Connect failed: %s\n" + mysqli_connect_error());
//    exit();
// }








$conn=mysqli_connect("localhost", "root", "");
if (!$conn) {
	?>
	<script type="text/javascript"> alert('Sorry there was an error, contact the technicians for fixing.');</script>
	<?php
	logout();

	
}



 

if (!mysqli_select_db($conn, "daakye")) 
{
	?>
	<script type="text/javascript">
		alert('Sorry there was an error, contact the technicians for fixing.');
	</script>
	<?php
	logout(); 
}


?>
