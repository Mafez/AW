<?php session_start(); 
error_reporting(0);
include 'php/CheckSesion.php';?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Agregar Contenido</title>
    <!--<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>-->
    <script src="js/jquery-1.11.1.min.js" type="application/javascript"></script>
    <!--Esto es para el menu-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js" type="application/javascript"></script>
    <link href="css/carrousel.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/agregar.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
</head>

<body>
     <?php include 'navbar.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="todo">
                    <div class="ini">Agregar Contenido</div>
                    <div class="cuadro">
                        <form class="form-horizontal" enctype ="multipart/form-data" method="POST" action="php/contenido.php">
                            <p>Titulo
                                <input type="text" name="Titulo" id="Titulo" class="text1" /><i class="icon-star"></i>
                            </p>
                            <p>Indique el tipo de contenido:
                                <input type="radio" name="tipo" id="Tipo" value="Bar" /> Bar
                                <input type="radio" name="tipo" id="Tipo" value="Discoteca" /> Discoteca
                                <input type="radio" name="tipo" id="Tipo" value="Pub" /> Pub
                                <input type="radio" name="tipo" id="Tipo" value="Concierto" /> Concierto
                                <input type="radio" name="tipo" id="Tipo" value="Festival" /> Festival
                                <i class="icon-star"></i>
                            </p>
                            <p>Descripcion   </p><i class="icon-star"></i>
                                <textarea class="form-control"rows="10"  name="Descripcion" id="Descripcion" ></textarea>
                                <br>
                            <i class="icon-star"></i><input type="file" name ="imagen" id="imagen" class="btn-warning"/>
                            
                            <br>

                            <input type="text" name="Direccion" placeholder="c/, av/, etc." id="Direccion" class="text1" /><i class="icon-star"></i>
                            <br>
                            <input type="text" name="HorarioA" placeholder="Hora Apertura" id="HorarioA" class="text1" />
                            

                            <input type="text" name="HorarioC" placeholder="Hora Cierre" id="HorarioC" class="text1" /><i class="icon-star"></i>
                            <br>
                            <input type="text" name="FechaIni" placeholder="Fecha Inicio" id="FechaIni" class="text1" />
                            

                            <input type="text" name="FechaFin" placeholder="Fecha Fin" id="FechaFin" class="text1" />
                            <br>
                            <input type="text" name="Web" placeholder="www..." id="Web" class="text1" /><i class="icon-star"></i>
                            <br>
                             <br>
                            <button type="submit" class="btn btn-md  btn-success">Agregar</button>
                            
                            
  <?php $variable = $_GET['alert'];?>
     <script>  var variable = <?php echo$variable ?>;          
                                if( variable == 1) {
                                    swal("Error","Formato de la imagen incorrecto", "error");
                                    }else if (variable == 2) {
                                          swal("Atención","Debe rellenar todos los campos con *", "warning");
                                    } </script>
                                                        


                        </form>
                    </div>
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
