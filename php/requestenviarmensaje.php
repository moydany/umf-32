
<?php session_start();

include("config.php");
		
		$asunto  = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

$query = "insert into solicitudes (Fecha,hora,solicitud,mensaje,tbl_members_ID,Estado_idEstado)values (current_date(),current_time(),'".$asunto."','".$mensaje."',
(select id from tbl_members where username = '".$usuario."'),2)";

 $resource=mysqli_query($mysqli,$query);

if($resource){
	echo '<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Mensaje Enviado</h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1>¡Listo!</h1>
              <h3>Su Mensaje Ha sido Enviado</h3>
              <a class="btn btn-warning btn-big"  href="index.php">Regresar a Inicio</a> </div>
          </div>';
}
else{
	
	echo "Error al enviar mensaje";
	}
	
	
?>

