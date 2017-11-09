
<?php
session_start();
include 'conexion.php';


$asunto = $_POST['Titulo'];
$descripcion= $_POST['Descripcion'];
$autor= $_SESSION["id_usuario"];
$variablePHP = $_GET['id'];
include 'tildes.php';
if ( $asunto == "" || $descripcion == "")
{
    echo '<script language="javascript"> 
window.location="../contenido.php?id='.$variablePHP.'&alert=1"</script>';

}else
{
$arrayPalabras = array($asunto,$descripcion, $autor, $variablePHP);
$pertenece=  ConversionTildes($arrayPalabras);

$insert_value = "INSERT INTO comentarios ( Titulo, Descripcion, Autor, Pertenece) VALUES ('$pertenece[0]', '$pertenece[1]','$pertenece[2]','$pertenece[3]')";


$retry_value = mysqli_query($link, $insert_value) or die('Error: ' . mysqli_error($link));

	      //  echo '<script type="text/javascript">alert("'.$perte[3].'");</script>';
     $puntos = "INSERT INTO puntos (Puntos, Usuario , Motivo, Contenido) VALUES('2','$autor', 'COMENTAR', '$pertenece[3]')";

    $retry_value = mysqli_query($link, $puntos) or die('Error: ' . mysqli_error($link));
header('Location: ../contenido.php?id='.$variablePHP.'');





 
mysqli_close($link);
}

?>