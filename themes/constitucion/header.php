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
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>

	<body>
		<?php $activeAcerca = is_page('constitucion-cdmx') ? 'active' : '';
		$activeCdmx = is_page('cdmx') ? 'active' : '';
		$activeParticipa = is_page('participa') ? 'active' : '';
		$activeNoticias = is_home() || is_singular('post') ? 'active' : '';   ?>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->

		<div><!-- class="container" -->

		<?php $tweet = new Twitter;
		$tweets = $tweet->feedTwitter();

		if ( is_page('home') ): ?>
			<header class="[ hidden ]">
				<nav>
<!-- menu desktop home -->
					<ul class="[ menu-desktop ][ text-center ][ hidden-xs ]">
						<li class="[ no-padding--sides ]"><a href="<?php echo site_url('/'); ?> ">
							<img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif" alt="logo vertical de Ciudad de México"></a>
							<span class="[ text-italic ][ relative bottom-10 ]">punto</span>
							<span class="[ text-italic ][ relative top-10 right-42 ]">de encuentro</span> <!-- - page-home.php -->
						</li>
						<li class="[ dropdown--hover dropdown--hover--acerca ][ text-uppercase ][ top-8 ]">
							<span>Acerca de la<br>constitución</span>
							<ul class="dropdown-content dropdown-menu [ text-uppercase ]" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#jefe_gobierno">Mensaje del jefe de gobierno</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_constitucion">Sobre la constitución</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#grupo_trabajo">Grupo de trabajo</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_plataforma">Sobre la plataforma</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#hacia_constituyente">Hacia el constituyente</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#constitución_wiki">Constitución en Wiki</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#preguntas_frecuentes">Preguntas frecuentes</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#biblioteca">Biblioteca</a></li>
							</ul>
						</li>
						<li class="[ text-uppercase ] <?php echo $activeCdmx; ?>"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
						<li class="[ dropdown--hover ][ text-uppercase ]">
							<span>Participa</span>
							<ul class="dropdown-content dropdown-menu [ text-uppercase ]" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Resultados</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
							</ul>
						</li>
						<li class="[ text-uppercase ] <?php echo $activeNoticias; ?>"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
<!-- #SoyCDMX desktop home -->
						<li id="js-btn-cdmx">
							<a href="#">
								<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg" alt="icono de red social twitter">
								#SoyCDMX<!-- Contacto - page-contacto.php-->
							</a>
						</li>
					</ul>

<!-- nav header movil home -->
					<div class="[ bg-light ][ visible-xs ]">
						<div class="[ container ]">
							<div class="[ row ]">
								<div class="[ col-xs-9 ]">
									<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"  alt="logo vertical de Ciudad de México"></a>
									<span class="[ text-italic fz-xsmall ][ relative ]">punto</span>
									<span class="[ text-italic fz-xsmall ][ relative top-12 right-32 ]">de encuentro</span> <!-- - page-home.php -->
								</div>
								<div class="[ col-xs-3 ][ text-center ][ padding--top padding--left--xlarge ]">
									<a type="button" data-toggle="modal" data-target="#modal-menu"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg" alt="icono para desplegar navegador"></a>
								</div>
							</div>
						</div>
					</div>

<!-- modal menu mobile home -->
					<div class="modal fade" id="modal-menu" tabindex="-1" role="dialog">
						<div class="[ modal-dialog modal-content ][ width-100 height-100 ][ no-margin ]">
							<div class="[ container ][ bg-light ]">
								<div class="[ row ]">
									<div class="[ col-xs-10 ]">
										<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
										<span class="[ text-italic fz-xsmall ][ relative ]">punto</span>
										<span class="[ text-italic fz-xsmall ][ relative top-12 right-32 ]">de encuentro</span> <!-- - page-home.php -->
									</div>
									<div class="[ col-xs-2 ][ text-center ][ padding--top ]">
										<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
									</div>
								</div>
							</div>
							<div class="[ bg-light-cdmx ][ text-center ]">
								<ul class="[ menu-mobile ]">
									<li class="[ text-uppercase ] <?php echo $activeAcerca; ?>"><a data-toggle="collapse" data-target="#acerca">Acerca de la constitución</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
										<ul id="acerca" class="collapse [ text-uppercase ][ no-padding ][ collapse--menu ]">
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#jefe_gobierno">Mensaje del jefe de gobierno</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_constitucion">Sobre la constitución</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#grupo_trabajo">Grupo de trabajo</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_plataforma">Sobre la plataforma</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#hacia_constituyente">Hacia el constituyente</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#constitución_wiki">Constitución en Wiki</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#preguntas_frecuentes">Preguntas frecuentes</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#biblioteca">Biblioteca</a></li>
										</ul>
									<li class="[ text-uppercase ] <?php echo $activeCdmx; ?>"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
									<li class="[ text-uppercase ] <?php echo $activeParticipa; ?>"><a data-toggle="collapse" data-target="#participa">Participa</a></li>
									<ul id="participa" class="collapse [ text-uppercase ][ no-padding ][ collapse--menu ]">
										<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Resultados</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
									</ul>
									<li class="[ text-uppercase ] <?php echo $activeNoticias; ?>"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
									<li><a type="button" data-toggle="modal" data-target="#SoyCDMX-mobile--home">#SoyCDMX</a></li>
								</ul>
							</div>
							<img class="[ width-60 ][ margin-top-bottom--large ][ center-block ]" src="<?php echo THEMEPATH; ?>images/logocdmx.png">
						</div>
					</div>

