<?php
session_start();
//echo "<link href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css' rel='stylesheet' />";
//echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>";

include 'conexion.php';

$asunto = $_POST['asunto'];

$emisor = $_SESSION['id_usuario'];

$destinatario = $_POST['destinatario'];

$contenido = $_POST['contenido'];

$fecha = getdate();
if ($asunto == "")
{
    $asunto = "(vacío)";
    
}
$query = "SELECT usuario FROM usuarios WHERE usuarios.usuario = '$destinatario' ";


$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
 
if(mysqli_num_rows($result)){
 

//include 'tildes.php';
    
    include 'tildes.php';
   $array = array($asunto,$contenido);
    $p = ConversionTildes($array);
$insertar = "INSERT INTO mensajes_directos (Asunto,Emisor,Destinatario,Contenido) VALUES ('$p[0]','$emisor','$destinatario','$p[1]')";
$retry_value = mysqli_query($link, $insertar) or die('Error: ' . mysqli_error($link));

header('Location: ../mandar_md.php');

}
 
else{
     echo '<script language="javascript"> 
window.location="../mandar_md.php?alert=1"</script>';
   }
mysqli_close($link);

?>