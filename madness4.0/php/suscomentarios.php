<?php

include 'conexion.php';

$usuario = $_SESSION['id_usuario'];

$query = "SELECT Nombre FROM contenido WHERE  Usuario = '$usuario' order by 1 ";
//$query2 = "SELECT count(Fecha) from Comentarios where Pertenece = (SELECT Nombre FROM contenido WHERE  Autor = '$usuario')";
//SELECT count(Fecha) from Comentarios where Pertenece = (SELECT Nombre FROM contenido WHERE  Usuario = "marquitos1")

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
 
if(mysqli_num_rows($result)){
    
    echo "<table class=' table table-bordered'>";
echo "<tr>";
echo "<td><strong> Tus sitios </td>";
echo "<td ><strong> Sus comentarios </td>";
  
echo "</tr>";

 while( $row = mysqli_fetch_row($result)){

    echo "<tr>";
    
    echo "<td>"; 
      echo "<a href='contenido.php?id=$row[0]'>".$row[0]."</a>";
   
    echo "</td>";
     $query2 = "(SELECT count(Fecha) from Comentarios where Pertenece = '$row[0]')";
     $result2=mysqli_query($link,$query2) or die('Could not look up user information; '.mysqli_error($link));
     $row1 = mysqli_fetch_row($result2);
    echo "<td>"; 
      echo $row1[0];
    
    echo "</td>";
    echo "</tr>";
                    }

    echo "</table>";
}

?>