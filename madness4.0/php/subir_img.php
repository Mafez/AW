<?php
// comprobamos que se ha enviado el formulario
    // comprobar que han seleccionado una foto
    if($_FILES['imagen']['name'] != ""){ // El campo foto contiene una imagen...
         $imagen_temporal = $_FILES['imagen']['name'];
        // Primero, hay que validar que se trata de un JPG/GIF/PNG
        $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
        $extension = end(explode(".",$imagen_temporal));
        if ((($_FILES['imagen']["type"] == "image/gif")
                || ($_FILES['imagen']["type"] == "image/jpeg")
                || ($_FILES['imagen']["type"] == "image/png")
                || ($_FILES['imagen']["type"] == "image/pjpeg"))
                && in_array($extension, $allowedExts)) {
            // el archivo es un JPG/GIF/PNG, entonces...
            
            $extension = end(explode('.', $imagen_temporal));
            $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
           // $directorio = dirname("/public_htm/contenido"); // directorio de tu elección
           $directorio = /*$_SERVER['DOCUMENT_ROOT'].*/'../contenido/';
            // almacenar imagen en el servidor
            move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$foto);
            $ruta =  $directorio.$foto;
           
            //$minFoto = 'min_'.$foto;
            //$resFoto = 'res_'.$foto;
            //resizeImagen($directorio.'/', $foto, 65, 65,$minFoto,$extension);
            //resizeImagen($directorio.'/', $foto, 500, 500,$resFoto,$extension);
            //unlink($directorio.'/'.$foto);
            
        } else { // El archivo no es JPG/GIF/PNG
                  header("Location: ../agregar-contenido.php?alert=1");
            exit;
          }
        
    } else { // El campo foto NO contiene una imagen
        header("Location: ../agregar-contenido.php?alert=2");
        exit;
    }
        


?>