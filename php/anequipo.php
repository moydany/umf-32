<?php  
include ("config.php");		

$equipo= $_POST['anequipo'];
$query = "insert into equipo (nombre) values ('".$equipo."')";		
$resource=mysqli_query($mysqli,$query);

echo "".$equipo." Añadido";
?>