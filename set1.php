<?php  
include ("config.php");		


$id = $_GET['id'];
$query = "update solicitudes set estado_idEstado = '1' where idSolicitud = '".$id."';";		

$resource=mysqli_query($mysqli,$query);
if($resource){
	
	echo 'good';
	//header("Location:requestsolicitudes.php");
}		
?>