<?php  
			  
include("config.php");
		
	$fluido = $_POST['fluido'];
	
$query = "select periodo.periodo as Periodo,fluido.Nombre as Fluido,periodo.Cantidad as Litros,Medida.nombre as medida from periodo
inner join fluido on Fluido_idFluido = idFluido inner join medida on idMedida = medida_idmedida where fluido.nombre = '".$fluido."' order by periodo desc limit 12";

echo "<table class='table table-bordered'>
              <thead>
                <tr>
                  <th>Periodo</th>
                  <th>Fluido</th>
                  <th>Litros</th>
                  <th>Medida</th>
                </tr>
              </thead>
              <tbody>";
			  
 $resource=mysqli_query($mysqli,$query);
 while($result=mysqli_fetch_array($resource))
	{ 
 echo "<tr><td><center>".$result[0]."</center></td><td><center>".$result[1]."</center></td><td><center>".$result[2]."</center></td><td><center>".$result[3]."</center></td> ";
	}

echo "<div id=tblcont>
              </div>";
			  
?>