$(document).ready(function(){
    console.log("YEAHH");
    $("#main_form").on("submit", function(e){
        e.preventDefault();
        var datos = new FormData(document.getElementById("main_form"));
        Swal.fire({
            title: '¿Estás Seguro?',
            text: "Verifica tus datos antes de guardarlos",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, guardar',
            cancelButtonText: 'Cancelar acción'
            }).then((result) => {
            if (result.value) {
                $("#div_loading").show();
                $.ajax({
                type: $(this).attr("method"),
                data: datos,
                url: $(this).attr("action"),
                dataType: "json",
                processData: false,
                contentType: false,
                async: false,
                cache: false,
                    success:function(data)
                    {
                        $("#div_loading").hide();
                        if (data.respuesta == "exito")
                        {
                            Swal.fire(
                                'Correcto!',
                                'Tu Trámite se ha guardado de forma correcta.',
                                'success'
                            )
                            $("#submit_button").prop('disable',true);
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
});

/* --- FUNCIONES PARA EL FORMULARIO ---- */

//cuando es propietario se muestran estos documentos
function event_mostrar_extra_docs(event)
{
  var extra_row = $("#extra_docs_row");
  if( extra_row.length != 0)
  {
    $("#extra_docs_row").remove();
  }

  if ( event.value == "no")
  {
    var innerField = "";
    innerField += "<div id='extra_docs_row' class='row'>";
    innerField += "<div class='col-md-6'>";
    innerField += "<div class='form-group'>";
    innerField += "<label>Identificación de Solicitante: INE, Pasaporte o Cédula Profesional</label>";
    innerField += "<input accept='.jpg, .jpeg, .png ,.pdf, .rar, .zip' type='file' name='Doc_Ine_Soli' multiple=''>";
    innerField += "</div>";
    innerField += "</div>";
    innerField += "</div>";
    $("#content-wrapper-fecha-recep").append(innerField);
  }
}

//cuando es persona moral se muestran estos documentos
function event_mostrar_extra_docs_tipo(event)
{
  var extra_row = $("#extra_docs_row_tipo");
  if( extra_row.length != 0)
  {
    $("#extra_docs_row_tipo").remove();
  }

  if ( event.value == "moral")
  {
    var innerField = "";
    innerField += "<div id='extra_docs_row_tipo' class='row'>";
    innerField += "<div class='col-md-6'>";
    innerField += "<div class='form-group'>";
    innerField += "<label>Poder Notarial para Representación de Persona Moral</label>";
    innerField += "<input accept='.jpg, .jpeg, .png ,.pdf, .rar, .zip' type='file' name='Doc_Poder_Moral' multiple=''>";
    innerField += "</div>";
    innerField += "</div>";
    innerField += "</div>";
    $("#content-wrapper-fecha-recep").append(innerField);
  }
}
