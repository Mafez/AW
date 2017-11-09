
<?php error_reporting(0) ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="css/carrousel.css">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Madness Madrid</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
</head>


<body>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide img-responsive" src="img/disc.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Discotecas</h1>
                        <p>Las mejores discotecas de todo madrid, para más información información en la descripción</p>
                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide img-responsive" src="img/fest.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Festivales</h1>
                        <p>¿Tienes ganas de música?¿Quieres escuchar a tus grupos favoritos en el mismo dia? Únete a Madness o inicia sesión.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide img-responsive" src="img/bebida.png" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Pubs</h1>
                        <p>Prueba con nosotros los distintos locales con el mejor ambiente y la mejor compañia. </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->


    <!-- login
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-3">

            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-6">
                <!--ESTO ES LO NUESTRO -->
                <div class="todo">
                    <div class="ini">Registro</div>
                    <div class="form">
                        <form class="form-horizontal" method="POST" action="php/registroFun.php" id="validar">
                            <input type="text" name="Nombre" placeholder="Nombre" id="Nombre" class="text1" value="" />
                            <input type="text" name="E-mail" placeholder="E-mail" id="E-mail" class="text1" />
                            <input type="text" name="Usuario" placeholder="Usuario" id="Usuario" class="text1" />
                            <input type="password" name="Contraseña" placeholder="Contraseña" id="Contraseña" class="text1" />
                            <input type="password" name="Confirmar" placeholder="Confirmar Contraseña" id="Confirmar" class="text1" />
                            <br>
                            <button type="submit" id="registro" name="registro" class="btn btn-md  btn-success">Registrar</button>
                            <?php $variable = $_GET['booljs']; 
                            ?>
                            <script> 
                                 var variable = <?php echo$variable ?>;
                                if( variable == 1) {
                                    swal("Opss..","Los datos introducidos pertenecen a un usuario ya existente. Por favor, inténtelo de nuevo.", "error");
                                    }
                            </script>
                            <?php 
                                $bool = 0;
                    ?>
                            <div class="g-recaptcha" data-sitekey="6LeviRsUAAAAAPNoFQl1ezmyp3T1HQ3mEJfQlDR4"></div>
                        </form>
                         <form method="get" action="registro.php">
                            <input type="button" class="btn btn-md  btn-success" value="Login" onClick="window.location.href='index.php'">
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-3">

            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->


        <!-- START THE FEATURETTES -->


        <div class="row featurette">
            <div class="col-md-7">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
            </div>
        </div>

        
        <!-- /END THE FEATURETTES -->
          

        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

    </div>
    <!-- /.container -->
    <script src="js/jquery-1.11.1.min.js" type="application/javascript"></script>
    <script src="js/bootstrap.min.js" type="application/javascript"></script>
    <script src="js/validate.js" type="application/javascript"></script>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   <script type="application/javascript">
                document.getElementById('E-mail').addEventListener("change", function() {
                    if (!expr.test(this.value)) {
                        
                        document.getElementById('E-mail').style.border = "2px solid red";
                        // document.getElementById('error_email').setAttribute("class", "show");
                        // document.getElementById('ok_email').setAttribute("class", "hidden");
                        this.focus();
                    } else {
                        document.getElementById('E-mail').style.border = "2px solid green";
                        //document.getElementById('ok_email').setAttribute("class", "show");
                        // document.getElementById('error_email').setAttribute("class", "hidden");
                    }
                }, false);
            </script>

            
            
</body>
</html>
