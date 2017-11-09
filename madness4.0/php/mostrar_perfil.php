<?php
include 'conexion.php';

//$variablePHP = $_GET['id'];
//include 'tildes.php';
//$v = ConversionTildes($variablePHP);
$query = sprintf("SELECT * FROM  usuarios WHERE usuarios.usuario = '%s'", $_SESSION["id_usuario"]); 

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));

while( $row = mysqli_fetch_row($result)){ 
echo "<h1>";
echo $row[0];
echo "</h1>";
echo "<div class='cuadro'>";
//echo "<img id='clover' class='img-responsive img-titulo' src='".$row[1]."' alt='imagen'>";
echo "<div class='descripcion'>";
echo "<h2>Descripcion</h2>";
echo $row[2];
echo  "<h2> Direccion </h2>"; 
echo $row[3];
echo "<br>";
include  'apigoogle.php';
$j = $row[3];
$coor = ConversionLetras($j);
echo "<div id='map' ></div>";
$estr = getCoordinates($coor);
echo "<h2> Horario</h2>";
echo "<p>".$row[4]." - ".$row[5]. "</p>";

if($row[9]!= NULL && $row[10]!= NULL){
    echo "<h2> Fechas </h2>";
    echo "<p>".$row[9]." - ".$row[10]. "</p>";
}
echo "<h2> SitioWeb </h2>";
echo "<a href=".$row[6].">$row[0]</a>";

echo "</div></div>";


}


?>
