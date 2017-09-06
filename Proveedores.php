<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="js/jquery-ui.css">
  	<script src="js/jquery-1.10.2.js"></script>
 	<script src="js/jquery-ui.js"></script>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i><span id="usuario" class="text"> Hey </span><b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a href="perfil.php"><i class="icon-user"></i> Perfil</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> Tareas</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Salir</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Mensajes</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> Nuevo Mensaje</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> Entrada</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> Salida</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> Papelera</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Ajustes</span></a></li>
    <li><a href="Logout.php"><em class="icon icon-share-alt"></em> <span class="text">Salir</span></a></li>
  </ul>
</div>

<script>

function andproveedor(idProveedor,Nombre,Representante,Domicilio,Ciudad,Estado,RFC,Telefono,Email,Codpostal){
        var proveedor = {
			"idProveedor" : idProveedor,
			"Nombre" : Nombre,
			"Representante" : Representante,
			"Domicilio" : Domicilio,
			"Ciudad" : Ciudad,
			"Estado" : Estado,
			"RFC" : RFC,
			"Telefono" : Telefono,
			"Email" : Email,
			"Codpostal" : Codpostal
 };
	
        $.ajax({
                data:  proveedor,
                url:   'php/requestandproveedor.php',
                type:  'post',
                success:  function(opt1) {

				$("#tab2").html(opt1);
                }
        });
};

	
window.onload = function usuario(){
		
		$.ajax({
                data:  "",
                url:   'php/requestuser.php',
                type:  'post',
                success:  function (user) {
	
				$("#usuario").html(user);
                }
        });
				$.ajax({
                data:  "",
                url:   'php/requestsproveedores.php',
                type:  'post',
                success:  function (datos) {

				$("#solicitudes").html(datos);
                }
        });
		
	
	
};
		

	

		
</script>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Busqueda"/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Inicio</span></a> </li>
    <li> <a href="Fluidos.php"><i class="icon icon-tint"></i> <span>Fluidos y Energeticos</span></a> </li>
    <li><a href="bajas.php"><i class="icon-wrench"></i> <span>Baja de Equipos</span></a></li>
    <li></li>
    </li>
    <li><a href="inventarios.php"><i class="icon-book"></i> <span>Inventarios</span></a></li>
        
           <li><a href="Proveedores.php"><i class="icon-truck"></i> <span>proveedores</span></a></li>
           
                <li><a href="Partidas.php"><i class="icon-shopping-cart"></i> <span>Partidas</span></a></li>
               
                 <li><a href="contratos.php"><i class="icon-list-alt"></i> <span>Contratos</span></a></li>
                 
	
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="current">Proveedores</a> </div>
    <h1>Proveedores</h1>
  </div>
  
<!--Opciones-->
	<div class="widget-box">
	<div class="widget-title"> 
  	<a href="#collapseTwo" data-toggle="collapse"> <span class="icon"><i class="icon-chevron-down"></i>
  	</span><h5>Opciones</h5></a> 
	</div>
    
<div class="collapse" id="collapseTwo">
<div class="controls">
<div class="widget-box">
		<div class="widget-title">
<ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Buscar</a></li>
              <li><a data-toggle="tab" href="#tab2">Añadir Proveedor</a></li>
            </ul>
        </div>
<div class="widget-content tab-content">
<div id="tab1" class="tab-pane active">
    
<table class="table table-bordered">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
<td>RFC Proveedor</td><td><input type="text" value="Ingrese Número de RFC"></td><td><button href="#" type="submit" class="btn btn-success">Buscar</button></td>
</tr>
<tr>
<td>Nombre Proveedor</td><td><input type="text" value="Ingrese Nombre de Proveedor"></td><td><button href="#" type="submit" class="btn btn-success">Buscar</button></td>

                  </tr>
            </tbody>
</table>
            </div>
<div id="tab2" class="tab-pane">
    
