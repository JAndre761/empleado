<?php
/*Datos de conexion a la base de datos*/
$db_host = "mysql01.c4utrkzk5zgf.us-west-1.rds.amazonaws.com";
$db_user = "root";
$db_pass = "";
$db_name = "empleados";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>