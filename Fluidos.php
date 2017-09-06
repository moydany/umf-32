<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

  <link href="chartist/chartist.min.css" rel="stylesheet" type="text/css" />
</head>
<body>


<script>

function realizaProceso(desde,hasta){
        var parametros = {
				 "desde" : desde,
				 "hasta" : hasta
        };
        $.ajax({
                data:  parametros,
                url:   'php/requestfluidos.php',
                type:  'post',
                success:  function (datos) {

				$("#Tabla").html(datos);
                }
        });
};

function tabla(fluido){
        var parametros = {
                "fluido" : fluido
        };
        $.ajax({
                data:  parametros,
                url:   'php/requestfluidos1.php',
                type:  'post',
                success:  function (fluid) {
						
						
				$("#Tabla").html(fluid);
                }
        });
};
	
function usuario(){

	
var data = {
  labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    series: [
    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8]
  ]
};

var options = {
  seriesBarDistance: 10
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('.ct-chart', data, options, responsiveOptions);

		
		$.ajax({
                data:  "",
                url:   'php/requestuser.php',
                type:  'post',
                success:  function (user) {
	
				$("#usuario").html(user);
                }
        })

		$.ajax({
                data:  "",
                url:   'php/requestfluidos2.php',
                type:  'post',
                success:  function (agua) {

				$("#Tabla").html(agua);
                }
        })
			
		
};

window.onload = usuario;



</script>

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
<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a><a href="index.html" class="current">Fluidos y Energeticos</a> </div>
</div>


  <div class="row-fluid">
    <div class="">

      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Fluidos y Energeticos</h5>
        </div>

<div class="widget-title"> 
  <a href="#collapseTwo" data-toggle="collapse"> <span class="icon"><i class="icon-chevron-down"></i>
  </span><h5>Opciones</h5></a> 
        
      </div>
        <div class="collapse" id="collapseTwo">
        <br>
<div class="controls span12">

<label class="control-label">Fluidos :</label>
              <div class="controls">
                <select multiple >
                  <option selected>Agua</option>
                  <option>Gas</option>
                  <option>Diesel</option>
                  <option>Electricidad</option>
                  <option>Oxigeno</option>
                </select>
				</div>
            

<strong>Desde:  </strong>  <div class="controls"> <input type="date" name="desde" id="desde" data-date="2016-01-01" data-date-format="yyyy-mm-dd" value="2016-01-01" class="datepicker">
</div>

<strong>hasta:  </strong>  <div class="controls"> <input type="date" name="hasta" id="hasta" data-date="2016-01-01" data-date-format="yyyy-mm-dd" value="2016-01-01" class="datepicker">
              </div>

<button type="button" class="btn btn-success" onclick=	"realizaProceso($('#desde').val(),$('#hasta').val());return false;">Buscar</button>
<button type="submit" class="btn btn-info">Reporte</button>
              <button type="submit" class="btn btn-danger">Resetear</button>
              
                </div>
			</div>
		</div>
	</div>
</div>


<div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" onclick="tabla($('#Agua').val='Agua');return false;" href="javascript:;">Agua</a></li>
              <li><a data-toggle="tab" id="Gas" onclick="tabla($('#Gas').val='Gas');return false;" href="javascript:;">Gas</a></li>
              <li><a data-toggle="tab" onclick="tabla($('#Diesiel').val='Diesel');return false;" href="javascript:;" id="Diesel">Diesel</a></li>
              
              <li><a data-toggle="tab" id="Electricidad" onclick="tabla($('#Electricidad').val='Energia');return false;" href="javascript:;">Electricidad</a></li>
              
              <li><a data-toggle="tab" id="Oxigeno" onclick="tabla($('#Oxigeno').val='Oxigeno');return false;" href="javascript:;">Oxigeno</a></li>
            </ul>
          </div>
         
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
            
            <div id="Tabla" class="tab-pane active">
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Periodo</th>
                  <th>Fluido</th>
                  <th>Litros</th>
                  <th>Medida</th>
                </tr>
            </thead>
                <tbody>

				</tbody>
            </table>
				</div> 
                
                 <div class="ct-chart"></div>
                            
			</div>
		</div>
	</div>	
    

</div>				

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; <a href="http://thequantumbox.com">The Quantum Box</a> </div>
</div>

<!--end-Footer-part--> 
<script src="chartist/chartist.min.js"></script>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
