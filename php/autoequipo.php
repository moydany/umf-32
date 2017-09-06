<?php
include ("config.php");	

$searchTerm = $_GET['term'];
$query = "SELECT * FROM equipo WHERE nombre LIKE '%".$searchTerm."%' ORDER BY nombre ASC";

$resource=mysqli_query($mysqli,$query);
while($result=mysqli_fetch_array($resource))
	{
 $data[] = $result[1];
}

echo json_encode($data);
?>