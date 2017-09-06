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

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
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


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a></div>
    <h1>Perfil</h1>
  </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
            <h5 >Perfil</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
<div class="span12">
              <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    
                  <?php
include("php/config.php");
	 	$query = "SELECT * FROM tbl_members WHERE username = '".$_SESSION['userName']."'";
 $resource=mysqli_query($mysqli,$query);	
	while($row=mysqli_fetch_array($resource))
	{ 
$ID=$row[0];
$usuario=$row[1];
$Fecha=$row[5];
$Area=$row[6];
$imagen=$row[4];
$Nombre=$row[7];
$Paterno=$row[8];
$Materno=$row[9];
$email=$row[10];

	};
?>

<div align="">
<div class="span2 m-wrap">
</div>
<div class="span3 m-wrap">
<?php echo '
<img class="img-circle" img src="data:image/jpeg;base64,' . base64_encode($imagen).'">';"
"?>  
</div> 
<br>
<br>
Nombre: <?php echo '<strong>'.$Nombre.'</strong>' ?> 
				<br>
Apellidos: <?php echo '<strong>'.$Paterno.' '.$Materno.'</strong>' ?> 
                <br>
Usuario: <?php echo '<strong>' .$usuario. '</strong>' ?> 
				<br>
Fecha de Nacimiento: <?php echo '<strong>' .$Fecha. '</strong>' ?> 
</span>
				<br>
Area: <?php echo '<strong>'.$Area.'</strong>' ?> 
                <br>
Email: <?php echo '<strong>'.$email.'</strong>' ?> 
                </div>
                </div>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','1234','login') or die('Unable To connect');
    $sql = "
	update tbl_members set foto = (?) where userName = '".$_SESSION['userName']."'";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }
    mysqli_close($con);
}
?>
<br>
<br>
<br>

 <div class="widget-box collapsible">
          
          <div class="widget-title"> <a href="#collapseTwo" data-toggle="collapse"> <span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Actualizar Información</h5>
            </a> </div>
          <div class="collapse" id="collapseTwo">
            <div class="widget-content"> 
<center>
<form action="imageupdate.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image" id="image" required />
<input class="btn btn-success btn-mini" type="submit" name="subir" value="     Actualizar    " />
</form> 
</center>

	      </div>
          </div>
          </div>
         
              </div>
            </div>
            <div class="row-fluid"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; <a href="http://thequantumbox.com">The Quantum Box</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
