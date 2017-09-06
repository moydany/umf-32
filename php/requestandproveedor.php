
<?php

include("config.php");

			echo ($idProveedor = $_POST['idProveedor']);
			echo ($Nombre = $_POST['Nombre']);
			echo ($Representante = $_POST['Representante']);
			echo ($Domicilio = $_POST['Domicilio']);
			echo ($Ciudad = $_POST['Ciudad']);
			echo ($Estado = $_POST['Estado']);
			echo ($RFC = $_POST['RFC']);
			echo ($Telefono = $_POST['Telefono']);
			echo ($Email = $_POST['Email']);
			echo ($Codpostal = $_POST['Codpostal']);


$query = "insert into proveedor (idProveedor,Nombre,Representante,Domicilio,Ciudad,Estado,RFC,Telefono,Email,Codpostal) values ('".$idProveedor."','".$Nombre."','".$Representante."','".$Domicilio."','".$Ciudad."','".$Estado."','".$RFC."','".$Telefono."','".$Email."','".$Codpostal."')";



 $resource=mysqli_query($mysqli,$query);

if($resource){
	echo '<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Mensaje Enviado</h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1>¡Listo!</h1>
              <h3>Proveedor Añadido</h3>
              <a class="btn btn-warning btn-big"  href="proveedores.php">Regresar a Proveedores</a> </div>
          </div>';
}
else{
	
	echo "Error al Añadir Proveedor";
	}
	
	
?>

