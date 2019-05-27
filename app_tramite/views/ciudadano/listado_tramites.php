
<!DOCTYPE html>

<html lang="es">
<!-- ************INICIO HEADER***************** -->
<!-- ************FIN HEADER***************** -->
<?php
$this->load->library('form_validation'); 
echo validation_errors();
?>


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
          <h2>Listado de Trámites</h2><br>
          <div id="panel-captura-avaluo" class="panel">
            <div class="panel-body">
            <h3 class="title-hero ">
                    Utilize el cuadro de busqueda para localizar trámites
            </h3>
              <form id="main_form" method="POST" action="<?php echo base_url().'app_tramite.php/Tramite/guardar/';?>" enctype="multipart/form-data">
                <div id="panel-fecha_recep" class="content-box border-top border-blue">
                  <div id="content-wrapper-fecha-recep" class="content-box-wrapper">
                    <h3 class="title-hero"></h3>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive">
                          <table id="registros" class="display" cellspacing="2" width="100%">
                            <thead>
                              <tr>
                                <th>Nombre del Propietario</th>
                                <th>Correo Eléctronico</th>
                                <th>Teléfono</th>
                                <th>Tipo de Trámite</th>
                                <th>Status</th>
                                <th>Mensaje</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                foreach($registros as $row){ ?>
                                  <tr>
                                    <td>
                                      <?php echo $row->Propietario;?>
                                    </td>
                                    <td>
                                      <?php echo $row->Correo_Electronico;?>
                                    </td>
                                    <td>
                                      <?php echo $row->Telefono;?>
                                    </td>
                                    <td><?php
                                      if ($row->Tipo_Tramite == 1) {
                                        echo "Asignación de Clave Catastral";
                                      } else {
                                        echo "Modificación de Clave Catastral";
                                      }
                                      ?>
                                      </td>
                                    <td>
                                      <?php echo $row->Mensaje;?>
                                    </td>
                                    <td><?php
                                    if ($row->Status == 1) {
                                      echo "En espera de revisión";
                                    } elseif($row->Status == 2){
                                      echo "Trámite Validado";
                                    }else {
                                      echo "En espera que el ciudadano haga correciones";
                                    }
                                    ?></td>
                                    <td><a href="<?php echo base_url().'app_tramite.php/Tramite/revisar_tramite/'.$row->Id?>" class="btn btn-info" <?php if($row->Status >= 1){echo "disabled";};?> >Acceder al Trámite</a></td>
                                  </tr>
                                <?php } 
                              ?>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Nombre del Propietario</th>
                                <th>Correo Eléctronico</th>
                                <th>Teléfono</th>
                                <th>Tipo de Trámite</th>
                                <th>Status</th>
                                <th>Mensaje</th>
                                <th>Acciones</th>
                              </tr>
                            </tfoot>
                          </table>
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
    <!-- PLUGIN DATA TABLE -->
    <script>
  $(function () {
    $('#registros').DataTable(
      {
        "bProcessing"   :   true,
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'language' : {
        paginate : {
          next : 'Siguiente',
          previous : 'Anterior',
          last : 'Ultimo',
          first : 'Primero'
        },
        info : 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        emptyTable: 'No hay registros',
        infoEmpty: '0 registros',
        search:'Buscar: ',
        sInfoFiltered:'(filtrado de un total de _MAX_ registros)',
        sLengthMenu:"Mostrar _MENU_ registros",
      },
      dom: 'Bfrtip',
        buttons: [
          {extend: 'print',text: '<span class="glyphicon glyphicon-print"></span> Imprimir',
            exportOptions: { modifier: { page: 'current'} } },       
          {extend: 'excel',text: '<span class="glyphicon glyphicon-tasks"></span> Guardar como Excel',
            exportOptions: { modifier: { page: 'current'} } },
            {extend: 'pdf',text: '<span class="glyphicon glyphicon-file"></span> Guardar como PDF',
            exportOptions: { modifier: { page: 'current'} } }
          ]
    })
  });
</script>
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
