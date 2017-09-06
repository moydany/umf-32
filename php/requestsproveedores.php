<?php 
include("config.php");
	 

		$query = "select * from proveedor ;";

 $resource=mysqli_query($mysqli,$query);	

echo "<table class='table table-bordered'> <tbody>";
	while($row=mysqli_fetch_array($resource))
{ 

	
echo "<tr><td>Nombre :".$row[1]."</td><td> Domicilio : ".$row[3]."</td><td> Ciudad : ".$row[4]." </td><td> Estado: ".$row[5]." </td><td>RFC: ".$row[6]."</td> <td>Email: ".$row[8]."</td></tr>";
};
echo '</tbody></table>';
						
?> 



