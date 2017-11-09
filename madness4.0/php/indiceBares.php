<?php


include 'conexion.php';


//include 'mostrar_img.php';

$query = "SELECT Nombre, Foto, Tipo  FROM  contenido Where Tipo = 'Bar'";
 

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));



echo "<table class=' table table-bordered'>";
echo "<tr>";
echo "<td><strong> Nombre </td>";
echo "<td ><strong> Logo </td>";
echo "</tr>";

 while( $row = mysqli_fetch_row($result)){

    echo "<tr>";
    echo "<td>"; 
    echo "<a href='/contenido.php?id=$row[0]' >".$row[0]."</a>";
    echo "</td>";
    echo "<td>"; 
    echo "<img class='thumbnail' src='".$row[1]."'/>";
    echo "</td>";
    echo "</tr>";
                    }

    echo "</table>";
?>
