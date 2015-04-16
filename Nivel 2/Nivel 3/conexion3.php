<?php
$mySqlHost="mysql15.000webhost.com";
$mySql_User="a6120814_user";
$mySql_Passwd="zebrasoft7";
$mySql_DB="a6120814_db";

$link=mysql_connect($mySqlHost,$mySql_User,$mySql_Passwd);

//Creamos la sentencia para la bd

mysql_select_db($mySql_DB,$link);


?>