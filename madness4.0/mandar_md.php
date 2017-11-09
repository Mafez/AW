<?php session_start();
error_reporting(0);
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
    <link href="css/agregar.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    

</head>

<body>
    <?php include 'navbar.php';?>

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <br>
                <br>
                <br>
                <div class="todo">
                    <div class="ini">Mandar mensaje directo</div>
                    <form class="form form-horizontal" method="POST" action="php/md.php" id="validar">
                        <input type="text" name="asunto" placeholder="Asunto" id="asunto" class="text1" />
                        <input type="text" name="destinatario" placeholder="Destinatario" id="destinatario" class="text1" />
                        <textarea class="form-control"rows="10"  name="contenido" id="cont" ></textarea>
                        
                        <button type="submit" id="enviar" name="enviar" class="btn btn-md  btn-success">Enviar</button>
                          <?php $variable = $_GET['alert'];?>
     <script>  var variable = <?php echo$variable ?>;          
                                if( variable == 1) {
                                    swal("Error","Destinatario incorrecto", "error");
                                    }</script>
                                             
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <!-- meeeeeeeeeeeeeeenuuuuuuuuuuuuuuuuuuu-->
                <?php include 'menu_lateral.php';?>
            </div>
        </div>
    </div>

</body>

</html>
