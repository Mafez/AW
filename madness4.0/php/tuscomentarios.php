<?php

include 'conexion.php';

$usuario = $_SESSION['id_usuario'];

$query = "SELECT DISTINCT * FROM comentarios WHERE Autor = '$usuario' Group BY Pertenece";

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
 
if(mysqli_num_rows($result)){
    
    echo "<table class=' table table-bordered'>";
echo "<tr>";
echo "<td><strong> Fecha </td>";
echo "<td ><strong> Sitios donde has comentado </td>";
  
echo "</tr>";

 while( $row = mysqli_fetch_row($result)){

    echo "<tr>";
    
    echo "<td>"; 
    echo $row[2];
    echo "</td>";
     
    echo "<td>"; 
     echo "<a href='contenido.php?id=$row[4]'>".$row[4]."</a>";
    echo "</td>";
    echo "</tr>";
                    }

    echo "</table>";
}

?>