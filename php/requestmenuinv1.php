<?php  
include ("config.php");		

$departamento = $_POST['departamento1'];
$equipo = $_POST['equipo1'];
$cantidad =$_POST['cantidad1'];

$query = "insert into departamento_has_equipo (departamento_iddepartamento,equipo_idequipo,cantidad) values 
((select iddepartamento from departamento where departamento.nombre = '".$departamento."'),(select idequipo from equipo where equipo.nombre ='".$equipo."'),'".$cantidad."')";		

$resource=mysqli_query($mysqli,$query);

echo "".$equipo." ".$cantidad." Añadidos";

?>