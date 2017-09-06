<?php 
include("config.php");
	 

		$query = "select * from baja inner join descripcion on Baja_idBaja = idBaja ;";

 $resource=mysqli_query($mysqli,$query);	
	while($row=mysqli_fetch_array($resource))
{ 
 
echo "<table class='table table-bordered'> <tbody>";
	
echo "<tr><td>Nombre :".$row[4]."</td><td> Fecha : ".$row[2]."</td><td> Expediente : ".$row[2]." </td><td> Solicitante: ".$row[14]." </td><td>
<a href='http://localhost/Web%20Projects/Matrix%20Admin/bajasconsulta.php?id=".$row[0]."' class='btn btn-success btn-mini'>	Ver	</a> </td></tr>";

};
echo '</tbody></table>';
						
?> 



