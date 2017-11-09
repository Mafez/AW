<?php session_start();
include 'php/CheckSesion.php';?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Notificaciones</title>
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
                
                    <br>
                    <br>
                    <br>
                     <div class="well">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#mdenviados" data-toggle="tab">MD enviados</a></li>
                        <li><a href="#mdrecibidos" data-toggle="tab">MD recibidos</a></li>
                        <li><a href="#tuscomentarios" data-toggle="tab">Tus comentarios</a></li>
                        <li><a href="#suscomentarios" data-toggle="tab">Comentarios a tu contenido</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="mdenviados">
                            <?php include 'php/mdenviados.php'?>
                        </div>
                        <div class="tab-pane fade" id="mdrecibidos">
                            <?php include 'php/mdrecibidos.php'?>
                        </div>
                        <div class="tab-pane fade" id="tuscomentarios">
                            <?php include 'php/tuscomentarios.php'?>
                        </div>
                        <div class="tab-pane fade" id="suscomentarios">
                            <?php include 'php/suscomentarios.php'?>
                        </div>
                    </div>
                    
                    <input type="button" class="btn btn-md  btn-success" value="Mandar MD" onClick="window.location.href='mandar_md.php'">

                
            </div>
            <div class="col-md-3 col-xs-12">
                <!-- meeeeeeeeeeeeeeenuuuuuuuuuuuuuuuuuuu-->
                <?php include 'menu_lateral.php';?>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
