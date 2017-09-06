<?php session_start();
	session_destroy();
	header("Location:loginStart.php");
	exit; ?>