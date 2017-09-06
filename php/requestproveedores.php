<?php  
include("config.php");
	
$query = "select idProveedor,Nombre from Proveedor;";

echo '
<select id="Proveedor" name="Proveedor" href="javascript:;" onChange="">';
		 echo '<option value=""></option>';	  
 $resource=mysqli_query($mysqli,$query);
 while($result=mysqli_fetch_array($resource))
	{ 
 echo '<option value="'.$result[0].'">'.$result[1].'</option>';
	}

echo "</select>"
;
			  
?>