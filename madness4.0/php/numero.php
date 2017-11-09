<?php
  //  session_start();
include 'conexion.php';


$usuario = $_SESSION['id_usuario'];
  //echo '<script type="text/javascript">alert("'.$usuario.'");</script>';

    $query = "SELECT count(leido) from mensajes_directos where leido = '0' and Destinatario =
 '$usuario'";  
 $result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));

  $row = mysqli_fetch_row($result);
$numero = $row[0];

if($numero != 0 ){
   
   
   echo"<span class = 'notif'> ";
    echo $row[0];
   echo" </span>";
 //echo '<script type="text/javascript">alert("'.$row[0].'");</script>';

    
    
    
    
}
    
    ?>
