<?php

 function ConversionTildes($cadena) 
    { 
        
       // echo '<script type="text/javascript">alert("hello!");</script>';
    return str_replace(array("á","é","í","ó","ú","ñ","Á","É","Í","Ó","Ú","Ñ"), array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;",
                                                    "&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&Ntilde;"), $cadena);  
       // echo"hola mundo";
      //  echo '<script type="text/javascript">alert("'.$arg[0].'");</script>';
       
    }

 function ConversionLetras($cadena) 
    { 
        return str_replace(array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;",
                                                    "&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&Ntilde;"),array("á","é","í","ó","ú","ñ","Á","É","Í","Ó","Ú","Ñ"),  $cadena);     
    }

?>
