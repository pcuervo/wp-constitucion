<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<!-- Favicon - generated with http://www.favicomatic.com/ -->
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<!-- Google font(s) -->
		<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,300,100' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700,800,500,300' rel='stylesheet' type='text/css'>
		<!-- Font awesome -->
		<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->

		<div><!-- class="container" -->

			<header>
				<nav>
					<!-- menu desktop -->
					<ul class="[ menu-desktop ][ text-center ][ hidden-xs hideen-sm ][ sticky ]">
						<li class="[ no-padding--sides ]"><a href="<?php echo site_url('/'); ?> ">
							<img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
							<span class="[ text-italic ][ relative ]">punto</span>
							<span class="[ text-italic ][ relative top-20 right-42 ][ margin-right--31 ]">de encuentro</span> <!-- - page-home.php -->
						</li>
						<!-- <li class="[ text-uppercase ]"><a href="<?php echo site_url('/'); ?> ">Home</a>- page-home.php --></li>
						<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?> ">Información</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
						<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
						<li class="[ text-uppercase ]"><a href="<?php echo site_url('/participa/'); ?>">Participa</a><!--  - page-participa.php-->
							<ul class="[ submenu ]">
								<li ><a href="<?php echo site_url('/cronologia/'); ?>">Cronología</a><!--  - page-cronologia.php--></li>
								<li><a href="<?php echo site_url('/instrucciones/'); ?>">Instrucciones</a><!--  - page-instrucciones.php--></li>
								<li><a href="<?php echo site_url('/calendario/'); ?>">Calendario</a><!--  - archive-calendario.php--></li>
								<li>Cuestionario</li>
								<li><a href="#">Link a Youtube</a></li>
								<li><a href="<?php echo site_url('/instrucciones/'); ?>">Instrucciones</a><!--  - page-instrucciones.php --></li>
								<li><a href="#">Buscador</a></li>
								<li><a href="<?php echo site_url('/kioskos/'); ?>">Mapa con ubicación de kiosko</a><!--  - archive-kioskos.php--></li>
							</ul>
						</li>
						<li class="[ text-uppercase ]"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
						<li>
							<a href="<?php echo site_url('/contacto/'); ?>">
								<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
								#SoyCDMX<!-- Contacto - page-contacto.php-->
								<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/drop-down.svg">
							</a>
						</li>
					</ul>

					<!-- nav header movil -->
					<div class="[ bg-light ][ visible-xs ]">
						<div class="[ container ]">
							<div class="[ row ]">
								<div class="[ col-xs-9 ]">
									<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
								</div>
								<div class="[ col-xs-3 ][ text-center ][ padding--top padding--left--xlarge ]">
									<a type="button" data-toggle="modal" data-target="#modal-menu"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- modal menu mobile -->
					<div class="modal fade" id="modal-menu" tabindex="-1" role="dialog">
						<div class="[ modal-dialog modal-content ][ width-100 height-100 ][ no-margin ]">
							<div class="[ container ][ bg-light ]">
								<div class="[ row ]">
									<div class="[ col-xs-10 ]">
										<a href="<?php echo site_url('/'); ?> "><img class="[ width-40 ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
										<span class="[ text-italic ]">punto <br>de encuentro</span>
									</div>
									<div class="[ col-xs-2 ][ text-center ][ padding--top ]">
										<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
									</div>
								</div>
							</div>
							<div class="[ bg-light-cdmx ][ text-center ]">
								<ul class="[ menu-mobile ]">
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?> ">Información</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/participa/'); ?>">Participa</a><!--  - page-participa.php--></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
									<li><a href="<?php echo site_url('/contacto/'); ?>">#SoyCDMX</a><!-- Contacto - page-contacto.php--></li>
								</ul>
							</div>
							<img class="[ width-60 ][ margin-top-bottom--large ][ center-block ]" src="<?php echo THEMEPATH; ?>images/logocdmx.png">
						</div>
					</div>


				</nav>
			</header>
