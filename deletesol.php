<?php  
include ("config.php");		


$id = $_GET['id'];
$query = "delete from solicitudes where idSolicitud = '".$id."';";		

$resource=mysqli_query($mysqli,$query);
if($resource){
	
	echo 'good';
	//header("Location:requestsolicitudes.php");
}		
?>