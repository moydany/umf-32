<?php  

include ("config.php");		

$nombre= $_POST['depanom'];
$descripcion= $_POST['depades'];

$query = "insert into departamento (nombre,descripcion) values ('".$nombre."','".$descripcion."')";		

if($resource=mysqli_query($mysqli,$query))
{
	echo "".$nombre." con descripción ".$descripcion." Añadido";
}

?>