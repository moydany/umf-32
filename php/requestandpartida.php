
<?php

include("config.php");

$idPartida = $_POST['nopartida'];
$descripcion = $_POST['despartida'];


$query = "insert into partida values ('".$idPartida."','".$descripcion."')";

$resource=mysqli_query($mysqli,$query);

if($resource){
	echo '<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Mensaje Enviado</h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1>¡Listo!</h1>
              <h3>Proveedor Añadido</h3>
              <a class="btn btn-warning btn-big"  href="partidas.php">Regresar a Partidas</a> </div>
          </div>';
}
else{
	
	echo "Error al Añadir Proveedor";
	}
	
	
?>

