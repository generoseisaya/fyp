<?php
	session_start();
	
	unset($_SESSION['username']);
	$_SESSION['message'] = "You are now logged out!";
	header("location: login.php");
session_destroy();
?>
