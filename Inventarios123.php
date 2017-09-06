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
    <script src="js/jquery.tabledit.min.js"></script>
    <script src="js/jquery.tabledit.js"></script>
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
 
$('#tablainv').Tabledit({
    url: 'php/example.php',
    eventType: 'dblclick',
    editButton: false,
    columns: {
        identifier: [0, 'idequipo'],
        editable: [[1, 'Nombre']]
    }
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
                url:   'php/requestdepartamentos.php',
                type:  'post',
                success:  function (combo) {

				$("#departamento,#departamento1").html(combo);
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
    <li> <a href="htmls/presupuesto.php"><i class="icon icon-signal"></i> <span>Control Presupuestal</span></a> </li>
    <li> <a href="Fluidos.php"><i class="icon icon-tint"></i> <span>Fluidos y Energeticos</span></a> </li>
    <li><a href="#"><i class="icon-wrench"></i> <span>Mantenimiento Preventivo</span></a></li>
    <li><a href="#"><i class="icon-cogs"></i> <span>Equipo Medico</span></a></li>
    <li class="submenu"> <a href="htmls/fluidos.php"><i class="icon-bar-chart"></i> <span>Informe Mensual</span> </a>
      <ul>
        <li><a href="htmls/form-common.html">Basic Form</a></li>
        <li><a href="htmls/form-validation.html">Form with Validation</a></li>
        <li><a href="htmls/form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="inventarios.php"><i class="icon-book"></i> <span>Inventarios</span></a></li>
    <li><a href="#"><i class="icon-truck"></i> <span>Solicitud de Insumos</span></a></li>
   <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>PIPCS</span> </a>
      <ul>
        <li><a href="#">Dashboard2</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Calendar</a></li>
        <li><a href="#">Invoice</a></li>
        <li><a href="#">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Información</span> </a>
      <ul>
        <li><a href="#">Error 403</a></li>
        <li><a href="#">Error 404</a></li>
        <li><a href="#">Error 405</a></li>
        <li><a href="htmls/error500.html">Error 500</a></li>
      </ul>
    </li>	
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="current">Inventarios</a> </div>
    <h1>Inventarios</h1>
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
              <li><a data-toggle="tab" href="#tab2">Añadir A Inv.</a></li>
              <li><a data-toggle="tab" href="#tab3">Equipo</a></li>
              <li><a data-toggle="tab" href="#tab4">Departamento</a></li>
            </ul>
        </div>
                 <div class="widget-content tab-content">
<div id="tab1" class="tab-pane active">
    
    <label id="combo" class="control-label">
                Departamento :
                <select id="departamento" name="departamento" href="javascript:;" onChange="inventario($('#departamento').val());return false;">
				</select>
           	  </label>
				<label class="control-label">
                Equipo :
                <input type="text" id="Objeto" value="Buscar ">
            	</label>

<button type="button" class="btn btn-success" onClick="inventario($('#departamento').val());return false;">Buscar</button>
 
   
            </div>
<div id="tab2" class="tab-pane">
    
    <label class="control-label">
                Departamento :
                <select id="departamento1" name="departamento1" href="javascript:;" onChange="">
				</select>
           	  </label>
                
			  <label class="control-label">
                Equipo :
                <input type="text" id="equipo1" name="equipo1" value="Buscar ">
            	</label>
                
                <label class="control-label">
                Cantidad :
                <input type="text" id="cantidad1" name="cantidad1" value="0 ">
            	</label>

<button type="button" class="btn btn-success" onClick="anainv($('#departamento1').val(),$('#equipo1').val(),$('#cantidad1').val());return false;">Añadir</button>

<span id="resultado1"></span> 
            </div>
            
<div id="tab3" class="tab-pane">
       <label class="control-label">
        Nombre Equipo:
        <input type="text" id="anequipo" name="anequipo">
    	</label>
    
<button type="button" class="btn btn-success" onclick="fanequipo($('#anequipo').val());return false;">Añadir</button>

<span id="resultado"></span> 
            </div>

<div id="tab4" class="tab-pane">
       <label class="control-label">
        Nombre Departamento:
        <input type="text" id="depanom">
    	</label>
		<label class="control-label">
        Descripción :
        <input type="text" id="depades">
    	</label>
    
<button type="button" class="btn btn-success" onclick="fandepa($('#depanom').val(),$('#depades').val());return false;">Añadir</button>
<span id="resultado3"></span> 

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
              <?php  
			  
include("php/config.php");
		
$query = "select * from Equipo;";

echo "<thead>
                <tr>
                  <th>id</th>
                  <th>Equipo</th>
                </tr>
              </thead>
              <tbody>";
			  
 $resource=mysqli_query($mysqli,$query);
 while($result=mysqli_fetch_array($resource))
	{ 
 echo "<tr><td><center>".$result[0]."</center></td><td><center>".$result[1]."</center></td> ";
	}

echo "<div id=tblcont>
              </div>";
			  
?>
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
