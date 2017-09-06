
  <?php 
include("config.php");
	 	
		$query = "select tbl_members.userName, year(solicitudes.fecha) as Año,month(solicitudes.fecha) as Mes,day(solicitudes.fecha) as 
Dia,hour(solicitudes.hora),minute(solicitudes.hora),solicitudes.solicitud,estado_solicitud.estado,tbl_members.foto,solicitudes.idSolicitud from solicitudes inner join tbl_members on 
id=tbl_members_id inner join estado_solicitud on idEstado=Estado_idestado order by solicitudes.idSolicitud desc";

 $resource=mysqli_query($mysqli,$query);	
	while($row=mysqli_fetch_array($resource))
	{ 
echo "<div class='fr'>  <a href='http://localhost/Web%20Projects/Matrix%20Admin/set3.php?id=".$row[9]."' class='btn btn-success btn-mini'>Solucionado</a> <a href='http://localhost/Web%20Projects/Matrix%20Admin/set1.php?id=".$row[9]."' class='btn btn-success btn-mini'>pendiente</a>  <a href='http://localhost/Web%20Projects/Matrix%20Admin/deletesol.php?id=".$row[9]."' class='btn btn-danger btn-mini'>Eliminar</a></div>'";

echo '<li><div class="user-thumb">
<img src="data:image/jpeg;base64,'.base64_encode($row[8]).'">
 </div>';
 
echo "<div> <span>  Por:".$row[0]." / Fecha: ".$row[3]."/".$row[2]."/".$row[1]." Hora: ".$row[4].":".$row[5]." </span><span class='label label-important'>".$row[7]."</span><p><a href='#'>".$row[6]."</a> </p></div></li>";
	};
						
?> 