<!-- #SoyCDMX mobile home -->
					<div class="modal fade" id="SoyCDMX-mobile--home" tabindex="-1" role="dialog">
						<div class="[ modal-content ][ width-100 ][ no-margin ]">
							<div class="[ container ]">
								<div class="[ row ]">
									<div class="[ col-xs-2 ][ padding--top-bottom--large ]">
										<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/back.svg"></a>
									</div>
									<div class="[ col-xs-10 ]">
										<h1>#SoyCDM</h1>
									</div>
								</div>
								<?php if (! empty($tweets) ):
									foreach ($tweets as $tweet): ?>
										<div class="[ row ]">
											<div class="[ col-xs-12 ][ color-gray ]">
												<p class="[ fz-xsmall ]"><?php echo $tweet['user_name'].' @'.$tweet['screen_name']; ?></p>
												<p><?php echo $tweet['text']; ?></p>
												<p class="[ text-italic fz-xsmall ]"><?php echo $tweet['date']; ?></p>
												<hr class="[ border-bottom-gray ]">
											</div>
										</div>
									<?php endforeach;
								endif; ?>


							</div>
						</div>
					</div>
				</nav>
			</header>
		<?php else: ?>
			<header class="not-home">
				<nav>
<!-- menu desktop not home -->
					<ul class="[ menu-desktop ][ text-center ][ hidden-xs  ]"> <!-- hidden-sm -->
						<li class="[ no-padding--sides ]"><a href="<?php echo site_url('/'); ?> ">
							<img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
							<span class="[ text-italic ][ relative ]">punto</span>
							<span class="[ text-italic ][ relative top-20 right-42 ][ margin-right--31 ]">de encuentro</span> <!-- - page-home.php -->
						</li>
						<!-- <li class="[ text-uppercase ]"><a href="<?php echo site_url('/'); ?> ">Home</a>- page-home.php --></li>
						<li class="[ dropdown top-8 <?php echo $activeAcerca; ?> ]">
							<button class="dropdown-toggle [ text-uppercase btn-dropdown ][ no-padding ]" type="button" id="dropdown--header" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Acerca de la<br>constitución
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu [ dropdown-menu--top ] [ text-uppercase ]" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#jefe_gobierno">Mensaje del jefe de gobierno</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_constitucion">Sobre la constitución</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#grupo_trabajo">Grupo de trabajo</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_plataforma">Sobre la plataforma</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#hacia_constituyente">Hacia el constituyente</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#constitución_wiki">Constitución en Wiki</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#preguntas_frecuentes">Preguntas frecuentes</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#biblioteca">Biblioteca</a></li>
							</ul>
						</li>
						<li class="[ text-uppercase ] <?php echo $activeCdmx; ?>"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
						<li class="[ dropdown ] <?php echo $activeParticipa; ?>">
							<button class="dropdown-toggle [ text-uppercase btn-dropdown ][ no-padding ]" type="button" id="dropdown--header" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Participa
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu [ dropdown-menu--top ] [ text-uppercase ]" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Resultados</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
							</ul>
						</li>
						<li class="[ text-uppercase ] <?php echo $activeNoticias; ?>"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
<!-- #SoyCDMX desktop not home -->
						<li id="js-btn-cdmx">
							<a href="#">
								<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
								#SoyCDMX<!-- Contacto - page-contacto.php-->
							</a>
						</li>
					</ul>

<!-- nav header movil not home -->
					<div class="[ bg-light ][ visible-xs ]">
						<div class="[ container ]">
							<div class="[ row ]">
								<div class="[ col-xs-9 ]">
									<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
									<span class="[ text-italic fz-xsmall ][ relative ]">punto</span>
									<span class="[ text-italic fz-xsmall ][ relative top-12 right-32 ]">de encuentro</span> <!-- - page-home.php -->
								</div>
								<div class="[ col-xs-3 ][ text-center ][ padding--top padding--left--xlarge ]">
									<a type="button" data-toggle="modal" data-target="#modal-menu"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>
								</div>
							</div>
						</div>
					</div>

