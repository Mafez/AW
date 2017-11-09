<?php
// Conexion a la base de datos
include 'conexion.php';
echo "fuera";
if ($_GET['id'] > 0)
{
    echo "dentro";
    // Consulta de búsqueda de la imagen.
    $consulta = "SELECT Foto, Tipo_imagen FROM contenido WHERE Foto={$_GET['id']}";
    $resultado = mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);

    $imagen = $datos['Foto']; // Datos binarios de la imagen.
    $tipo = $datos['Tipo_imagen'];  // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    header("Content-type: $tipo");
    // A continuación enviamos el contenido binario de la imagen.
    echo $imagen;
}
?>