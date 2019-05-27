

	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8">

		<title> SIPREG </title>
		<meta name="description" content="">
		<link rel="shortcut icon" href="/img/irapuato.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!--#region CSS  -->

		<style>
			/* Loading Spinner */
			.spinner {
				margin: 0;
				width: 70px;
				height: 18px;
				margin: -35px 0 0 -9px;
				position: absolute;
				top: 50%;
				left: 50%;
				text-align: center
			}

			.spinner>div {
				width: 18px;
				height: 18px;
				background-color: #333;
				border-radius: 100%;
				display: inline-block;
				-webkit-animation: bouncedelay 1.4s infinite ease-in-out;
				animation: bouncedelay 1.4s infinite ease-in-out;
				-webkit-animation-fill-mode: both;
				animation-fill-mode: both
			}

			.spinner .bounce1 {
				-webkit-animation-delay: -.32s;
				animation-delay: -.32s
			}

			.spinner .bounce2 {
				-webkit-animation-delay: -.16s;
				animation-delay: -.16s
			}

			@-webkit-keyframes bouncedelay {
				0%,
				80%,
				100% {
					-webkit-transform: scale(0.0)
				}
				40% {
					-webkit-transform: scale(1.0)
				}
			}

			@keyframes bouncedelay {
				0%,
				80%,
				100% {
					transform: scale(0.0);
					-webkit-transform: scale(0.0)
				}
				40% {
					transform: scale(1.0);
					-webkit-transform: scale(1.0)
				}
			}

		</style>

		<!-- Favicons -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'plantilla_administrador/'?>assets/images/icons/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'plantilla_administrador/'?>assets/images/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'plantilla_administrador/'?>assets/images/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'plantilla_administrador/'?>assets/images/icons/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="<?php echo base_url().'plantilla_administrador/'?>img/logoIrapuato.png">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/';?>assets/bootstrap/js/popper.min.js"></script>

		<!-- Admin theme -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/themes/admin/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/themes/admin/color-schemes/default.css">

		<!-- Components theme -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/themes/components/default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/themes/components/border-radius.css">

		<!-- Admin responsive -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/responsive-elements.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/admin-responsive.css">

		<!-- HELPERS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/backgrounds.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/boilerplate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/border-radius.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/grid.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/page-transitions.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/spacing.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/typography.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/utils.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/helpers/colors.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/elements/images.css">

		<!-- SNIPPETS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/snippets/login-box.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/snippets/user-profile.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/snippets/mobile-navigation.css">

		<!-- ELEMENTS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/elements/badges.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/elements/buttons.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/elements/content-box.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/elements/dashboard-box.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/elements/forms.css">

		<!-- ICONS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/icons/fontawesome/fontawesome.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/icons/linecons/linecons.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/icons/spinnericon/spinnericon.css">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/accordion-ui/accordion.css">

		<!-- WIDGETS -->

    	      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/modal/modal.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/dropdown/dropdown.css">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>css/global.css">
		<!--#endregion -->

		<!--#region JS  -->

		<!-- JQuery -->
		<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/';?>assets/js-core/jquery-core.js"></script>

		<!-- Bootstrap -->
		<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/';?>assets/bootstrap/js/bootstrap.js"></script>

		<!-- JQuery UI -->
		<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		<!-- <script type="text/javascript" src="assets/js-core/jquery-ui-core.js"></script> -->

		<!-- CSS del tramite-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'app_tramite_assets/'?>css/tramite.css">
		

		<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/';?>assets/js-core/modernizr.js"></script>
		<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/';?>js/funciones.js"></script>

		<script type="text/javascript">
			$(window).load(function () {
				setTimeout(function () {
					$('#loading').fadeOut(400, "linear");
				}, 300);
			});

			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});


		</script>

		<!--#endregion -->

	</head>


  	<body>
  		<!-- <div id="sb-site"> -->
  			<div id="baseUrl" base-url=""></div>
  			<div id="loading">
  				<div class="spinner">
  					<div class="bounce1"></div>
  					<div class="bounce2"></div>
  					<div class="bounce3"></div>
  				</div>
  			</div>
  			<!-- FIN loading -->

  				<div id="page-wrapper">
  					<div id="page-header" class="bg-gradient-9">
  						<div id="mobile-navigation">
  							<button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar">
  								<span></span>
  							</button>
  							<a href="" class="logo-content-small" title="SIPREG"></a>
  						</div>
  						<div id="header-logo" class="logo-bg">
  							<a href="" class="logo-content-big" title="SIPREG">
  								SIPREG
  								<span>Sistema Integral de Planeación de Recursos Gubernamentales</span>
  							</a>
  							<a href="" class="logo-content-small" title="SIPREG">
  								SIPREG
  								<span>Sistema Integral de Planeación de Recursos Gubernamentales</span>
  							</a>
  							<a id="close-sidebar" href="#" title="Close sidebar">
  								<i class="glyph-icon icon-angle-left"></i>
  							</a>
                          </div>


  						<!-- #header-nav-right -->

  						<div id="header-nav-right">
                  <div class=" dropdown user-account-btnn">
                    <a href="#" title="Soy Administrador" class="user-profile " data-toggle="dropdown">
                      <img width="28" src="<?php echo base_url().'plantilla_administrador/';?>assets/image-resources/gravatar.jpg" alt="Administrador">
                    </a>
                    <div class="dropdown-menu ">
                      <div class="box-sm">
                        <div class="login-box clearfix">
                          <div class="user-img">
                            <a href="#" title="" class="change-img">Cambiar foto</a>
                            <img src="<?php echo base_url().'plantilla_administrador/';?>assets/image-resources/gravatar.jpg" alt="">
                          </div>
                          <div class="user-info">
                            <span>
															<?php echo $this->session->username;?>
                              <i>DTI Desarrollador</i>
                            </span>
                            <a href="#" title="Editar perfíl">Perfíl</a>
                            <a href="#" title="Ver Notificaciones">Notificaciones</a>
                          </div>
                        </div>
                        <div class="divider"></div>
                        <div class="pad5A button-pane button-pane-alt text-center">
                          <a href="<?php echo base_url().'index.php/Login/logout/'?>" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Salir
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
  							<a href="#" class="hdr-btn iconos" id="fullscreen-btn" title="Pantalla completa">
  								<i class="glyph-icon icon-arrows-alt"></i>
  							</a>

  							<a class="header-btn iconos" id="logout-btn"href="logout/" title="Bloquear">
  								<i class="glyph-icon icon-linecons-lock"></i>
  							</a>

  						</div>
  						<!-- #header-nav-right -->

  					</div>
  				</div>
                  <!-- FIN page-wrapper -->
									<!--#region Menú  -->
									<div id="page-sidebar">
									<div class="scroll-sidebar">
										<ul id="sidebar-menu">
											<li class="header">
												<span>Atajos del Sistemas</span>
											</li>
											<li>
											<li>
												<a href="http://localhost/CodeIgniter/app_tramite.php/Tramite/dashboard/">
													<i class="glyph-icon icon-home"></i>
													<span>Inicio</span>
												</a>
											</li>

											<li class="header">
												<span>IMPUESTOS INMOBILIARIOS</span>
											</li>
											<li>
												<a class="sf-with-ul" href="#" title="Menú 2">
													<i class="glyph-icon icon-home"></i>
													<span>PREDIAL</span>
												</a>
									      <div class="sidebar-submenu">
													<ul >
														<li style="display: block">
															<span>Constancias</span>
														</li>
														<li style="display: block">
																<a href=""><span>Constancia de Propiedad</span></a>
														</li>
														<li style="display: block" class="header">
															<span>Catalogos</span>
														</li>
														<li style="display: block">
															<a href="" title="Cuota minima"><span>Cuota minima</span></a>
														</li>


													</ul>
									      </div>
											</li>


										</ul>
									</div>
									</div>
									<!--#endregion Menú  -->

									<!-- FIN page-sidebar -->

									<div id="page-content-wrapper">
									<div id="page-content">
										<div class="container">
											<h2>Formulario para revisar el trámite</h2><br>
											<div id="panel-captura-avaluo" class="panel">
											  <div class="panel-body">
											    <form id="form-funcionario" action="<?php echo base_url().'app_tramite.php/Tramite/validar_tramite/'?>" method="POST">
											      <div id="panel-datos-tramite" class="content-box border-top border-blue">
											        <div class="content-box-wrapper">
											          <h3 class="title-hero">I. Datos del Trámite</h3>
											          <div class="bordered-row">
											            <div class="row">
											              <div class="col-md-6">
											                <div class="form-group">
																				<label class="control-label">Nombre del Propietario</label>
																				<input type="text" class="form-control" value="<?php echo $registro[0]->Propietario;?>" readonly>
																			</div>
																			<div class="form-group">
											                  <label class="control-label">Correo Eléctronico</label>
											                  <input type="text" class="form-control" value="<?php echo $registro[0]->Correo_Electronico;?>" readonly>
											                </div>
																		</div>
																		<div class="col-md-6">
											                <div class="form-group">
																				<label class="control-label">Télefono</label>
																				<input type="text" class="form-control" value="<?php echo $registro[0]->Telefono;?>" readonly>
																			</div>
																			<div class="form-group">
																				<label class="control-label">Tipo de Trámite</label>
																				<input type="text" class="form-control" value="<?php
																										if ($registro[0]->Tipo_Tramite == 1) {
																											echo "Asignación de Clave Catastral";
																										} else {
																											echo "Modificación de Clave Catastral";
																										}
																										?>" readonly
																				>
																			</div>
											              </div>
											            </div>
											          </div>
											        </div>
														</div>
														
														<div id="panel-documentos-tramite" class="content-box border-top border-blue">
											        <div class="content-box-wrapper">
											          <h3 class="title-hero">II. Documentos Cargados del Ciudadano</h3>
											          <div class="bordered-row">
											            <div class="row">
											              <div class="col-md-2">
											                <div class="form-group">
																				<label class="control-label">Identificación de Propietario</label>
																				<br>
																				<a href="<?php echo $registro[0]->Doc_Identificacion;?>" target="_blank">
																					<i class="glyph-icon icon-eye"></i>
																					<span>Ver Documento</span>
																				</a>
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="form-group">
																				<label class="control-label">Plano Digital</label>
																				<br>
											                  <a href="<?php echo $registro[0]->Doc_Plano_Digital;?>" target="_blank">
																					<i class="glyph-icon icon-eye"></i>
																					<span>Ver Documento</span>
																				</a>
											                </div>
																		</div>
																		<div class="col-md-2">
											                <div class="form-group">
																				<label class="control-label">Acta Constitutiva</label>
																				<br>
																				<a href="<?php echo $registro[0]->Doc_Acta;?>" target="_blank">
																					<i class="glyph-icon icon-eye"></i>
																					<span>Ver Documento</span>
																				</a>
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="form-group">
																				<label class="control-label">Oficio de Traza</label>
																				<br>
																				<a href="<?php echo $registro[0]->Doc_Oficio_Traza;?>" target="_blank">
																					<i class="glyph-icon icon-eye"></i>
																					<span>Ver Documento</span>
																				</a>
																			</div>
																		</div>
																		<div class="col-md-2">
																				<div class="form-group">
																					<label class="control-label">Escritura Pública</label>
																					<br>
																					<a href="<?php echo $registro[0]->Doc_Escritura_Publica;?>" target="_blank">
																						<i class="glyph-icon icon-eye"></i>
																						<span>Ver Documento</span>
																					</a>
																				</div>
																		</div>
																		<div class="col-md-2">
																				<div class="form-group">
																					<label class="control-label">Recibo Predial</label>
																					<br>
																					<a href="<?php echo $registro[0]->Doc_Resibo_Predial;?>" target="_blank">
																						<i class="glyph-icon icon-eye"></i>
																						<span>Ver Documento</span>
																					</a>
																				</div>
																		</div>
																	</div>
											          </div>
											        </div>
														</div>

														<div id="panel-observacion-tramite" class="content-box border-top border-blue">
											        <div class="content-box-wrapper">
											          <h3 class="title-hero">III. Observaciones al Ciudadano</h3>
											          <div class="bordered-row">
											            <div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<textarea class="form-control" name="observaciones" id="observaciones" rows="3" placeholder="Escribe aqui si hay un observación al ciudadano" require>

																				</textarea>
																			</div>
																		</div>
											            </div>
											          </div>
											        </div>
														</div>
														<div class="row">
															<div class="col-md-12 text-right">
																<input type="text" name="id_tramite" id="id_tramite" value="<?php echo $id_tramite;?>" hidden>
																<input type="button" class="btn btn-warning" id="observaciones_button" value="Generar Observación">
																<input type="submit" class="btn btn-success" id="submit_button" value="Aprobar Trámite">
															</div>
														</div>
											    </form>
											  </div>
											</div>
										</div>
																<!-- container -->
															</div>
															<!-- page-content -->


																 <footer class="page-footer font-small special-color-dark pt-4 footer">
																		<div class="container footercontainer">
																			<div class="row">
																				<div class="col-lg-6 col-md-12 footerseccion1">
																					<img src="img/logo_vedablanco.svg" width="45%"></img>
																					<h5 class=" sistema">SIPREG</h5>
																					<p class="nombreSistema">Sistema De Planeación de Recursos Gubernamentales</p>
																				</div>
																				<div class="col-lg-4 offset-lg-2 col-md-12 footerseccion2">
																					<h5 class="white-text sistema espacio">Ayuda</h5><br>
																					<h5 class="list-unstyled list-inline titulo espacio">TECNOLOG&Iacute;AS DE LA INFORMACI&Oacute;N</h5>
																					<div>
																						<i  class="espacio glyphicon glyphicon-map-marker" style="float:left;font-size:18px"></i>
																						<p class="espacio ciudad">Hidalgo #77, Zona Centro</p>
																						<p class="espacio ciudad">Irapuato, Gto. M&eacute;xico</p>
																						<i class="glyphicon glyphicon-earphone "  style="float:left;font-size:18px"> </i>
																						<p class="espacio ciudad">01 (462) 60 69 999 Ext. 2021</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="footer-copyright footerfinal">
																			<div class="container" align="center">
																				© Irapuato | Ayuntamiento 2015-2018
																			</div>
																		</div>
																</footer>
																<!-- Footer -->
															</div>
															<!-- page-content-wrapper -->
													</div>
													<!-- FIN sb-site -->
												</body>
											</html>

											<!-- SELECT CHOSEN-->
											<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/chosen/chosen.css">
											<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/chosen/chosen.js"></script>
											<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/chosen/chosen-demo.js"></script>

											<!-- INPUT SWITCH -->
											<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/input-switch/inputswitch.css">
											<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/input-switch/inputswitch-alt.css">
											<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/theme-switcher/themeswitcher.css">
											<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/input-switch/inputswitch.js"></script>



											<!-- DATEPICKER -->
											<link rel="stylesheet" type="text/css" href="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/datepicker/datepicker.css">
											<script type="text/javascript" src="<?php echo base_url().'plantilla_administrador/'?>assets/widgets/datepicker/datepicker.js"></script>

											<!-- Script Chido -->
											<script type="text/javascript" src="<?php echo base_url().'app_tramite_assets/'?>js/view_revisar_tramite.js"></script>
											<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
											<script>
											         $(function()
											         {
											           "use strict"; $('.input-switch').bootstrapSwitch();
											           $("#date").bsdatepicker();
											         });
											</script>
