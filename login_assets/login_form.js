$(document).ready(function(){
    $("#login-form").on("submit", function(e){
        console.log("READY!");
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr("method"),
            data: datos,
            url: $(this).attr("action"),
            dataType: "json",
            success: function(data)
            {
                var resultado = data;
                if (resultado.respuesta == "exito")
                {
                    Swal.fire(
                        'Correcto',
                        'Bienvenido(a) '+resultado.usuario+' !! ',
                        'success'
                      )
                    setTimeout(function() {
                        window.location.replace(resultado.pantalla);
                    },2000);
                }
                else
                {
                    Swal.fire({
                        type: 'error',
                        title: 'Error',
                        text: 'Usuario y Passwords incorrectos'
                      })
                }   
            }
        });
    });
});