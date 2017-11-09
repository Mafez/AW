<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/carrousel.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-wrapper">
        <div class="container margen">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="inicio.php">Madness Madrid</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="inicio.php">Inicio</a></li>
                            <li><a href="calendario.php">Calendario</a></li>
                            <li><a href="usuarios.php">Usuarios</a></li>
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lugares <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="bares.php">Bares</a></li>
                                    <li><a href="pubs.php">Pubs</a></li>
                                    <li><a href="discotecas.php">Discotecas</a></li>
                                    <li><a href="conciertos.php">Conciertos</a></li>
                                    <li><a href="festivales.php">Festivales</a></li>
                                </ul>
                            </li>
                             <li><a href="faq.php">Quienes somos</a></li>
                        </ul>
                        <a class="navbar-brand" id ="cerrar" href="php/cerrar.php">Cerrar Sesión</a>
                        
                        <!-- Menú -->
                        <ul class="menu_movil nav navbar-nav">
                            
                            <li><a href="perfil.php">Perfil</a></li>
                            <li><a href="#Usuario">Usuario</a></li>
                            <li><a class="messages" href="notificaciones.php">Notificaciones</a></li>
                            <li><a href="calendario.php">Mi Calendario</a></li>
                            <li><a href="agregar-contenido.php">Agregar contenido</a></li>
                        </ul>
                        
                    </div>
                </div>
            </nav>

        </div>
    </div>
    
    

</body>

</html>
