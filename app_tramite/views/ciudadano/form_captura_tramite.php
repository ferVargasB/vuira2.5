
<!DOCTYPE html>

<html lang="es">
<!-- ************INICIO HEADER***************** -->
<!-- ************FIN HEADER***************** -->
<?php
$this->load->library('form_validation'); 
echo validation_errors();
?>


<body>
<div id="div_loading" style="display:none;position: absolute;
    top: 50%;
    left: 50%;
    height: 100%;
    width: 100%;
    z-index: 9999999;">
                              <img src="<?php echo base_url().'app_tramite_assets/img/loading_gif.svg'?>" alt="" width="300" height="300">
                            </div>

<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div id="page-wrapper">
<!-- *************** INICIO HEADER *************-->
<!-- *************** FIN HEADER *************-->

<!-- ************ INICIO NAV ***************** -->
<!-- ************FIN NAV***************** -->


<!-- ************INICIO SECCION***************** -->
    <div class="clearfix"></div>
    <div id="page-content">
      <div class="container">
        <div class="row">
          <h2>Trámite Prueba</h2><br>
          <div id="panel-captura-avaluo" class="panel">
            <div class="panel-body">
            <h3 class="title-hero ">
                    Llena el formulario con los datos solicitados
            </h3>
            <input type="submit" id="submit_button" form="main_form" class="btn btn-success float" name="submit" value="Guardar Trámite">
              <form id="main_form" method="POST" action="<?php echo base_url().'app_tramite.php/Tramite/guardar/';?>" enctype="multipart/form-data">
              <div id="panel-datos-generales" class="content-box border-top border-blue">
                  <div class="content-box-wrapper">
                    <h3 class="title-hero">II. DATOS DEL SOLICITANTE</h3>
                    <div class="bordered-row">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Nombre del Propietario</label>
                            <input type="text" class="form-control" name="nombre_propietario">
                          </div>
                          <div class="form-group">
                            <label>Teléfono</label>
                            <input type="tel" class="form-control" name="telefono" >
                          </div>
                          <div class="form-group">
                            <label>Correo Eléctronico</label>
                            <input type="email" class="form-control" name="correo">
                          </div>
                          <div class="form-group">
                            <label>Tipo de Trámite</label>
                            <select class="chosen-select"  data-placeholder="Seleccione una Opción" name="tipo_tramite" value="Seleccione tipo de trámite">
                              <option value="1">Asignación de Clave Catastral</option>
                              <option value="2">Modificación de Clave Catastral</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- DIV content-box-wrapper de CUENTAS SUSPENDIDAS-->
                </div> <!-- DIV PANEL-CUENTA-SUSPENDIDA 1-->


                <div id="panel-mensajes" class="content-box border-top border-blue">
                  <div class="content-box-wrapper">
                    <h3 class="title-hero">III. DATOS ADICIONALES</h3>
                    <div class="bordered-row">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Escriba información adicional para el funcionario</label>
                            <textarea rows="4" type="text" class="form-control"  name="informacion_adicional" style="resize:none;" value="">
                            </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- DIV content-box-wrapper de CUENTAS SUSPENDIDAS-->
                </div> <!-- DIV PANEL-MENSAJES-->
                
                
                <div id="panel-fecha_recep" class="content-box border-top border-blue">
                  <div id="content-wrapper-fecha-recep" class="content-box-wrapper">
                    <h3 class="title-hero">I. Documentos del Inmueble</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">¿Es Propietario?</label><br>
                          <label class="radio-inline"><input type="radio" id="check-unidad_supS" class="sup_inmueble_swi" name="es_propietario" value="si" onclick="event_mostrar_extra_docs(this)" checked="">Si</label>
                          <label class="radio-inline"><input type="radio" id="check-unidad_supN" class="sup_inmueble_swi" name="es_propietario" value="no" onclick="event_mostrar_extra_docs(this)">No</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="radio-inline"><input type="radio" id="check-unidad_supM" class="sup_inmueble_swi" name="tipo_persona" value="moral" onclick="event_mostrar_extra_docs_tipo(this)">Personal Moral</label>
                        <label class="radio-inline"><input type="radio" id="check-unidad_supH" class="sup_inmueble_swi" name="tipo_persona" value="fisica" onclick="event_mostrar_extra_docs_tipo(this)" checked="">Persona Física</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Identificación de Propietario: INE, Pasaporte o Cédula Profesional</label>
                          <input accept=".jpg, .jpeg, .png ,.pdf, .rar, .zip" type="file" name="Doc_Identificacion" multiple="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Oficio de Traza Autorizada por la Dirección General de Desarrollo Territorial</label>
                          <input accept=".jpg, .jpeg, .png ,.pdf, .rar, .zip" type="file" name="Doc_Oficio_Traza" multiple="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Recibo Predial Actualizado General y/o Cuentas Prediales Individuales</label>
                          <input accept=".jpg, .jpeg, .png ,.pdf, .rar, .zip" type="file" name="Doc_Resibo_Predial" multiple="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Plano Digital de Traza Autorizada por la Dirección General de Desarrollo Territorial</label>
                          <input accept=".jpg, .jpeg, .png ,.pdf, .rar, .zip" type="file" name="Doc_Plano_Digital" multiple="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Presentar Plano Físico de Traza Autorizada por la Dirección General de Desarrollo Territorial</label>
                        <label>(Se lleva a oficinas)</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Acta Constitutiva</label>
                        <input accept=".jpg, .jpeg, .png ,.pdf, .rar, .zip" type="file" name="Doc_Acta" multiple="">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Escritura Pública de Propiedad que contenga la Hoja Registral y ampare la Superficie Registrada (en caso de no contener la hoja registral anexar copia de Libertad de Gravamen)</label>
                      <input accept=".jpg, .jpeg, .png ,.pdf, .rar, .zip" type="file" name="Doc_Escritura_Publica" multiple="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </form>
            </div>
          </div>

        </div>
    <!-- de row -->
      </div>
          <!-- container -->
    </div>
