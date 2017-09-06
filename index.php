
<html lang="en">
<head>
<title>Fluidos y Energeticos</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="htmls/css/bootstrap.min.css" />
<link rel="stylesheet" href="htmls/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="htmls/css/fullcalendar.css" />
<link rel="stylesheet" href="htmls/css/matrix-style.css" />
<link rel="stylesheet" href="htmls/css/matrix-media.css" />
<link href="htmls/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="htmls/css/jquery.gritter.css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css">
</head>
<body id="body">

<script>

function usuario(){
        
		$.ajax({
                data:  "",
                url:   'php/requestuser.php',
                type:  'post',
                success:  function (user) {
	
				$("#usuario").html(user);
                }
        });
};

window.onload = usuario;

setInterval(function prueba(){
        
		$.ajax({
                data:  "",
                url:   'php/requestsolicitudes.php',
                type:  'post',
                success:  function (datos) {

				$("#updates").html(datos);
                }
        });
},500);
</script>

<!--Header-part-->
<div id="header">
  <h1><a href="index.html">Panel Conservación</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i><span id="usuario" class="text"> </span><b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a href="perfil.php"><i class="icon-user"></i> Perfil</a></li>
        <li class="divider"></li>
        <li><a href="solicitudes.php"><i class="icon-check"></i> Tareas</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Salir</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Mensajes</span> <b class="caret"></b></a>
      
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="solicitud.php"><i class="icon-plus"></i> Nueva Solicitud</a></li>
        <li class="divider"></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Ajustes</span></a></li>
    <li><a href="Logout.php"><em class="icon icon-share-alt"></em> <span class="text">Salir</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--start-top-serch-->

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
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="htmls/index.html" title="A Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span3 "> <a href="index.php"> <i class="icon icon-tint"></i>  Fluidos y Energeticos </a> </li>
        <li class="bg_lg span3"> <a href="htmls/Presupuesto.php"> <i class="icon-wrench"></i> Baja de Equipos</a> </li>
        <li class="bg_ly span3"> <a href="fluidos.php"> <i class="icon-book"></i>Inventarios </a> </li>
        <li class="bg_lo span3"> <a href="htmls/tables.html"> <i class=" icon-truck"></i> Proveedores</a> </li>
        <li class="bg_ls span3"> <a href="htmls/grid.html"> <i class="icon-shopping-cart"></i> Partidas</a> </li>
        <li class="bg_lo span3"> <a href="Bajas.php"> <i class="icon-list-alt"></i> Contratos</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    


    
    <div class="row-fluid">
 
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Solicitudes</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
           <div id="updates">
           </div>
              <li>
              <a href="solicitudes.php"><input type="button"  class="btn btn-warning btn-mini" name="botonfull" value="Ver Todas" /></a>
              </li>
            </ul>
          </div>
        </div>

        
      </div>
</div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; <a href="http://thequantumbox.com">The Quantum Box</a> </div>
</div>

<!--end-Footer-part-->
<script src="htmls/jquery.js"></script>
<script src="htmls/js/excanvas.min.js"></script> 
<script src="htmls/js/jquery.min.js"></script> 
<script src="htmls/js/jquery.ui.custom.js"></script> 
<script src="htmls/js/bootstrap.min.js"></script> 
<script src="htmls/js/jquery.flot.min.js"></script> 
<script src="htmls/js/jquery.flot.resize.min.js"></script> 
<script src="htmls/js/jquery.peity.min.js"></script> 
<script src="htmls/js/fullcalendar.min.js"></script> 
<script src="htmls/js/matrix.js"></script> 
<script src="htmls/js/matrix.dashboard.js"></script> 
<script src="htmls/js/jquery.gritter.min.js"></script> 
<script src="htmls/js/matrix.interface.js"></script> 
<script src="htmls/js/matrix.chat.js"></script> 
<script src="htmls/js/jquery.validate.js"></script> 
<script src="htmls/js/matrix.form_validation.js"></script> 
<script src="htmls/js/jquery.wizard.js"></script> 
<script src="htmls/js/jquery.uniform.js"></script> 
<script src="htmls/js/select2.min.js"></script> 
<script src="htmls/js/matrix.popover.js"></script> 
<script src="htmls/js/jquery.dataTables.min.js"></script> 
<script src="htmls/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
