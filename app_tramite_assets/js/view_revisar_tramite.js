$(document).ready(function(){
    console.log("OHHHH");
    $("#observaciones").val("");
    $("#form-funcionario").on("submit", function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estás Seguro?',
            text: "Verifica los datos del ciudadano",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Aprobar el Trámite',
            cancelButtonText: 'Cancelar acción'
            }).then((result) => {
            if (result.value) {
                $("#div_loading").show();
                $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data:{id_tramite:$("#id_tramite").val()},
                dataType: "json",
                async: false,
                    success:function(data)
                    {
                        if (data.respuesta == "exito")
                        {
                            Swal.fire(
                                'Correcto!',
                                'El trámite ha sido aprobado',
                                'success'
                            )
                            var submitButton = document.getElementById("submit_button");
                            submitButton.setAttribute("disable","");
                            setTimeout(function() {
                              window.location.replace(data.pantalla_siguiente);
                          },2000);
                        }
                        else
                        {
                            Swal.fire(
                                'Error',
                                data.mensaje,
                                'error'
                            )
                        }
                    }
                });
            }
        })
    }); // FIN DEL EVENT SUBMIT

    $("#observaciones_button").on("click", function(e){
      if($("#observaciones").val() == ""){
        Swal.fire(
          'Error',
          'El campo de observaciones está vacío',
          'error'
        )
      } else {
        $.ajax({
          url:"http://localhost/CodeIgniter/app_tramite.php/Tramite/generar_observacion/",
          type:"POST",
          dataType: "json",
          data: {id_tramite:$("#id_tramite").val(), observaciones:$("#observaciones").val()},
          async: false,
          success: function(data)
          {
            console.log(data);
            if (data.respuesta == "exito")
            {
                Swal.fire(
                    'Correcto!',
                    'El trámite ha sido aprobado',
                    'success'
                )
                $("#submit_button").prop('disable',true);
                /* setTimeout(function() {
                  window.location.replace(data.pantalla_siguiente);
              },2000); */
            }
            else
            {
                Swal.fire(
                    'Error',
                    data.mensaje,
                    'error'
                )
            }
          }
        });
      }
    });
});

/* --- FUNCIONES PARA EL FORMULARIO ---- */
