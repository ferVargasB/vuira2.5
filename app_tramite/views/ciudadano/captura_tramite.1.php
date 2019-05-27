
<!DOCTYPE html>

<html lang="es">
<!-- ************INICIO HEADER***************** -->
<!-- ************FIN HEADER***************** -->


<body>

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
          <h2>Cuentas Suspendidas</h2><br>
          <div id="panel-captura-avaluo" class="panel">
            <div class="panel-body">
            <h3 class="title-hero ">
                    Registrar Cuenta
            </h3>
              <form id="frmCuentaSuspendida">
                <div id="panel-fecha_recep" class="content-box border-top border-blue">
                  <div class="content-box-wrapper">
                    <div class="row">
                      <div class="col-md-12">
                        <div class=" col-xs-6 col-md-6">
                          <label class="control-label">Fecha de Recepci&oacute;n</label>
                          <div class='input-prepend input-group' >
                            <span class="add-on input-group-addon"><i class="glyph-icon icon-calendar"></i></span>
                              <input type='text' id="date" class="form-control" data-date-format="mm/dd/yy" name="fecha_recepcion" />
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-6" >
                          <center>
                            <label >No. Consecutivo</label></br>
                            <label  id="input-num_oficio" name="input-num_oficio" value="">CS - 142/2018</label>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div id="panel-datos-cuenta-suspendida" class="content-box border-top border-blue">
                  <div class="content-box-wrapper">
                    <h3 class="title-hero">I. DATOS DEL SOLICITANTE</h3>
                    <div class="bordered-row">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="control-label">Cuenta Predial</label>
                              <input type="hidden" class="form-control" id="input-cuenta_predial_id" name="cuenta_predial_id" value="" >
                              <input type="text" class="form-control" id="input-cuenta_predial" name="cuenta_predial" value="" >
                            </div>
                            <div class="form-group">
                              <label class="control-label">Nombre de Propietario</label>
                              <input type="text" class="form-control" id="input-propietario" name="propietario" value="" >
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <label class="control-label">Nombre de Solicitante</label>
                                </div>
                                <div class="col-md-4">
                                  <center>
                                    <label style="font-weight: normal;">Es el Propietario</label>
                                    <input type="checkbox" data-on-color="success" id="check-propietario" name="es_propietario" value="S">
                                  </center>
                                </div>
                                <div class="col-md-8">
                                  <label style="font-weight: normal;">Otro</label>
                                  <input type="text" class="form-control" name="nombre_solicitante" id="input-solicitante" value="" >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-7" id="datossolicitante">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <h5 class="control-label">Domicilio del Solicitante</h5>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Calle</label>
                                  <input type="text" class="form-control" id="input-calle_sol" name="calle_solicitante" value="" >
                                </div>

                                <div class="form-group">
                                  <label class="control-label">Col./Fracc./Cond./Barrio/C./Predio/Ejido</label>
                                  <input type="text" class="form-control" id="input-colonia_sol" name="colonia_solicitante" value="" >
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                      <label class="control-label">No. Exterior</label>
                                      <input type="text" class="form-control" id="input-num_ext_sol" name="num_ext_solicitante" value="" >
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                      <label class="control-label">No. Interior</label>
                                      <input type="text" class="form-control" id="input-num_int_sol" name="num_int_solicitante"  value="" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Tel. Particular</label>
                                  <input type="text" class="form-control" id="input-tel_particular_sol" name="telefono_particular_solicitante"  value="" >
                                </div>

                                <div class="form-group">
                                  <label class="control-label">Tel. Celular</label>
                                  <input type="text" class="form-control" id="input-cel_particular_sol" name="telefono_celular_solicitante" value="" >
                                </div>

                                <div class="form-group">
                                  <label class="control-label">Lote</label>
                                  <input type="text" class="form-control" id="input-lote" name="lote_solicitante" value="" >
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

            <!-- +++++++++++++++++++++++++++++++++++++++++-->
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <h5 class="control-label">Otro Domicilio de Referencia</h5>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Domicilio</label>
                              <input type="text" class="form-control" id="input-otro_domicilio_referencia" name="otro_domicilio_referencia" value="" >
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Parentesco</label>
                              <select id="input-parentesco" name="parentesco_referencia"  placeholder="Seleccione una Opción" class="chosen-select" required autofocus>
                                <option value="0">Seleccione una Opción</option>
                                <option value="1">Conyugue</option>
                                <option value="2">Padre</option>
                                <option value="3">Madre</option>
                                <option value="4">Hijo(a)</option>
                                <option value="5">Hermano(a)</option>
                                <option value="6">T&iacute;o(a)</option>
                                <option value="7">Sobrino(a)</option>
                                <option value="8">Primo(a)</option>
                                <option value="9">Abuelo(a)</option>
                                <option value="10">Nieto(a)</option>
                                <option value="11">Cu&ntilde;ado(a)</option
                                <option value="12">Suegro(a)</option>
                                <option value="13">Nuera</option>
                                <option value="14">Yerno</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Tel&eacute;fono para notificar</label>
                              <input type="text" class="form-control" id="input-telefono_referencia" name="telefono_referencia" value="" >
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Correo Electr&oacute;nico</label>
                              <input type="text" class="form-control" id="input-correo_referencia" name="correo_referencia" value="" >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- DIV content-box-wrapper de CUENTAS SUSPENDIDAS-->
                </div> <!-- DIV PANEL-CUENTA-SUSPENDIDA 1-->

                <div id="panel-datos-cuenta-suspendida2" class="content-box border-top border-blue">
                  <div class="content-box-wrapper">
                    <h3 class="title-hero">II. IDENTIFICACI&Oacute;N Y UBICACI&Oacute;N DEL INMUEBLE</h3>
                    <div class="bordered-row">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="control-label">Col./Fracc./Cond./Barrio/C./Predio/Ejido</label>
                            <select class="chosen-select"  data-placeholder="Seleccione una Opción" id="select-colonia_inmueble" name="colonia_id_inmueble" value=""></select>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Calle</label>
                            <select type="text" data-placeholder="Seleccione una Opción" class="chosen-select"  id="input-calle_inmueble" name="calle_id_inmueble" value="" ></select>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-xs-12 col-md-6">
                                <label class="control-label">No. Exterior</label>
                                <input type="text" class="form-control"  id="input_num_ext_inmueble" name="num_ext_inmueble">
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <label class="control-label">No. Interior</label>
                                <input type="text" class="form-control"  id="input_num_int_inmueble" name="num_int_inmueble" >
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-xs-12 col-md-6">
                                <label class="control-label">Entre Calles</label>
                                  <select type="text" data-placeholder="Seleccione una calle" class="chosen-select" id="input-entre_calle1" name="calle_colindante1_id_inmueble" ></select>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <label class="control-label">&nbsp;</label>
                                  <select type="text" data-placeholder="Seleccione la otra calle" class="chosen-select" id="input-entre_calle2" name="calle_colindante2_id_inmueble" ></select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-7" id="Superficie">
                          <div class="form-group">
                            <label>Superficie</label>
                            <div class="row">
                              <div class="col-xs-6 col-md-6">
                               <input type="text" class="form-control" id="input-superficie_inmueble" name="superficie_inmueble" value="" >
                              </div>
                              <div class="col-xs-3 col-md-6">
                                <label class="radio-inline"><input type="radio"  id="check-unidad_supM"  class="sup_inmueble_swi" checked name="sup_inmueble_swi" value="M">M<sup>2</sup></label>
                                <label class="radio-inline"><input type="radio"  id="check-unidad_supH" class="sup_inmueble_swi"  name="sup_inmueble_swi" value="H">HAS</label>
                              </div>
                            </div>
                          </div>

                          <div class="form-group" >
                            <label class="control-label">Uso Actual</label>
                            <select id="select-uso_actual" name="uso_predio_id" data-placeholder="Seleccione una Opción" class="chosen-select" required autofocus></select>
                          </div>

                          <div class="form-group">
                            <label>Coordenadas (Google Earth):&nbsp;</label>
                            <label class="radio-inline"><input type="radio"  id="check-gms"  class="coord_inmueble" name="coord_inmueble"  value="G">GMS</label>
                            <label class="radio-inline"><input type="radio"  id="check-utm" class="coord_inmueble" name="coord_inmueble" value="U">UTM</label>
                          </div>

                          <div class="form-group  " id="div-gms" >
                            <div class="row">
                              <div class=" col-md-12">
                                <div class=" col-md-3">
                                  <label class="col-md-3 control-label" for="latitude">Latitud</label>
                                </div>
                                <div class=" col-md-9">
                                  <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                      <label class="radio-inline">
                                          <input name="latitud" value="N" id="N" checked="" type="radio">
                                          N
                                      </label>
                                      <label class="radio-inline" style="padding-right: 20px;">
                                          <input name="latitud" value="S" id="S" type="radio">
                                          S
                                      </label>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                      <input class="form-control " style="width: 40px;display: inline-block;" id= "grados_latitud" name="grados_latitud" type="textbox">
                                      <label for="latitude_degres">°</label>
                                      <input class="form-control "  style="width: 40px;display: inline-block;" id="min_latitud" name="min_latitud" type="textbox">
                                      <label for="latitude_minutes">'</label>
                                      <input class="form-control "  style="width: 80px;display: inline-block;" id="segs_latitud" name="segs_latitud" type="textbox">
                                      <label for="latitude_secondes">''</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- FIN ROW GMS 1-->

                            <div class="row " style="padding-top:20px"    >
                              <div class=" col-md-12">
                                <div class=" col-md-3">
                                  <label class="col-md-3 control-label" for="longitud">Longitud</label>
                                </div>
                                <div class="col-md-9">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label class="radio-inline">
                                        <input name="longitud" value="E" id="E"  checked="" type="radio">
                                        E
                                      </label>
                                      <label class="radio-inline" style="padding-right: 20px;">
                                        <input name="longitud" value="O" id="O"  type="radio">
                                        O
                                      </label>
                                    </div>
                                    <div class="col-md-8">
                                      <input class="form-control " style="width: 40px;display: inline-block;" id="longitud_degres"  name="grados_longitud" type="textbox">
                                      <label for="latitude_degres">°</label>
                                      <input class="form-control "  style="width: 40px;display: inline-block;" id="longitud_minutes" name="mins_longitud"  type="textbox">
                                      <label for="latitude_minutes">'</label>
                                      <input class="form-control "  style="width: 80px;display: inline-block;" id="longitud_secondes"  name="segs_longitud" type="textbox">
                                      <label for="latitude_secondes">''</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- FIN ROW UTM-->
                          </div><!-- FIN GMS-->

                          <div class="form-group " id="div-utm">
                            <!--<div class="col-md-12 hidden">
                              <label for="">Coordenadas UTM:</label>
                              <input class="form-control " placeholder="14TQ 254197 2302355 " style="width: 200px;" id="coordenada_utm"  type="textbox">
                            </div>-->
                            <div class="col-md-12"  ><!--style="padding-top:20px"-->
                              <label for="">No. de Huso:</label>
                              <input class="form-control " placeholder="14" style="width: 80px;display: inline-block;" id="huso" name="huso" type="textbox">
                              <label for="">&nbsp;Zona:</label>
                              <input class="form-control "  placeholder="Q"  style="width: 40px;display: inline-block;" id="zona" name="zona"  type="textbox">
                            </div>
                            <div class="col-md-12" style="padding-top:20px">
                              <label for="">Regi&oacute;n al Este:</label>
                              <input class="form-control " placeholder="254197.00m"  style="width: 110px;display: inline-block;" id="este_utm" name="region_este"  type="textbox">
                              <label for="">Regi&oacute;n al Norte:</label>
                              <input class="form-control " placeholder="2302355.00m"  style="width: 110px;display: inline-block;" id="norte_utm" name="region_norte"  type="textbox">
                            </div>
                          </div><!-- FIN UTM-->
                        </div><!-- FIN SUPERFICE-->
                      </div>

                      <div class="col-md-12" >
                        <div class="form-group">
                          <label class="control-label">Caracter&iacute;sticas del Inmueble</label>
                          <textarea rows="4"  type="text" class="form-control" id="caract_inmueble" name="caracteristicas_inmueble" style="resize:none;" value="" ></textarea>
                        </div>
                      </div>

                    <!--</form>--> <!-- PRUEBAS -->

                    <!--<form id="frmArchivos" accept-charset="utf-8" enctype="multipart/form-data">--> <!-- PRUEBAS -->
                      <div id="mapa"></div>
                      <div class="col-md-12" >
                        <h3 class="title-hero">REQUISITOS</h3>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Formato de solicitud suscrito por el propietario, representante legal o referente del mismo</label>
                              <input  type="file" name="reporte_fotografico-1[]" id="reporte_fotografico-1" multiple/>
                            </div>
                            <div class="form-group">
                              <label for="">Copia de identificaci&oacute;n oficial de propietario/a</label>
                              <input type="file" name="reporte_fotografico-2[]" id="reporte_fotografico-2" multiple/>
                            </div>
                            <div class="form-group">
                              <label for="">Copia de identificaci&oacute;n oficial de solicitante</label>
                              <input type="file" name="reporte_fotografico-3[]" id="reporte_fotografico-3" multiple/>
                            </div>
                            <div class="form-group">
                              <label for="">Copia de &uacute;ltima escritura o documento que acredite la propiedad en cuesti&oacute;n</label>
                              <input type="file" name="reporte_fotografico-4[]" id="reporte_fotografico-4" multiple/>
                            </div>
                            <div class="form-group">
                              <label for="">Copia de aval&uacute;o, plano o croquis de localizaci&oacute;n (viene adjunto con escrituras)</label>
                              <input type="file" name="reporte_fotografico-5[]" id="reporte_fotografico-5" multiple/>
                            </div>
                          </div>
                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="">Copia de t&iacute;tulo de propiedad (para predios r&uacute;sticos)</label>
                              <input type="file" name="reporte_fotografico-6[]" id="reporte_fotografico-6" multiple/>
                            </div>
                            <div class="form-group">
                              <label for="">Copia de recibo predial actualizado o edo. de cuenta</label>
                              <input type="file" name="reporte_fotografico-7" id="reporte_fotografico-7"/>
                            </div>
                            <div class="form-group">
                              <label for="">Poder simple si se le requiriera</label>
                              <input type="file" name="reporte_fotografico-8" id="reporte_fotografico-8"/>
                            </div>
                            <div class="form-group">
                              <label for="">Permiso de divisi&oacute;n (si se solicita)</label>
                              <input type="file" name="reporte_fotografico-9" id="reporte_fotografico-9"/>
                            </div>
                            <div class="form-group">
                              <label for="">Copia de acta de defunsi&oacute;n</label>
                              <input type="file" name="reporte_fotografico-10" id="reporte_fotografico-10"/>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- <input type="submit" name="" value="Enviar"> -->

                    <!--</form>--> <!-- PRUEBAS -->

                      <div class="col-md-12" >
                        <div class="form-group">
                          <label for="">Observaciones</label>
                          <textarea class="form-control " rows="4" style="resize:none;"  id="observaciones"  name="observaciones"  type="textbox"></textarea>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label">Estatus Solicitud</label>
                        <select id="select-estatus_solicitud" name="estatus_solicitud_id" data-placeholder="Seleccione una Opción" class="chosen-select" required autofocus></select>
                      </div>
                    </div>

                  </div><!-- DIV content-box-wrapper de CUENTAS SUSPENDIDAS 2-->
                </div> <!-- DIV PANEL-CUENTA-SUSPENDIDA 2-->
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

