<?php
include 'conexion.php';

$autor= $_SESSION["id_usuario"];
$query = "SELECT usuario, Puntos, Motivo, Contenido, Fecha  FROM puntos where usuario = '$autor' order by 5 desc ";
 

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
echo "<table class=' table table-striped'>";
echo "<tr>";
echo "<td><strong> Usuario </td>";
echo "<td><strong> Puntos </td>";
echo "<td><strong> Motivo </td>";
echo "<td ><strong> Fecha </td>";
echo "<td ><strong> Contenido </td>";
echo "</tr>";

 while( $row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>"; 
    echo $row[0];
    echo "</td>";
    echo "<td>"; 
    echo $row[1];
    echo "</td>";
       echo "<td>"; 
    echo $row[2];
    echo "</td>";
     echo "<td>"; 
    echo $row[4];
    echo "</td>";
       echo "<td>"; 
     echo "<a href='/contenido.php?id=$row[3]'>".$row[3]."</a>";
    echo "</td>";
    echo "</tr>";
                    }
    echo "</table>";
                    ?>