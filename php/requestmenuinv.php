<?php  
include ("config.php");		

$departamento = $_POST['departamento'];

$query = "select departamento.descripcion as Departamento,equipo.nombre as NombreEquipo,departamento_has_equipo.cantidad from departamento_has_equipo inner join departamento on departamento_iddepartamento = iddepartamento inner join equipo on equipo_idequipo = idequipo where departamento.nombre='".$departamento."'";		

echo '<thead><tr><th>Departamento</th><th>Nombre Equipo</th><th>Unidades</th></tr></thead><tbody>';

$resource=mysqli_query($mysqli,$query);
 while($result=mysqli_fetch_array($resource))
	{ 
	echo '<tr><td>'.$result[0].'</td><td>'.$result[1].'</td><td>'.$result[2].'</td></tr>';
	}
	
echo '</tbody></table>';
?>