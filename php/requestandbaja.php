<?php
include("config.php");

$1 = $_POST['1'];
$2 = $_POST['2'];
$3 = $_POST['3'];
$4 = $_POST['4'];
$5 = $_POST['5'];
$6 = $_POST['6'];
$7 = $_POST['7'];
$8 = $_POST['8'];
$9 = $_POST['9'];
$10 = $_POST['10'];
$11 = $_POST['11'];
$12 = $_POST['12'];
$13 = $_POST['13'];
$14 = $_POST['14'];
$15 = $_POST['15'];
$16 = $_POST['16'];
$17 = $_POST['17'];
$18 = $_POST['18'];
$19 = $_POST['19'];
$20 = $_POST['20'];
$21 = $_POST['21'];
$22 = $_POST['22'];
$23 = $_POST['23'];
$24 = $_POST['24'];
$25 = $_POST['25'];
$26 = $_POST['26'];
$27 = $_POST['27'];
$28 = $_POST['28'];
$29 = $_POST['29'];
$30 = $_POST['30'];
$31 = $_POST['31'];
$32 = $_POST['32'];
$33 = $_POST['33'];
$34 = $_POST['34'];
$35 = $_POST['35'];
$36 = $_POST['36'];
$37 = $_POST['37'];
$38 = $_POST['38'];
$39 = $_POST['39'];
$40 = $_POST['40'];
$41 = $_POST['41'];
$42 = $_POST['42'];
$43 = $_POST['43'];
$44 = $_POST['44'];
$45 = $_POST['45'];
$46 = $_POST['46'];
$47 = $_POST['47'];
$48 = $_POST['48'];
$49 = $_POST['49'];
$50 = $_POST['50'];
$51 = $_POST['51'];
$52 = $_POST['52'];
$53 = $_POST['53'];
$54 = $_POST['54'];
$55 = $_POST['55'];
$56 = $_POST['56'];
$57 = $_POST['57'];
$58 = $_POST['58'];
$59 = $_POST['59'];
$60 = $_POST['60'];
$61 = $_POST['61'];
$62 = $_POST['62'];
$63 = $_POST['63'];
$64 = $_POST['64'];
$65 = $_POST['65'];
$66 = $_POST['66'];
$67 = $_POST['67'];
$68 = $_POST['68'];
$69 = $_POST['69'];
$70 = $_POST['70'];

$query1 = "insert into baja (Fecha,Expediente) values (curdate(),1);";

$query2 = "insert into descripcion (nombre,cantidad,marca,peso,NoInventario,Dimensiones,grupo,Fecha,Servicio,ValorAdquisitivo,Solicitante,Baja_idBaja)
values ('".$10."','".$3."','".$4"','".$5"','".$6"','".$7"','".$9"','".$10"','".$11"','".$12"','".$13"',(select max(idBaja) from baja));";

$query3 = "insert into dictamen (procedeBajaUnidad,EnajeDelega,ReubiDelega,NoProcedencia,NoProcedeBaja,DebeContOpera,DebeRepRecProp,DebeCapaOperado,DebeRepApoyoTec,DebeRepRecExt,DebeCapOpMant,ReubNivCent,ProceBajaDef,Baja_idBaja)
values ('".$57"','".$58"','".$???"','".$59"','".$4"','".$4"','".$4"','".$4"',(select max(idBaja) from baja));";

$query4 = "insert into estado (Nuevo,Operando,FueraOperacion,Suspension,Sobrante,Fallas,Otros,SuspensionServicio,Sobrante2,Siniestro,Inutil,CambioProyecto,Inadecuando,Completo,Baja_idBaja)
values ('".$14"','".$15"','".$16"','".$17"','".$18"','".$19"','".$191"','".$20"','".$21"','".$4"',(select max(idBaja) from baja));";

$query5 = "insert into evaluaciontecnica (Condiciones,OperacionPersonal,Especializado,Mantenimiento,Bienes,CondicionesAd,FallasFrec,FrecuenciaFalla,CostoRepara,CostoReposicion,MantenimientoAnual,Desinstalador,Baja_idBaja)
values ('x','x','x','x','x','x','x','x','0','0','x','x',(select max(idBaja) from baja));";

$query6 = "insert into causabaja (EquipoSobNuevo,Obsolencia,Inutilidad,SuspensionServicio,CamCapProyOrig,CarenServEspLoc,CarenServEspNac,Siniestrado,Otros,FallaRefMerNac,FaltaRefMerInt,FallaFrec,EquipoIncomp,ProyectoInadecuado,InadeSelecEquipo,Robado,Extraviado,Baja_idBaja)
values ('x','x','x','x','x','x','x','x','x','x','x','x','x','x','x','x','x',(select max(idBaja) from baja));";


 $resource1=mysqli_query($mysqli,$query1);
 $resource2=mysqli_query($mysqli,$query2);
 $resource3=mysqli_query($mysqli,$query3);
 $resource4=mysqli_query($mysqli,$query4);
 $resource5=mysqli_query($mysqli,$query5);
 $resource6=mysqli_query($mysqli,$query6);


if($resource1){
	echo 'ok 1';
	if($resource2){
	echo 'ok 2';
		if($resource3){
	echo 'ok 3';
			if($resource4){
	echo 'ok 4';
				if($resource5){
	echo 'ok 5';
					if($resource6){
	echo '<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Mensaje Enviado</h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1>¡Listo!</h1>
              <h3>Proveedor Añadido</h3>
              <a class="btn btn-warning btn-big"  href="proveedores.php">Regresar a Proveedores</a> </div>
          </div>';
}
}
}
}
}
}

else{
	
	echo "Error al Añadir Proveedor";
	}
	
	
?>

