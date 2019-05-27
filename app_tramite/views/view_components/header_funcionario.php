<head>
      <meta charset="UTF-8">
      <title> SIPREG </title>
		<meta name="description" content="">
		<link rel="shortcut icon" href="<?php echo base_url().'plantilla_administrador/'?>img/GALogo.png">
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