<?php session_start();
if(isset($_SESSION['userName']))
	 {	

	 }
	 else
	 {
		
		echo 'header("Location:loginstart.php")';
			
	 }
?> 
