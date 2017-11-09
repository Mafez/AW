<?php

//Para trabajar Online

/*$hostname = "mysql.hostinger.es";
$usuario = "u508564041_mad";
$password = "madness";
$basededatos = "u508564041_mad";*/


//Para trabajar en local

$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "madness";
 $link = new mysqli( $hostname,$usuario, $password,$basededatos);
if ( mysqli_connect_errno() ) {
echo "Error de conexión a la BD: ".mysqli_connect_error();
exit();
} 


?>