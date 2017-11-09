<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="menu_normal">
        <ul class="form">
            <li><a class="profile" href="perfil.php"><i class="icon-user"></i>  <?php echo $_SESSION["id_usuario"]?></a></li>
            <li ><a class="messages" href="notificaciones.php"><i class="icon-envelope-alt"></i>    Notificaciones  <?php include 'php/numero.php' ?>    </a></li>
            <li><a class="mi_calendario" href="calendario.php"><i class="icon-calendar"></i>Mi Calendario</a></li>
            <li><a class="contenido" href="agregar-contenido.php"><i class="icon-edit"></i>  Agregar contenido</a></li>
        </ul>
                                    <img id ="logo"  src="img/madmadrid.png" alt="madnesssmadrid">

    </div>
</body>
</html>