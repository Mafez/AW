<?php


include 'conexion.php';

$variablePHP = $_GET['id'];
echo"<div class='container'>";
        echo"<div class='row'>";
           echo " <div class='col-md-9 col-xs-12'>";
                echo "<div class='todo'>";
                   echo" <div class='ini'>Comentarios</div>";
                    echo "<div class='cuadro'>";
                       echo "<form class='form-horizontal' enctype ='multipart/form-data' method='POST' action='php/comentario.php?id=$variablePHP'>";

                        echo "<input type='text' name='Titulo' placeholder='Asunto' id='Titulo' class='Titulo' />";
                        echo"<br>";
                        echo "<textarea class='form-control textarea'rows='10'  name='Descripcion' id='Descripcion' ></textarea>";

                        echo "<button type='submit' class='btn btn-md  btn-success coment'>Agregar</button>";
                        echo"</form>";
 echo " <br>";
 //echo '<script type="text/javascript">alert("'.$variablePHP.'");</script>';
$v = ConversionTildes($variablePHP);
//echo '<script type="text/javascript">alert("'.$v.'");</script>';
$query = sprintf("SELECT Titulo, Descripcion, Fecha, Autor, Pertenece  FROM  comentarios Where Pertenece  = '%s' order by 3 desc",$v);
 
$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));

while( $row = mysqli_fetch_row($result)){
                       
                       echo "<div class = 'comentario'> ";
                       echo "<h2>";
                        echo $row[0];
                        echo "</h2>";
                        echo $row[1];
                        echo " <br>";
                        echo "<div class = 'blo1'>";
                        echo "<span class= 'user'>".$row[2]."</span>";
                        echo "<span class = 'user'>".$row[3]."</span>";
    
                     
                        echo "</div>";
                        echo "</div>";
}
                   echo " </div>";
                echo " </div>";
            echo " </div>";
            echo " </div>";
?>