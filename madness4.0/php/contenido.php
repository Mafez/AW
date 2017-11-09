<?php
session_start();

 include 'conexion.php';

$titulo = $_POST['Titulo'];

$tipo = $_POST['tipo'];

$description = $_POST['Descripcion'];

$direccion = $_POST['Direccion'];

$horarioA = $_POST['HorarioA'];
$horarioC = $_POST['HorarioC'];

$fechaIni = $_POST['FechaIni'];
$fechaFin = $_POST['FechaFin'];

$web = $_POST['Web'];

$usuario = $_SESSION["id_usuario"];


include 'subir_img.php';
    
$query = sprintf("SELECT * FROM contenido WHERE contenido.Direccion= '%s';", $direccion);

$result=mysqli_query($link,$query);

if (mysqli_num_rows($result) || $titulo = "" ||$descripcion == "" || $web == ""){

echo '<script language="javascript"> 
window.location="../agregar-contenido.php?alert=2"</script>';

} else {
    include 'tildes.php';
    $arrayPalabras = array($titulo,$ruta, $description, $direccion, $horarioA , $horarioC,$web,$usuario,$tipo,$fechaIni,$fechaFin);
    $P = ConversionTildes($arrayPalabras);
   
      echo '<script type="text/javascript">alert("'.$P[7].'");</script>';
    
	$insert_value = "INSERT INTO contenido (Nombre,Foto,Descripcion,Direccion,Horario_Apertura, Horario_Cierre,Web,Usuario,Tipo,Fecha_inicio, Fecha_fin) VALUES ('$P[0]','$P[1]', '$P[2]', '$P[3]','$P[4]' , '$P[5]','$P[6]','$P[7]','$P[8]','$P[9]','$P[10]')";
    
 
$retry_value = mysqli_query($link, $insert_value) or die('Error: ' . mysqli_error($link));
    
    $puntos = "INSERT INTO puntos (Puntos, Usuario , Motivo, Contenido) VALUES('10','$usuario', 'AGREGAR CONTENIDO', '$P[0]')";

    $retry_value = mysqli_query($link, $puntos) or die('Error: ' . mysqli_error($link));
	   
    
header('Location: ../inicio.php');

}
 
mysqli_close($link);




































?>