<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (! $this->session->userdata('logged_in')) {
    redirect(base_url());
} 

?>
<!DOCTYPE html>

<html lang="es">
<!-- ************INICIO HEADER***************** -->
<!-- ************FIN HEADER ***************** -->

<body>

<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div id="page-wrapper">
  <!-- *************** INCICIO HEADER *************-->
  <!-- *************** FIN HEADER *************-->

  <!-- ************ INICIO NAV ***************** -->
  <!-- ************FIN NAV ***************** -->


<!-- ************INICIO SECCION***************** -->
    <div class="clearfix"></div>
    <div id="page-content">
      <div class="container">
          <!-- INICIA INFORMACION DE LA APP1-->
          <div class="row">
            <div class="col-md-6">
                <br>
                <!--<img class="responsive-img left-align float-left" src="/resources/img/welcome_128.png" alt="">-->
                <div id="page-title">
                    <h2><b>Trámite de Prueba<strong></strong></b></h2>
                </div>
                <hr>
                <br>
                <div class="contenido text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        
                </div>
                <!-- contenido -->
            </div>
            <div class="col-md-6 text-center">
              <a href="<?php echo base_url().'app_tramite.php/Tramite/';?>" class="btn btn-success">Realizar Trámite</a>
            </div>
            <!-- col-md-12 -->
          </div>
          <!-- FIN INFORMACION DE LA APP2-->
          
          <!-- INICIA INFORMACION DE LA APP2-->
          <div class="row">
            <div class="col-md-6">
                <br>
                <!--<img class="responsive-img left-align float-left" src="/resources/img/welcome_128.png" alt="">-->
                <div id="page-title">
                    <h2><b>Aplicación 2<strong></strong></b></h2>
                </div>
                <hr>
                <br>
                <div class="contenido text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        
                </div>
                <!-- contenido -->
            </div>
            <div class="col-md-6 text-center">
              <button class="btn btn-success">Realizar Trámite</button>
            </div>
            <!-- col-md-12 -->
          </div>
          <!-- FIN INFORMACION DE LA APP2-->
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

