/**
 * Created by franciscomendozaroumat on 24-04-17.
 */



$( document ).ready(function() {


    $("#btnRegistro").click(function(){

        var nombre   = $("#nombre").val();
        var apellido = $("#apellido").val();
        var rut      = $("#rut").val();
        var email    = $("#email").val();
        var carrera  = $("#carrera").val();

        registro();
    });

});

function registro(){
    swal(
        'Oops...',
        'Something went wrong!',
        'error'
    )
}