<table class="table table-bordered">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
<td>Número de Proveedor</td><td><input type="number" id="idProveedor" name="idProveedor"></td>
</tr>
<tr>
<td>Nombre</td><td><input type="text" id="Nombre" name="Nombre"></textarea></td>
</tr>
<tr>
<td>Representante</td><td><input type="text" id="Representante" name="Representante"></td>
</tr>
<tr>
<td>Estado</td><td><select id="Estado" name="Estado">
  						<option value="Aguascalientes">Aguascalientes</option>
 					    <option value="Baja California">Baja California</option>
 					    <option value="Baja California Sur">Baja California Sur</option>
 					    <option value="Campeche">Campeche</option>
 					    <option value="Ciudad de México">Ciudad de México</option>
 					    <option value="Coahuila">Coahuila</option>
 					    <option value="Colima">Colima</option>
 					    <option value="Chiapas">Chiapas</option>
 					    <option value="Chihuahua">Chihuahua</option>
 					    <option value="Durango">Durango</option>
 					    <option value="Guanajuato">Guanajuato</option>
 					    <option value="Guerrero">Guerrero</option>
 					    <option value="Hidalgo">Hidalgo</option>
 					    <option value="Jalisco">Jalisco</option>
 					    <option value="México">México</option>
 					    <option value="Michoacán">Michoacán</option>
 					    <option value="Morelos">Morelos</option>
 					    <option value="Nayarit">Nayarit</option>
 					    <option value="Nuevo León">Nuevo León</option>
 					    <option value="Oaxaca">Oaxaca</option>
 					    <option value="Puebla">Querétaro</option>
 					    <option value="Quintana Roo">Quintana Roo</option>
 					    <option value="San Luis Potosí">San Luis Potosí</option>
 					    <option value="Sinaloa">Sinaloa</option>
 					    <option value="Sonora">Sonora</option>
 					    <option value="Tabasco">Tabasco</option>
 					    <option value="Tamaulipas">Tamaulipas</option>
 					    <option value="Tlaxcala">Tlaxcala</option>
 					    <option value="Veracruz">Veracruz</option>
 					    <option value="Yucatán">Yucatán</option>
 					    <option value="Zacatecas">Zacatecas</option>
 					    
 					    
					   </select></td>
</tr>
<tr>
<td>Codigo Postal</td><td><input type="number" id="Codpostal" name="Codpostal"></td>
</tr>
<tr>
<td>Domicilio</td><td><textarea class="" id="Domicilio" name="Domicilio"></textarea></td>
</tr>
<tr>
<td>Ciudad</td><td><input type="text" id="Ciudad" name="Ciudad"></td>
</tr>
<tr>
<td>RFC</td><td><input type="text" id="RFC" name="RFC"></td>
</tr>
<tr>
<td>Telefono</td><td><input type="number" id="Telefono" name="Telefono"></td>
</tr>
 <tr>
<td>Email</td><td><input type="email" id="Email" name="Email"></td>
</tr>
           
            </tbody>
</table>
           
<button href="javascript:;" type="Button" class="btn btn-success" onClick="andproveedor($('#idProveedor').val(),$('#Nombre').val(),$('#Representante').val(),$('#Domicilio').val(),$('#Ciudad').val(),$('#Estado').val(),$('#RFC').val(),$('#Telefono').val(),$('#Email').val(),$('#Codpostal').val());return false;">Enviar</button>
           
        </div>
        </div>    
		</div>
       	</div>
		</div>
		
		            <div id="solicitudes" class="recent-posts">
 <div class="widget-content nopadding">
            <div id="solicitudes" class="recent-posts">
            
		</div>
            

<!--/Opciones-->
  
			<div class="widget-box span12">
<div class="widget-content nopadding">
      <table class="table table-bordered" id="tablainv">
              
            </table>
					</div>
				</div>
			</div>

<!--main-container-part-->

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; <a href="http://thequantumbox.com">The Quantum Box</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
