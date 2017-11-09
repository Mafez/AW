<?php session_start(); 
include 'php/CheckSesion.php';?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Inicio</title>
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
                            <h2 class="featurette-heading"><a href="bares.php">Los mejores Bares de Madrid.</a><span class="text-muted">Quieres una birra?</span></h2>
                            <p class="lead">La selección de los mejores bares de la capital con todo lo necesario para que los disfrutes al máximo.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="featurette-image img-responsive center-block" src="img/Bar.png" alt="Bar">
                        </div>
                    </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 class="featurette-heading"><a href="pubs.php">Pubs.</a><span class="text-muted">Do you know what I mean?</span></h2>
                        <p class="lead">Vuestras mejores elecciones para disfrutar de un ambiente relajado acompañado de buena música.</p>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <img class="featurette-image img-responsive center-block" src="img/pub.png" alt="Pubs">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading"><a href="discotecas.php">Discotecas.</a><span class="text-muted">A mover el esqueleto se ha dicho.</span></h2>
                        <p class="lead">Las mejores salas para pasar una noche madrileña inolvidable moviendote con los exitos del momento.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" src="img/discoteca.png" alt="Discotecas">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <a href="inicio.html">
                            <h2 class="featurette-heading "><a href="conciertos.php">Conciertos.</a><span class="text-muted">Unos momentos inolvidables.</span></h2>
                            <p class="lead">La mejor manera de disfrutar de tu grupo favorito.</p>
                        </a>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <a href="inicio.html">
                            <img class="featurette-image img-responsive center-block" src="img/concierto.png" alt="Conciertos">
                        </a>
                    </div>

                </div>
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading"><a href="festivales.php">Festivales.</a><span class="text-muted">Ponte a tono con todo lo bueno.</span></h2>
                        <p class="lead">¿Un grupo te parece poco? Las grandes citas de los mejores grupos de música en vivo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" src="img/festival.png" alt="Festivales">
                    </div>
                </div>

                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 class="featurette-heading"><a href="usuarios.php">Usuarios.</a><span class="text-muted">Conoce a los usuarios más activos.</span></h2>
                        <p class="lead">Comprueba si te encuentras entre los mejores de la web.</p>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <img class="featurette-image img-responsive center-block" src="img/usuarios.png" alt="Usuarios">
                    </div>
                </div>

                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading"><a href="calendario.php">Calendario.</a><span class="text-muted">Anota los eventos que no te quieres perder.</span></h2>
                        <p class="lead"> Para que no te pierdas nada de la fiesta madrileña aquí puedes saber dónde ir en cada momento.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" src="img/calendario1.png" alt="Calendario">
                    </div>
                </div>

                <hr class="featurette-divider">
                   <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 class="featurette-heading"><a href="documentacion.php">Documentación para el Profesor. </a><span class="text-muted">El título es un enlace.</span></h2>
                        <p class="lead"> Aquí esta toda la documentación sobre la página, memoria y código fuente.</p>
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
