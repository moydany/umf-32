<?php  
include("config.php");
	
$query = "select nombre from Departamento;";

echo '
<select id="departamento" name="departamento" href="javascript:;" onChange="">';
			  
 $resource=mysqli_query($mysqli,$query);
 while($result=mysqli_fetch_array($resource))
	{ 
 echo '<option value="'.$result[0].'">'.$result[0].'</option>';
	}

echo "</select>"
;
			  
?>