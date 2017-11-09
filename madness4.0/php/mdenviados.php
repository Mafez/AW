<?php

include 'conexion.php';

$bandeja = "enviados";
$emisor = $_SESSION['id_usuario'];
$query = "SELECT Asunto,Fecha,Destinatario FROM mensajes_directos WHERE Emisor = '$emisor' ";

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
 
if(mysqli_num_rows($result)){
    
    echo "<table class=' table table-bordered'>";
echo "<tr>";
echo "<td><strong> Fecha </td>";
echo "<td ><strong> Asunto </td>";
echo "<td ><strong> Destinatario </td>";    
echo "</tr>";

 while( $row = mysqli_fetch_row($result)){

    echo "<tr>";
    
    echo "<td>"; 
    echo $row[1];
    echo "</td>";
     
    echo "<td>"; 
    echo "<a href='mostrar_md.php?persona=$row[2]&fecha=$row[1]&bandeja=$bandeja' >".$row[0]."</a>";
    echo "</td>";
    
    echo "<td>"; 
    echo $row[2];
    echo "</td>";
    
    echo "</tr>";
                    }

    echo "</table>";
}

?>