<?php  
include("config.php");
	
$query = "select idPartida from Partida;";

echo '<select id="nopartida" name="nopartida" href="javascript:;" onChange="">';
 echo '<option value=""></option>';  
 $resource=mysqli_query($mysqli,$query);
 while($result=mysqli_fetch_array($resource))
	{ 
 echo '<option value="'.$result[0].'">'.$result[0].'</option>';
	}

echo "</select>"
;
			  
?>