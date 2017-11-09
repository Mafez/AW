<?php
include 'conexion.php';

$query = "SELECT usuario, sum(Puntos)  FROM puntos group by usuario";
 

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
echo "<table class=' table table-striped'>";
echo "<tr>";
echo "<td><strong> Usuario </td>";
echo "<td ><strong> Puntos </td>";
echo "</tr>";

 while( $row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>"; 
    echo $row[0];
    echo "</td>";
    echo "<td>"; 
    echo $row[1];
    echo "</td>";
    echo "</tr>";
                    }
    echo "</table>";
                    ?>