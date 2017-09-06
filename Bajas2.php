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
                url:   'php/requestdepartamentos.php',
                type:  'post',
                success:  function (combo) {

				$("#departamento,#departamento1").html(combo);
                }
        });
				$.ajax({
                data:  "",
                url:   'php/requestproveedores.php',
                type:  'post',
                success:  function (partida) {
	
				$("#proveedorescombo").html(partida);
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
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Inicio</span></a> </li>
    <li> <a href="controlpresupuestal.php"><i class="icon icon-signal"></i> <span>Control Presupuestal</span></a> </li>
    <li> <a href="Fluidos.php"><i class="icon icon-tint"></i> <span>Fluidos y Energeticos</span></a> </li>
    <li class="active"><a href="bajas.php"><i class="icon-wrench"></i> <span>Baja de Equipos</span></a></li>
    <li></li>
    <li class="submenu"> <a href="htmls/fluidos.php"><i class="icon-bar-chart"></i> <span>Resumen Mensual</span> </a>
    </li>
    <li><a href="inventarios.php"><i class="icon-book"></i> <span>Inventarios</span></a></li>
   <li class="submenu"> <a href="#"><i class="icon-truck"></i> <span>Insumos y Proveedores</span> </a>
      <ul>
        <li><a href="#">Lista de Proveedores</a></li>
        <li><a href="#">Solicitud De Insumos</a></li>
        <li><a href="#">Facturas</a></li>
        <li><a href="#">Partidas</a></li>
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
    <h1>Baja de Equipos</h1>
  </div>
  
<!--Opciones-->
	<div class="widget-box">
	<div class="widget-title"> 
  	<a href="#collapseTwo" data-toggle="collapse"> <span class="icon"><i class="icon-chevron-down"></i>
  	</span><h5>Nueva Baja</h5></a> 
	</div>
    
<div class="collapse" id="collapseTwo">
<div class="controls">
<div class="widget-box">
		<div class="widget-title">
<ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
              <li><a data-toggle="tab" href="#tab2">Estado</a></li>
              <li><a data-toggle="tab" href="#tab3">Evaluación Tecnica</a></li>
              <li><a data-toggle="tab" href="#tab4">Causa de Baja</a></li>
              <li><a data-toggle="tab" href="#tab5">Dictamen de Baja</a></li>
            </ul>
        </div>
                 <div class="widget-content tab-content">
<div id="tab1" class="tab-pane active ">
      
            	
<table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
              
                <tr>
                  <td>Expediente :</td>
                  <td><input type="text" id="1">  </td>
                </tr>
                <tr>
                  <td>Nombre :</td>
                  <td><input type="text" id="2">  </td>
                </tr>
                 <tr>
                  <td>Cantidad :</td>
                  <td><input type="text" id="3">  </td>
                </tr>
                                <tr>
                  <td>Marca :</td>
                  <td><input type="text" id="4">  </td>
                </tr>
                                <tr>
                  <td>Peso :</td>
                  <td><input type="text" id="5">  </td>
                </tr>
                                <tr>
                  <td>No. Inventario :</td>
                  <td><input type="text" id="6">  </td>
                </tr>
                                <tr>
                  <td>Dimensiones :</td>
                  <td><input type="text" id="7">  </td>
                </tr>
                                <tr>
                  <td>Proveedor :</td>
                  <td><select id="8" name="proveedorescombo" href="javascript:;">
				</select></td>
                </tr>
                                <tr>
                  <td>Grupo :</td>
                  <td><input type="text" id="9">  </td>
                </tr>
                                <tr>
                  <td>Fecha :</td>
                  <td><input type="Date" id="10">  </td>
                </tr>
                                <tr>
                  <td>Servicio :</td>
                  <td><input type="text" id="11">  </td>
                </tr>
                                <tr>
                  <td>Valor de Adqusición :</td>
                  <td><input type="text" id="12">  </td>
                </tr>
                                <tr>
                  <td>Solicitante :</td>
                  <td><input type="text" id="13">  </td>
                </tr>
                
              </tbody>
</table>

<table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nuevo :</td>
                  <td><select id="14">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                 <tr>
                  <td>Operando :</td>
                  <td><select id="15">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Fuera de Operación :</td>
                  <td><select id="16">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Suspension :</td>
                  <td><select id="17">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Sobrante :</td>
                  <td><select id="18">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Fallas frecuentes :</td>
                  <td><select id="19">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Otros :</td>
                  <td><input type="text" id="191"> </td>
                </tr>
                                <tr>
                  <td>Suspensión del Servicio :</td>
                  <td><select id="20">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Sobrante :</td>
                  <td><select id="21">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Siniestrado :</td>
                  <td><select id="22">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Inutil :</td>
                  <td><select id="23">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Cambio del Proyecto Original :</td>
                  <td><select id="24">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                                <tr>
                  <td>Proyecto Inadecuado :</td>
                  <td><select id="25">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                                <tr>
                  <td>Completo :</td>
                  <td><select id="26">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                                <tr>
                  <td>Otros 2 :</td>
                  <td><input type="text" id="27"></td>
                </tr>
              </tbody>
</table> 

<table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Condiciones de Operación Adecuada :</td>
                  <td><select id="28">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                 <tr>
                  <td>Lo Opera Personal Capacitado :</td>
                  <td><select id="29">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Existe Servicio Especializado :</td>
                  <td><select id="30">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Recibio Mantenimiento Adecuado :</td>
                  <td><select id="31">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Existen Bienes de Reserva :</td>
                  <td><select id="32">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Condiciones de Instalación adecuadas :</td>
                  <td><select id="33">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Falla Frecuente :</td>
                  <td><select id="34">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Frecuencia de la Falla :</td>
                  <td><input type="text" id="35">  </td>
                </tr>
                                <tr>
                  <td>Costo Estimado de Reparación Mayor :</td>
                  <td><input type="text" id="36">  </td>
                </tr>
                                <tr>
                  <td>Costo Estimado de Reposición  :</td>
                  <td><input type="text" id="37">  </td>
                </tr>
                                <tr>
                  <td>Costo de Mantenimiento En el Ultimo Año :</td>
                  <td><input type="text" id="38">  </td>
                </tr>
                                <tr>
                  <td>Requiere ser Desinstalado Por :</td>
                  <td><input type="text" id="39">  </td>
                </tr>
                
              </tbody>
</table>

<table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Equipo Sobrante Nuevo :</td>
                  <td><select id="40">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                 <tr>
                  <td>Obsolencia :</td>
                  <td><select id="41">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Inutilidad :</td>
                  <td><select id="42">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Suspensión del Servicio :</td>
                  <td><select id="43">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Cambio Cap.Proyect.Orig. :</td>
                  <td><select id="44">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Carencia de Serv.Esp.Loc :</td>
                  <td><select id="45">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Carencia de Serv.Esp.Nac :</td>
                  <td><select id="46">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Siniestrado :</td>
                  <td><select id="47">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Otros :</td>
                  <td><input type="text" id="48">  </td>
                </tr>
                                <tr>
                  <td>Falta Refacc.Mercado Nac. :</td>
                  <td><select id="49">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Falta Refacc.Mercado Int. :</td>
                  <td><select id="50">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Fallas Frecuentes :</td>
                  <td><select id="51">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Equipo Inadecuado :</td>
                  <td><select id="52">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Proyecto Inadecuado :</td>
                  <td><select id="53">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Inadecuado Selecc. de Equipo :</td>
                  <td><select id="54">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Robado :</td>
                  <td><select id="55">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Extraviado :</td>
                  <td><select id="56">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                
              </tbody>
</table>

<table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Procede la Baja de La Unidad :</td>
                  <td><select id="57">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                 <tr>
                  <td>Para Enajenación de la Delegación :</td>
                  <td><select id="58">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>No Procede la Baja de La Unidad :</td>
                  <td><select id="59">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Continuar en Operación :</td>
                  <td><select id="60">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Reparado con Recursos Propios :</td>
                  <td><select id="61">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Capacitado el Operador :</td>
                  <td><select id="62">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Reparado por Apoyo Tecnico :</td>
                  <td><select id="63"> 
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Reparado por Rec.Ext. :</td>
                  <td><select id="64">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Debe Ser Capacit. El. Op. De Mantenimiento :</td>
                  <td><select id="65">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Procede la Baja de La Delegación :</td>
                  <td><select id="66">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Reubicación a Nivel Central :</td>
                  <td><select id="67">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Recuperación Nivel Central :</td>
                  <td><select id="68">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Para Enajenación de la Delegación :</td>
                  <td><select id="69">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Para Reubicar a Nivel Delegacional :</td>
                  <td><select id="70">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                
              </tbody>
</table>

</div>

<div id="tab2" class="tab-pane">
    
    <table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nuevo :</td>
                  <td><select id="14">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                 <tr>
                  <td>Operando :</td>
                  <td><select id="15">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Fuera de Operación :</td>
                  <td><select id="16">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Suspension :</td>
                  <td><select id="17">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Sobrante :</td>
                  <td><select id="18">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Fallas frecuentes :</td>
                  <td><select id="19">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Otros :</td>
                  <td><input type="text" id="191"> </td>
                </tr>
                                <tr>
                  <td>Suspensión del Servicio :</td>
                  <td><select id="20">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Sobrante :</td>
                  <td><select id="21">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Siniestrado :</td>
                  <td><select id="22">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Inutil :</td>
                  <td><select id="23">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                <tr>
                  <td>Cambio del Proyecto Original :</td>
                  <td><select id="24">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                                <tr>
                  <td>Proyecto Inadecuado :</td>
                  <td><select id="25">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                                <tr>
                  <td>Completo :</td>
                  <td><select id="26">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select>  </td>
                </tr>
                                                <tr>
                  <td>Otros 2 :</td>
                  <td><input type="text" id="27"></td>
                </tr>
              </tbody>
</table> 
<button type="button" class="btn btn-success" onClick="">Siguiente</button>
</div>            
            
<div id="tab3" class="tab-pane">
 
 <table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Condiciones de Operación Adecuada :</td>
                  <td><select id="28">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                 <tr>
                  <td>Lo Opera Personal Capacitado :</td>
                  <td><select id="29">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Existe Servicio Especializado :</td>
                  <td><select id="30">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Recibio Mantenimiento Adecuado :</td>
                  <td><select id="31">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Existen Bienes de Reserva :</td>
                  <td><select id="32">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Condiciones de Instalación adecuadas :</td>
                  <td><select id="33">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Falla Frecuente :</td>
                  <td><select id="34">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Frecuencia de la Falla :</td>
                  <td><input type="text" id="35">  </td>
                </tr>
                                <tr>
                  <td>Costo Estimado de Reparación Mayor :</td>
                  <td><input type="text" id="36">  </td>
                </tr>
                                <tr>
                  <td>Costo Estimado de Reposición  :</td>
                  <td><input type="text" id="37">  </td>
                </tr>
                                <tr>
                  <td>Costo de Mantenimiento En el Ultimo Año :</td>
                  <td><input type="text" id="38">  </td>
                </tr>
                                <tr>
                  <td>Requiere ser Desinstalado Por :</td>
                  <td><input type="text" id="39">  </td>
                </tr>
                
              </tbody>
</table>
<button type="button" class="btn btn-success" onClick="">Siguiente</button>
</div>
<div id="tab4" class="tab-pane">

    <table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Equipo Sobrante Nuevo :</td>
                  <td><select id="40">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                 <tr>
                  <td>Obsolencia :</td>
                  <td><select id="41">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Inutilidad :</td>
                  <td><select id="42">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Suspensión del Servicio :</td>
                  <td><select id="43">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Cambio Cap.Proyect.Orig. :</td>
                  <td><select id="44">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Carencia de Serv.Esp.Loc :</td>
                  <td><select id="45">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Carencia de Serv.Esp.Nac :</td>
                  <td><select id="46">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Siniestrado :</td>
                  <td><select id="47">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Otros :</td>
                  <td><input type="text" id="48">  </td>
                </tr>
                                <tr>
                  <td>Falta Refacc.Mercado Nac. :</td>
                  <td><select id="49">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Falta Refacc.Mercado Int. :</td>
                  <td><select id="50">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Fallas Frecuentes :</td>
                  <td><select id="51">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Equipo Inadecuado :</td>
                  <td><select id="52">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Proyecto Inadecuado :</td>
                  <td><select id="53">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Inadecuado Selecc. de Equipo :</td>
                  <td><select id="54">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Robado :</td>
                  <td><select id="55">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Extraviado :</td>
                  <td><select id="56">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                
              </tbody>
</table>
<button type="button" class="btn btn-success" onClick="">Siguiente</button>
</div>

<div id="tab5" class="tab-pane">

    <table class="table table-bordered span4">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Procede la Baja de La Unidad :</td>
                  <td><select id="57">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                 <tr>
                  <td>Para Enajenación de la Delegación :</td>
                  <td><select id="58">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>No Procede la Baja de La Unidad :</td>
                  <td><select id="59">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Continuar en Operación :</td>
                  <td><select id="60">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Reparado con Recursos Propios :</td>
                  <td><select id="61">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Capacitado el Operador :</td>
                  <td><select id="62">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Reparado por Apoyo Tecnico :</td>
                  <td><select id="63"> 
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Debe Ser Reparado por Rec.Ext. :</td>
                  <td><select id="64">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select> </td>
                </tr>
                                <tr>
                  <td>Debe Ser Capacit. El. Op. De Mantenimiento :</td>
                  <td><select id="65">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Procede la Baja de La Delegación :</td>
                  <td><select id="66">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Reubicación a Nivel Central :</td>
                  <td><select id="67">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                                <tr>
                  <td>Recuperación Nivel Central :</td>
                  <td><select id="68">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Para Enajenación de la Delegación :</td>
                  <td><select id="69">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                <tr>
                  <td>Para Reubicar a Nivel Delegacional :</td>
                  <td><select id="70">
  						<option value=" ">No</option>
 					    <option value="X">Si</option>
					   </select></td>
                </tr>
                
              </tbody>
</table>
<button type="button" class="btn btn-success" onClick="">Finalizar</button>
</div>
    
<!--/Opciones-->
  
<div class="widget-box span12">
<div class="widget-content nopadding">
      <table class="table table-bordered" id="tablainv">
              
            </table>
					</div>
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
