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
 $(function() {
    $( "#equipo1" ).autocomplete({
        source: 'php/autoequipo.php'
    });
 });

function inventario(departamento){
        var opts = {
				 "departamento" : departamento
        };
        $.ajax({
                data:  opts,
                url:   'php/requestmenuinv.php',
                type:  'post',
                success:  function (opt) {

				$("#tablainv").html(opt);
                }
        });
};

function anainv(departamento1,equipo1,cantidad1){
        var optss = {
				 "departamento1" : departamento1,
				 "equipo1" : equipo1,
				 "cantidad1" : cantidad1
        };
        $.ajax({
                data:  optss,
                url:   'php/requestmenuinv1.php',
                type:  'post',
                success:  function (opt1) {

				$("#resultado1").html(opt1);
                }
        });
};

function fanequipo(anequipo){
        var optsss = {
				 "anequipo" : anequipo
        };
        $.ajax({
                data:  optsss,
                url:   'php/anequipo.php',
                type:  'post',
                success:  function (opt3) {

				$("#resultado").html(opt3);
                }
        });
};

function fandepa(depanom,depades){
        var optssss = {
				 "depanom" : depanom,
				 "depades" : depades
        };
        $.ajax({
                data:  optssss,
                url:   'php/andepa.php',
                type:  'post',
                success:  function (opt2) {

				$("#resultado3").html(opt2);
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
                url:   'php/requestproveedores.php',
                type:  'post',
                success:  function (combo) {

				$("#Proveedor,#Proveedor2").html(combo);
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
    <div id="breadcrumb"> <a href="index.html" title="Ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="current">Contratos</a> </div>
    <h1>Contratos</h1>
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
              <li><a data-toggle="tab" href="#tab2">Nuevo Contrato</a></li>
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
<td>Número de Contrato</td><td><input type="text" value="Ingrese Número de Contrato"></td><td><button href="#" type="submit" class="btn btn-success">Buscar</button></td>
</tr>
<tr>
<td>Proveedor</td><td><input type="text" value="Ingrese Nombre de Proveedor"></td><td><button href="#" type="submit" class="btn btn-success">Buscar</button></td>

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
<td>Número de Contrato</td><td><input type="text"></td>
</tr>
<tr>
<td>Descripción</td><td><textarea class="" id="mensaje" name="mensaje"></textarea></td>
<tr>
<td>Proveedor</td><td>
			<select id="Proveedor" name="Proveedor" href="javascript:;" onChange="inventario($('#departamento').val());return false;">
				</select></td></td></tr>
<td>Archivo (Contrato) </td><td><input type="file" name="image" id="image" required /></td></td></tr>
            </tbody>
</table>
<button href="#" type="submit" class="btn btn-success">Añadir</button>
            </div>
            
        </div>    
		</div>
       	</div>
		</div>
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
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
