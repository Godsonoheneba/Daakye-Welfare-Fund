<?php 
session_start();


if (!isset($_SESSION["login_session_type"]) ){
	$login_session_type="";

}else{
	$login_session_type = $_SESSION["login_session_type"];
	
}



if (!isset($_SESSION["login_session"]) ){
	$login_session="";

	// logout();

}else{
	$login_session = $_SESSION["login_session"];
	
}




function logout()
{
	if (session_destroy()) {
		?>
		<script type="text/javascript">
			location.replace("login");
			
		</script>
		<?php
	}else{
		session_write_close();
		?>
		<script type="text/javascript">
			location.replace("login");
			
		</script>
		<?php
	}
}

?>




