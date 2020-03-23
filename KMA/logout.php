<?php 
	session_destroy();
	unset($_SESSION['name']);
	setcookie("isloggedin","false",time() + (18400 * 30), "/");
	header("Refresh:0; url=login.html");
	
?>
