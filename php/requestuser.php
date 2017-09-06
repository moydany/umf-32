<?php session_start();
if(isset($_SESSION['userName']))
	 {	
	  
	  echo ' '.$_SESSION['userName'].'';
	  
	 }
	 else
	 {
	  
	  echo' Iniciar Sesión';
	  
	 }
?> 


