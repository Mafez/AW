<?php
session_start();
echo '<script language="javascript">validaRegistro("validar"); window.location="../registro.php"</script>';

include 'conexion.php';
    
$name = $_POST['Nombre'];
$email = $_POST['E-mail'];
$usuario = $_POST['Usuario'];
$contrasenia= $_POST['Contraseña'];

$contrasenia2 = sha1(md5($contrasenia));
//echo "$contrasena";
$query=sprintf("SELECT * FROM usuarios WHERE usuarios.email='%s' || usuarios.usuario='%s';",$email,$usuario );

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));

if (mysqli_num_rows($result)){
 


$bool = 1;
    

    
header ('Location: ../registro.php?booljs='.$bool);


 
} else {
	$bool = 0;
	$insert_value = "INSERT INTO usuarios (nombre, email,usuario,contrasenia) VALUES ('$name', '$email', '$usuario', '$contrasenia2')";
 

$retry_value = mysqli_query($link, $insert_value) or die('Error: ' . mysqli_error($link));

$_SESSION["nombre"]= $name;
 
$_SESSION["E-mail"]= $email;
 
$_SESSION["id_usuario"]= $usuario;
 
$_SESSION["contraseña"]= $contrasenia;
 
header('Location: ../inicio.php?booljs='.$bool);

}
 
mysqli_close($link);
		
?>