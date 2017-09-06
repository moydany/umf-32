<!DOCTYPE html>
<html lang="en">
<head>
<title>Fluidos y Energeticos</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
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
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <?php session_start();
	 if(isset($_SESSION['userName']))
	 {
		echo $_SESSION['userName'] ;	
	 }
?>  <span class="text"> </span><b class="caret"></b> </a>
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

<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Busqueda"/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Inicio</span></a> </li>
    <li class="active"> <a href="presupuesto.php"><i class="icon icon-signal"></i> <span>Control Presupuestal</span></a> </li>
    <li> <a href="Fluidos.php"><i class="icon icon-tint"></i> <span>Fluidos y Energeticos</span></a> </li>
    <li><a href="#"><i class="icon-wrench"></i> <span>Mantenimiento Preventivo</span></a></li>
    <li><a href="#"><i class="icon-cogs"></i> <span>Equipo Medico</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon-bar-chart"></i> <span>Informe Mensual</span> </a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="#"><i class="icon-book"></i> <span>Inventarios</span></a></li>
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
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>	
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="A Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a></div>
  </div>  

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-bar-chart"></i></span>
          <h5>Control Presupuestal</h5>
  <div id="collapseOne" class="collapse in"> </div>
<div id="collapseTwo" class="collapse">
            <div class="widget-content"> This box is now open </div>
<div id="collapseThree" class="collapse">
            <div class="widget-content"> This box is now open </div>
        </div>
      </div>
        <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Reportes</a></li>
              <li><a data-toggle="tab" href="#tab2">Añadir</a></li>
              <li><a data-toggle="tab" href="#tab3">Relación</a></li>
                          </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>RELACION DE CONTRATISTAS QUE OTORGAN SERVICIOS EN EL UMF N°32</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Inicio</th>
                  <th>Proveedor</th>
                  <th>Servicio</th>
                  <th>Importe Definido</th>
                  <th>PP</th>
                  <th>Contrato</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Trident</5td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
                <tr class="even gradeC">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                  <td class="center">C</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                  <td class="center">A</td>
                </tr>
                <tr class="even gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                    <td>Win 95+</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                  <td class="center">A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        
</div>
            <div id="tab2" class="tab-pane">
            <div id="tab1" class="tab-pane active">
              <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Consumo de Agua Mensual</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
                <tr class="even gradeC">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                  <td class="center">C</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                  <td class="center">A</td>
                </tr>
                <tr class="even gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                  <td class="center">A</td>
                </tr>
              </tbody>
            </table>
          </div> 
        </div>
        
        
</div>
            </div>
            <div id="tab3" class="tab-pane">
              <p>3.- And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. </p>
              
              <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Static table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center"> 4</td>
                  <td class="center">X</td>
                </tr>
                <tr class="even gradeC">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                  <td class="center">C</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                  <td class="center">A</td>
                </tr>
                <tr class="even gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                  <td class="center">A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
</div>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; <a href="http://thequantumbox.com.in">The Quantum Box</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

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
