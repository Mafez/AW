<?php

 
 //echo "<script type='text/javascript' src='google.js'</script>";

include 'conexion.php';

 //echo"<link rel='stylesheet' href='css/Contenido.css'>";
/*echo"<script type='text/javascript'> var miDato = localStorage.getItem('bar'); </script>";
      $variablePHP = "<script> document.write(miDato) </script>";*/
$variablePHP = $_GET['id'];
include 'tildes.php';
$v = ConversionTildes($variablePHP);
$query = sprintf("SELECT * FROM  contenido WHERE contenido.Nombre = '%s'",$v); // arreglar con enlace al bar en el que pinches // '.$variablePHP.'

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link)); //PETAAAAAAAAAA

while( $row = mysqli_fetch_row($result)){ //no entra aunque la variable es 100 Montaditos
echo "<h1>";
echo $row[0];
echo "</h1>";
echo "<div class='cuadro'>";
echo "<img id='clover' class='img-responsive img-titulo' src='".$row[1]."' alt='imagen'>";
echo "<div class='descripcion'>";
echo "<h2>Descripción</h2>";
echo $row[2];
echo  "<h2> Dirección </h2>"; 
echo $row[3];
echo "<br>";
include  'apigoogle.php';
$j = $row[3];
$coor = ConversionLetras($j);
echo "<div id='map' ></div>";
$estr = getCoordinates($coor);
  
echo"<script>

      function initMap() {
        
        var myLatLng = {lat:$estr[0], lng: $estr[1]};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: myLatLng
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          
        });
      }
    </script>";
   echo "<script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAPcGn8qxO568Djk9xVWus4FFAKVLRi1FY&callback=initMap'>
    </script>";
                        
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
