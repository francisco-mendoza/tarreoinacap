/**
 * Created by franciscomendozaroumat on 24-04-17.
 */



$( document ).ready(function() {
    var validRut = true;

    //$('#rut').Rut();

    $('#rut').Rut({

        on_error: function(){
            //$('#errorRut').show();
            $('#errores').empty();
            $("#errores").append('<p style="color: red;">Rut Incorrecto</p>');
            validRut = false;

            // $("#rut").css("border","1px solid #FF3D3D");
            // $("#rut").css("background-color","#FFF");
        },
        on_success: function(){
            $('#errores').empty();
            validRut = true;
        },

        format_on: 'keyup'
    });


    $(".swal2-confirm").click(function(){
//	window.location.href = 'http://tarreostgosur.cl';
    });

    $("#btnRegistro").click(function(){
        $('#rut').Rut({
            on_error: function(){
                $('#errores').empty();
                $("#errores").append('<p style="color: red;">Rut Incorrecto</p>');
                validRut = false;
            },
            on_success: function(){
                $('#errores').empty();
                validRut = true;
            },
            //format_on: 'keyup'
        });

        var nombre   = $("#nombre").val();
        var apellido = $("#apellido").val();
        var rut      = $("#rut").val();
        var email    = $("#email").val();
        var carrera  = $("#carrera").val();
        var token    = $('#token').val();

        registro(nombre,apellido,rut,email,carrera,token,validRut);
    });

});

function registro(nombre,apellido,rut,email,carrera,token,validRut){
    var cargando = $('#cargando');
    var errorMensaje = "";
    var validacion = true;

    // debugger;
    var dominioMail = "";
    dominioMail = email.split('@')[1];

    //validacion rut
    if(validRut == false){
        errorMensaje = "Rut Incorrecto";
        validacion = false;
        $("#rut").focus();
    }
    else if(nombre == ""){
        errorMensaje = "Ingrese Nombre";
        validacion = false;
        $("#nombre").focus();
    }
    else if(apellido == ""){
        errorMensaje = "Ingrese Apellido";
        validacion = false;
    }
    else if(rut == ""){
        errorMensaje = "Ingrese Rut";
        validacion = false;
    }
    else if(email == ""){
        errorMensaje = "Ingrese Email";
        validacion = false;
    }
    else if(dominioMail != "inacapmail.cl"){
        errorMensaje = "Debe ingresar correo de Inacap";
        validacion = false;
    }
    else if(carrera == ""){
        errorMensaje = "Ingrese Carrera";
        validacion = false;
    }



    if(validacion){
        $('#errores').empty();
        $.ajax({
            url:   '/registrar',
            type:  'post',
            data: {
                _token: token,
                nombre:nombre,
                apellido:apellido,
                rut:rut,
                email:email,
                carrera:carrera
            },
            beforeSend: function() {
                cargando.show();
                cargando.append('<img src="images/logo.png" alt="">');
                cargando.append('<div class="preloader"></div>');
            },
            success:  function (response) {
                if(response == "registrado"){
                    swal({
                       title: 'Registrado!',
                        text: 'Te esperamos en Tarreo Inacap!',
                        type: 'success',
                   }).then(function(){
                      window.location.href = 'http://tarreostgosur.cl';
		   });
                }else if(response == "existe"){
                    swal(
                        'Usuario Registrado!',
                        'Ya te encuentras registrado!',
                        'error'
                    )
                }

                cargando.empty();
                cargando.fadeOut();

            },
            error: function(){
                cargando.empty();
                cargando.fadeOut();
                swal(
                    'ERROR!',
                    'Ha ocurrido un error!',
                    'error'
                )

            }
        });
    }else{
        $('#errores').empty();
        $("#errores").append('<p style="color: red;">'+errorMensaje+'</p>');
    }




}