<!-- modal menu mobile not home -->
					<div class="modal fade" id="modal-menu" tabindex="-1" role="dialog">
						<div class="[ modal-dialog modal-content ][ width-100 height-100 ][ no-margin ]">
							<div class="[ container ][ bg-light ]">
								<div class="[ row ]">
									<div class="[ col-xs-10 ]">
										<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
										<span class="[ text-italic fz-xsmall ][ relative ]">punto</span>
										<span class="[ text-italic fz-xsmall ][ relative top-12 right-32 ]">de encuentro</span> <!-- - page-home.php -->
									</div>
									<div class="[ col-xs-2 ][ text-center ][ padding--top ]">
										<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
									</div>
								</div>
							</div>
							<div class="[ bg-light-cdmx ][ text-center ]">
								<ul class="[ menu-mobile ]">
									<li class="[ text-uppercase ] <?php echo $activeAcerca; ?>"><a data-toggle="collapse" data-target="#acerca">Acerca de la constitución</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
										<ul id="acerca" class="collapse [ text-uppercase ][ no-padding ][ collapse--menu ]">
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#jefe_gobierno">Mensaje del jefe de gobierno</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_constitucion">Sobre la constitución</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#grupo_trabajo">Grupo de trabajo</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_plataforma">Sobre la plataforma</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#hacia_constituyente">Hacia el constituyente</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#constitución_wiki">Constitución en Wiki</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#preguntas_frecuentes">Preguntas frecuentes</a></li>
											<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#biblioteca">Biblioteca</a></li>
										</ul>
									<li class="[ text-uppercase ] <?php echo $activeCdmx; ?>"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
									<li class="[ text-uppercase ] <?php echo $activeParticipa; ?>"><a data-toggle="collapse" data-target="#participa">Participa</a></li>
									<ul id="participa" class="collapse [ text-uppercase ][ no-padding ][ collapse--menu ]">
										<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Resultados</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
										<li><a href="<?php echo site_url('/participa/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
									</ul>
									<li class="[ text-uppercase ] <?php echo $activeNoticias; ?>"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
									<li><a type="button" data-toggle="modal" data-target="#SoyCDMX-mobile">#SoyCDMX</a></li>
								</ul>
							</div>
							<img class="[ width-60 ][ margin-top-bottom--large ][ center-block ]" src="<?php echo THEMEPATH; ?>images/logocdmx.png">
						</div>
					</div>

<!-- #SoyCDMX mobile not-home -->
					<div class="modal fade" id="SoyCDMX-mobile" tabindex="-1" role="dialog">
						<div class="[ modal-content ][ width-100 ][ no-margin ]">
							<div class="[ container ]">
								<div class="[ row ]">
									<div class="[ col-xs-2 ][ padding--top-bottom--large ]">
										<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/back.svg"></a>
									</div>
									<div class="[ col-xs-10 ]">
										<h1>#SoyCDM</h1>
									</div>
								</div>
								<?php if (! empty($tweets) ):
									foreach ($tweets as $tweet): ?>
										<div>
											<p class="[ fz-xsmall ]"><?php echo $tweet['user_name'].' @'.$tweet['screen_name']; ?></p>
											<p><?php echo $tweet['text']; ?></p>
											<p class="[ text-italic fz-xsmall ]"><?php echo $tweet['date']; ?></p>
											<hr class="[ border-bottom-gray ]">
										</div>
									<?php endforeach;
								endif; ?>
							</div>
						</div>
					</div>
				</nav>
			</header>
		<?php endif; ?>

		<div class="[ soy-cdmx right-370 ][ js-hidden ]">
			<div class="[ opacity-7 ][ padding--top-bottom--large ][ absolute right-10 ]">
				<a id="js-hide-twitter" href="#">
					<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg">
				</a>
			</div>
			<h1>#SoyCDMX</h1>
			<?php $tweet = new Twitter;
			$tweets = $tweet->feedTwitter();
			if (! empty($tweets) ):
				foreach ($tweets as $tweet): ?>
					<div>
						<p class="[ fz-xsmall ]"><?php echo $tweet['user_name'].' @'.$tweet['screen_name']; ?></p>
						<p><?php echo $tweet['text']; ?></p>
						<p class="[ text-italic fz-xsmall ]"><?php echo $tweet['date']; ?></p>
						<hr class="[ border-bottom-gray ]">
					</div>
				<?php endforeach;
			endif; ?>
		</div>