<!-- ************FIN SECCION***************** -->


<!-- ************* INICIO FOOTER ***************** -->
          <footer class="page-footer font-small special-color-dark pt-4 footer">
              <div class="container footercontainer">
                <div class="row">
                  <div class="col-lg-6 col-md-12 footerseccion1">
                    <img src="<?php echo base_url().'/login_assets/GALogo.png';?>" width="30%"></img>
                    <h5 class=" sistema">GA</h5>
                    <p class="nombreSistema">Portafolio de Proyectos</p>
                  </div>
                  <div class="col-lg-4 offset-lg-2 col-md-12 footerseccion2">
                    <h5 class="list-unstyled list-inline titulo espacio">GA Asociados</h5>
                    <div>
                      <i  class="espacio glyphicon glyphicon-map-marker" style="float:left;font-size:18px"></i>
                      <p class="espacio ciudad">Guerrero 681-A Zona Centro</p>
                      <p class="espacio ciudad">Irapuato, Gto. M&eacute;xico</p>
                      <i class="glyphicon glyphicon-earphone "  style="float:left;font-size:18px"> </i>
                      <p class="espacio ciudad">(462) 173 2399</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-copyright footerfinal">
                <div class="container" align="center">
                </div>
              </div>
          </footer>
<!-- ************* FIN FOOTER ***************** -->
        </div>
        <!-- page-content-wrapper -->
    <!-- </div> -->
    <!-- FIN sb-site -->
  </body>
</html>


  <style>

      /* ------------Footer------------ */
      .footer{
        background-color: #242424 !important;
        color:white;

      }

      .footercontainer{
        padding-bottom: 30px;
      //	padding-left: 80px;
      }


      .footerfinal{
        color:white;
        background-color: #2E2E2E !important;
        padding-top: 20px;
        padding-bottom: 15px;
      }

    /* Agregado nuevo */
    .fondo-footer
    {
      background: #2e2e2e !important;
    }

    .fondo-page-footer
    {
      background: #242424 !important;
    }

    .sistema{
      font-size: 18px;
      padding-top: 40px;
      font-weight: 800;
    }

    .nombreSistema{
      padding-top: 10px;
      font-size: 15px;
    }

    .lista{
      list-style:none;
    }

    .titulo {
      font-weight: 500;
      padding-bottom: 5px;
    }

    .ciudad{
      font-size: 15px;
      padding-left: 25px;
    }

    .footerseccion2{
      text-align: left;
      padding-left: 150px;
      padding-top: 50px;

    }

    .espacio{
      padding-top: 2px;
    }

    .footerseccion1{
      padding-top: 40px;
    }

  </style>

<style>

    .hero-overlay {
      opacity: 0.9;
    }

</style>










<!-- SCRIPT QIE HACE LA MAGIA -->
<script type="text/javascript" src="<?php echo $js;?>"></script>

<!-- SELECT CHOSEN-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/chosen/chosen.css">
<script type="text/javascript" src="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/chosen/chosen-demo.js"></script>

<!-- INPUT SWITCH -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/theme-switcher/themeswitcher.css">
<script type="text/javascript" src="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/input-switch/inputswitch.js"></script>



<!-- DATEPICKER -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/datepicker/datepicker.css">
<script type="text/javascript" src="<?php echo base_url()?>plantilla_ciudadano/assets/widgets/datepicker/datepicker.js"></script>

<script>
         $(function()
         {
           "use strict"; $('.input-switch').bootstrapSwitch();
           $("#date").bsdatepicker();
         });
</script>

