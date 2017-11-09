// Meter el xcript del cuadro rojo a la vez que este ??????




expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

$("#registro").click(function () {

    if ($("#Nombre").val() == '' || $("#E-mail").val() == '' || $("#Usuario").val() == '' || $("#Contraseña").val() == '' || $("#Confirmar").val() == '') {
        swal("Opss..","Debe proporcionar todos los campos solicitados. Por favor, inténtelo de nuevo.", "error");
        return false;
    }

    if (!expr.test($("#E-mail").val())) {
        swal("Mira bien lo que pones","Correo electronico no valido", "error");
        //$('#E-mail').style.border = "2px solid red";
        return false;
    }

    if ($("#Contraseña").val() != '' && $("#Confirmar").val() != '') {


        // Validar el tamaño de la contraseña
        if ($("#Contraseña").val().length < 8) {
            swal("Atencion","La contraseña debe tener al menos 8 caracteres. Por favor, inténtelo de nuevo.", "warning");
            $("#Contraseña").focus();
            return false;
        }

        // Validar composición de la contraseña
        var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
        
        if (!re.test($("#Contraseña").val())) {
            swal("Deberias saber...", "La contraseña debe contener al menos un número, una letra minúscula y una mayúscula. Por favor, inténtelo de nuevo.","warning");
            return false;
        }
        // Validar contraseña y confirmación de la contraseña
        if ($("#Contraseña").val() != $("#Confirmar").val()) {
            swal("Atencion!", "Su contraseña y la confirmación de la contraseña no coinciden. Por favor, inténtelo de nuevo.", "warning");
            $("#Contraseña").focus();
            return false;
        }



        // Limpiar los campos contraseña y confirmación de la pagina de registro.
        //$("#Contraseña").val() = "";
        //$("#Confirmar").val() = "";
    }

});
