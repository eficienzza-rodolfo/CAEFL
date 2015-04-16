<?php
$mySqlHost="mysql15.000webhost.com";
$mySql_User="a6120814_user";
$mySql_Passwd="zebrasoft7";
$mySql_DB="a6120814_db";

$link=mysql_connect($mySqlHost,$mySql_User,$mySql_Passwd);

//Creamos la sentencia para la bd

mysql_select_db($mySql_DB,$link);


?>	

<?php
$manzana = $_POST["manzana"];
$lote = $_POST["lote"];
$dueno = $_POST["dueno"];
$pagos = $_POST["pagos"];
$abonos = $_POST["abonos"];
$pagocantidad = $_POST["pagocantidad"];
$fecha = $_POST["fecha"];


echo $manzana.$lote.$dueno.$pagos.$abonos.$pagocantidad.$fecha;

$query = mysql_query("INSERT INTO  `a6120814_db`.`lotes` (`nofrac` ,`frac` ,`manzana` ,`lote` ,`dueno` ,`pagos` ,`abonos` ,`pagoCantidad` ,`fecha` ,`donado`)
VALUES ('1',  'Fraccionamiento Tinajitas',  $manzana,  $lote,  '$dueno',  $pagos,  $abonos,  $pagocantidad,  '$fecha', NULL ); ")
?>

<?php
header("Location:index3.php?frac1=1");
		
			?>