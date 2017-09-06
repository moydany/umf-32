
<?php 
include("config.php");
	 	
		$query = "select tbl_members.userName, solicitudes.fecha,solicitudes.hora,solicitudes.solicitud,estado_solicitud.estado,tbl_members.foto from solicitudes inner join tbl_members on id=tbl_members_id
inner join estado_solicitud on idEstado=Estado_idestado order by solicitudes.idSolicitud desc limit 6";

 $resource=mysqli_query($mysqli,$query);	
	while($row=mysqli_fetch_array($resource))
	{ 

 echo '<div class="fr"> <span class="label label-important">'.$row[4].'</span></div>
  
 <li><div class="user-thumb">
<img src="data:image/jpeg;base64,' . base64_encode($row[5]).'">
 </div>';
 
 echo "<div> <span>  Por:".$row[0]." / Fecha: ".$row[1]." / Hora: ".$row[2]." </span><p><a href='#'>".$row[3]."</a> </p>
                </div></li>
				
				</div>";
	};
						
?> 