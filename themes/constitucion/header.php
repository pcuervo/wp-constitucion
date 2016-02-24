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
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,300' rel='stylesheet' type='text/css'>
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
					<ul class="[ text-center ][ hidden-xs hideen-sm ]">
						<li><a href="<?php echo site_url('/'); ?> "><img class="[ width-10 ]" src="<?php echo THEMEPATH; ?>images/consti_vertical.png"></a><span class="[ text-italic ]">punto de encuentro</span> <!-- - page-home.php --></li>
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
							<img class="[ ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
							<a href="<?php echo site_url('/contacto/'); ?>">#SoyCDMX</a><!-- Contacto - page-contacto.php-->
							<img class="[ ]" src="<?php echo THEMEPATH; ?>icons/drop-down.svg">
						</li>
					</ul>
					<!-- nav header movil -->
					<div class="[ bg-light ][ visible-xs ]">
						<div class="[ container ]">
							<div class="[ row ][ padding--top ]">
								<div class="[ col-xs-10 ]">
									<a href="<?php echo site_url('/'); ?> "><img class="[ width-30 ]" src="<?php echo THEMEPATH; ?>images/consti_vertical.png"></a>
								</div>
								<div class="[ col-xs-2 ][ text-center ]">
									<a href=""><img src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>	
								</div>
							</div>
						</div>	
					</div>
					
					<!-- modal-movil
					<a data-toggle="modal" data-target="#menu-movil">
						
					</a>
					<div id="menu-info" class="[ modal fade ]" role="dialog">
						<div class="[ modal-dialog ]">
							<div class="[ modal-content height-auto ][ color-light ]">
								<div class="modal-header">
									<button type="button" class="[ close ]" data-dismiss="modal">
										<img src="<?php echo THEMEPATH; ?>images/icons/close.svg">
									</button>
								</div>
								<div class="[ no-margin ][ modal-body ][ bg-ligth ][ padding--top--large ][ text-center ]">
									<ul class="[ no-padding ]">
										
									</ul>
								</div>
							</div>
						</div>
					</div>-->

				</nav>
			</header>
