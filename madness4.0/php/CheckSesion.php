<?php

include 'conexion.php';

 $s = $_SESSION["id_usuario"];

$query = sprintf("SELECT usuario FROM usuarios WHERE usuario = '%s';",$s);
$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));

if(mysqli_num_rows($result)==0){
    header("Location: ../index.php");
}

?>
