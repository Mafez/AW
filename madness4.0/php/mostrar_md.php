<?php
include 'conexion.php';

$bandeja = $_GET['bandeja'];





$fecha = $_GET['fecha'];


if ($bandeja == "enviados"){
    
    $emisor = $_SESSION['id_usuario'];
      
    $destinatario =   $_GET['persona'];

}else {
    
    $emisor = $_GET['persona'];
    $destinatario = $_SESSION['id_usuario'];

}
    

//echo "<script> alert('$destinatario');</script>";
//echo "<script> alert('$fecha');</script>";

$query = "SELECT * FROM mensajes_directos WHERE Destinatario = '$destinatario' && Fecha = '$fecha' && Emisor = '$emisor'";
$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
 
if(mysqli_num_rows($result)){
$row = mysqli_fetch_row($result);
    
echo "<div class='todo'>";
echo "<div class='ini'>Mensaje</div>";
echo "<div class='descripcion'>";

echo"<table class='table table-bordered'>";
echo "<tr>";
    
echo "<td>Asunto: '".$row[0]."'</td>";
echo "<td>Fecha: '".$row[1]."'</td>"; 
echo "</tr>";

echo "<td>Para:'".$row[3]. "'</td>";

    
echo "<td>Desde: '".$row[2]."'</td>";
echo "</tr>";
echo "</table>";
echo "Mensaje:              ";

echo $row[4];
    

echo "</div></div>";
if($emisor == $_GET['persona']&$destinatario==$_SESSION['id_usuario']&$fecha==$_GET['fecha']){
    $query2 = "UPDATE mensajes_directos set leido = 1 where Emisor= '$emisor' and  Destinatario = '$destinatario' and  Fecha = '$fecha'";
    $retry_value = mysqli_query($link, $query2) or die('Error: ' . mysqli_error($link));
}
}
else{
    
}

mysqli_close($link);
?>