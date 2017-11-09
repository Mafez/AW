<?php session_start(); 
include 'php/CheckSesion.php';?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Documentación para el profesor</title>
    <!--<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>-->
    <script src="js/jquery-1.11.1.min.js" type="application/javascript"></script>
    <!--Esto es para el menu-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js" type="application/javascript"></script>
    <script src="js/holder.js" type="application/javascript"></script>
    <link href="css/carrousel.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/inicio.css" rel="stylesheet">
</head>

<body>
    
    <?php include 'navbar.php';?>
    <div class="container">
        <div class="row">
           
            <div class="col-md-9 col-xs-12">
                
                   

                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading"><a href="Docprofesor/madness3.4.2.zip">Código Fuente.</a><span class="text-muted">Código para descargar</span></h2>
                        <p class="lead">Aquí se encuentran todos los archivos y carpetas del código de nuestra práctica</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" src="img/codigo.png" alt="Calendario">
                    </div>
                </div>

                <hr class="featurette-divider">
                   <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 class="featurette-heading"><a href="documentacion.php">Memoria</a><span class="text-muted">Memoria Final de la Práctica</span></h2>
                        <p class="lead">Documentación donde podemos encontrar un manual de usuario, explicaciones de nuestra pagina, funcionalidades, etc.</p>
                    </div>
                    <div class="col-md-5  col-md-pull-7">
                        <img class="featurette-image img-responsive center-block" src="img/documentos.jpg" alt="Documentos">
                    </div>
                </div>
            </div>
 <!-- meeeeeeeeeeeeeeenuuuuuuuuuuuuuuuuuuu-->
            <div class="col-md-3 col-xs-12">
                <?php include 'menu_lateral.php';?>
            </div>
        </div>
    </div>

</body>

</html>
