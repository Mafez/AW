<?php session_start(); 
include 'php/CheckSesion.php';?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Quienes somos </title>
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
                
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Preguntas frecuentes<span class="text-muted"></span></h2>
                            <p class="lead">Toda la información que necesites saber acerca de esta web</p>
                        </div>
                        <div class="col-md-5">
                            <img class="featurette-image img-responsive center-block" src="img/quienes.png" alt="quienes somos">
                        </div>
                    </div>

                <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">¿Quienes Somos?</h2>
                <p class="lead"> Somos un grupo de cuatro estudiantes de ingeniería informática, que estamos realizando una práctica para la asignatura de "Aplicaciones Web" en la Universidad Complutense de Madrid. Nuestros nombres:</p>
                 <ul class="nombres">
                                    <li>  Adrián Guevara</li>
                                    <li>  Diego González </li>
                                    <li>  Manuel Antonio Fernández</li>
                                    <li>  Jorge González </li>
                                    
                                </ul>
            </div>
          
        </div>
                
                     <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">¿Por qué existe?</h2>
                <p class="lead"> Nuestra página web fue creada ante la inexistencia de páginas o apps dedicadas de manera exclusiva al ocio en la Comunidad de Madrid en la que los propios usuarios pudieran crear el contenido de la web incluyendo ellos sus lugares favoritos o sus fiestas favoritos.</p>
            </div>
          
        </div>
                
                     <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">¿Cómo contactarnos?</h2>
                <p class="lead"> Nuestro Email de contacto: madnessmadriz@gmail.com</p>
            </div>
          
        </div>
               
                <hr class="featurette-divider">
            </div>
 <!-- meeeeeeeeeeeeeeenuuuuuuuuuuuuuuuuuuu-->
            <div class="col-md-3 col-xs-12">
                <?php include 'menu_lateral.php';?>
            </div>
        </div>
    </div>

</body>

</html>
