<?php
 
session_start();



include 'conexion.php';



 
$login = $_POST['E-mail'];
 
$pass = $_POST['contraseña'];
 
$pass=sha1(md5($pass));
//$pass=$pass;
//echo "$pass";
 
$query = sprintf("SELECT * FROM usuarios WHERE usuarios.email='%s' && usuarios.contrasenia='%s';",$login, $pass);
//echo "$query";

 
 
$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
 
if(mysqli_num_rows($result)){
 $bool = 0;
$array=mysqli_fetch_array($result);
 
$_SESSION["nombre"]= $array["nombre"];
 
$_SESSION["E-mail"]= $array["email"];
 
$_SESSION["id_usuario"]= $array["usuario"];
 
$_SESSION["contraseña"]= $array["contrasenia"];
 
 
header('Location: ../inicio.php');
 
} else {
	
 $bool = 1;
header('Location: ../index.php?booljs='.$bool);

 
}
 
?>