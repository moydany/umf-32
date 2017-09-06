<?php 
include("config.php");
	 

		$query = "select * from partida ;";

 $resource=mysqli_query($mysqli,$query);	

echo "<table class='table table-bordered'> <tbody>";
	while($row=mysqli_fetch_array($resource))
{ 

	
echo "<tr><td>No. Partida :".$row[0]."</td><td> Descripción : ".$row[1]."</td></tr>";
};
echo '</tbody></table>';
						
?> 



