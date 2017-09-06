<?php
$db_username = 'root';
	$db_password = '1234';
	$db_name = 'login';
	$db_host = 'localhost';
	$mysqli = mysqli_connect($db_host, $db_username, $db_password,$db_name);
	
	function secure($str,$sqlHandle)
	{
		$secured = strip_tags($str);
		$secured = htmlspecialchars($secured);
		$secured = mysqli_real_escape_string($sqlHandle,$secured);
		
		return $secured;
	}
?>