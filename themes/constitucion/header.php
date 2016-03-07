<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="Byb1H1rs62xSD29RXSfE63bDOr6AfaSq7YoUIRs3Bl0" />
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
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.png">
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

	<body <?php body_class(); ?>>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-52W5VS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-52W5VS');</script>
		<!-- End Google Tag Manager -->

		<?php $activeAcerca = is_page('constitucion-cdmx') ? 'active' : '';
		$activeCdmx = is_page('cdmx') ? 'active' : '';
		$activeParticipa = is_page('participa') ? 'active' : '';
		$activeNoticias = is_home() || is_singular('post') ? 'active' : '';   ?>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->

		<?php $tweet = new Twitter;
		$tweets = $tweet->feedTwitter();

		if ( is_page('home') ): ?>
			<header class="[ header-home ]">
				<nav class="[ height-100 ]">
<!-- menu desktop home -->
					<ul class="[ menu-desktop ][ text-center ][ hidden-xs ][ height-100 ]">
						<li class="[ no-padding--sides ][ menu-desktop__logo ]">
							<a class="[ inline-block ]" href="<?php echo site_url('/'); ?> ">
								<img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif" alt="logo vertical de Ciudad de México">
								<span class="[ text-italic ][ relative bottom-10 ]">punto</span>
								<span class="[ text-italic ][ relative top-20 right-42 ][ margin-right--31 ]">de encuentro</span> <!-- - page-home.php -->
							</a>
						</li><li
						class="[ dropdown--hover dropdown--hover--acerca ][ menu-desktop__acerca ]">
							<a class="[ text-uppercase ]" href="<?php echo site_url('/constitucion-cdmx/'); ?>">Acerca de la<br>constitución<span class="caret"></span></a>
							<ul class="dropdown-content dropdown-menu" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#jefe_gobierno">Mensaje del jefe de gobierno</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_constitucion">Sobre la constitución</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#grupo_trabajo">Grupo de trabajo</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_plataforma">Sobre la plataforma</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#hacia_constituyente">Hacia el constituyente</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#constitución_wiki">Constitución en Wiki</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#preguntas_frecuentes">Preguntas frecuentes</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#biblioteca">Biblioteca</a></li>
							</ul>
						</li><li
						class="[ dropdown--hover ]<?php echo $activeCdmx; ?>">
							<span>
								<a class="[ text-uppercase ]" href="<?php echo site_url('/cdmx/'); ?>">
									Ciudad de México<span class="caret"></span>
								</a>
							</span>
							<ul class="dropdown-content dropdown-menu" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/cdmx/'); ?>#cronica">Crónica</a></li>
								<li><a href="<?php echo site_url('/cdmx/'); ?>#hacia_el_constituyente">Hacia el constituyente</a></li>
								<li><a href="<?php echo site_url('/cdmx/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
							</ul>
						</li><li
						class="[ dropdown--hover ]">
							<span><a class="[ text-uppercase ]" href="<?php echo site_url('/participa/'); ?>">Participa<span class="caret"></span></a></span>
							<ul class="dropdown-content dropdown-menu" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Da seguimiento a tu participación</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#registra_tu_evento">Registra tu evento</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
							</ul>
						</li><li
						class="[ text-uppercase ] <?php echo $activeNoticias; ?>">
							<a href="<?php echo site_url('/noticias/'); ?>">Noticias</a>
						</li><li
						id="js-btn-cdmx">
							<a href="#">
								<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg" alt="icono de red social twitter">
								#SomosCDMX<!-- Contacto - page-contacto.php-->
							</a>
						</li>
					</ul>

<!-- nav header movil home -->
					<div class="[ bg-light ][ visible-xs ]">
						<div class="[ container ]">
							<div class="[ width-col-9 ][ inline-block align-middle ]">
								<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"  alt="logo vertical de Ciudad de México"></a>
								<span class="[ text-italic fz-xsmall ][ relative ]">punto</span>
								<span class="[ text-italic fz-xsmall ][ relative top-12 right-32 ]">de encuentro</span> <!-- - page-home.php -->
							</div><div
								class="[ width-col-3 ][ inline-block align-middle ][ text-center ]">
								<a class="[ pull-right ]" href="#" data-toggle="modal" data-target="#modal-menu">
									<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg" alt="icono para desplegar navegador">
								</a>
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
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Acerca de la constitución</a></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/participa/'); ?>">Participa</a></li>
									<li class="[ text-uppercase ] <?php echo $activeNoticias; ?>"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
									<li><a type="button" data-toggle="modal" data-target="#SoyCDMX-mobile--home">#SomosCDMX</a></li>
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
			<header class="[ not-home ]">
				<nav class="[ height-100 ]">
					<!-- menu desktop not home -->
					<ul class="[ menu-desktop ][ text-center ][ hidden-xs ][ height-100 ]"> <!-- hidden-sm -->
						<li class="[ no-padding--sides ][ menu-desktop__logo ]">
							<a class="[ inline-block ]" href="<?php echo site_url('/'); ?>">
								<img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif">
								<span class="[ text-italic ][ relative ]">punto</span>
								<span class="[ text-italic ][ relative top-20 right-42 ][ margin-right--31 ]">de encuentro</span> <!-- - page-home.php -->
							</a>
						</li><li
						class="[ dropdown--hover dropdown--hover--acerca ][ menu-desktop__acerca ]">
							<a class="[ text-uppercase ]" href="<?php echo site_url('/constitucion-cdmx/'); ?>">Acerca de la<br>constitución<span class="caret"></span></a>
							<ul class="dropdown-content dropdown-menu" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#jefe_gobierno">Mensaje del jefe de gobierno</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_constitucion">Sobre la constitución</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#grupo_trabajo">Grupo de trabajo</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#sobre_plataforma">Sobre la plataforma</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#hacia_constituyente">Hacia el constituyente</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#constitución_wiki">Constitución en Wiki</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#preguntas_frecuentes">Preguntas frecuentes</a></li>
								<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>#biblioteca">Biblioteca</a></li>
							</ul>
						</li><li
						class="[ dropdown--hover ]<?php echo $activeCdmx; ?>">
							<span>
								<a class="[ text-uppercase ]" href="<?php echo site_url('/cdmx/'); ?>">
									Ciudad de México<span class="caret"></span>
								</a>
							</span>
							<ul class="dropdown-content dropdown-menu" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/cdmx/'); ?>#cronica">Crónica</a></li>
								<li><a href="<?php echo site_url('/cdmx/'); ?>#hacia_el_constituyente">Hacia el constituyente</a></li>
								<li><a href="<?php echo site_url('/cdmx/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
							</ul>
						</li><li
						class="[ dropdown--hover ]">
							<span><a class="[ text-uppercase ]" href="<?php echo site_url('/participa/'); ?>">Participa<span class="caret"></span></a></span>
							<ul class="dropdown-content dropdown-menu" aria-labelledby="dropdown--header">
								<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Da seguimiento a tu participación</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#registra_tu_evento">Registra tu evento</a></li>
								<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
							</ul>
						</li><li
							class="[ text-uppercase ] <?php echo $activeNoticias; ?>">
							<a href="<?php echo site_url('/noticias/'); ?>">Noticias</a>
						</li><li
						id="js-btn-cdmx">
							<a href="#">
								<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
								#SomosCDMX<!-- Contacto - page-contacto.php-->
							</a>
						</li>
					</ul>

<!-- nav header movil not home -->
					<div class="[ bg-light ][ visible-xs ]">
						<div class="[ container ]">
							<div class="[ width-col-9 ][ inline-block align-middle ]">
								<a href="<?php echo site_url('/'); ?> "><img class="[ logo ]" src="<?php echo THEMEPATH; ?>images/logo-vertical.gif"></a>
								<span class="[ text-italic fz-xsmall ][ relative ]">punto</span>
								<span class="[ text-italic fz-xsmall ][ relative top-12 right-32 ]">de encuentro</span> <!-- - page-home.php -->
							</div><div
							class="[ width-col-3 ][ inline-block align-middle ][ text-center ]">
								<a href="#" class="[ pull-right ]" data-toggle="modal" data-target="#modal-menu"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>
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
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Acerca de la constitución</a></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
									<li class="[ text-uppercase ]"><a href="<?php echo site_url('/participa/'); ?>">Participa</a></li>
									<li class="[ text-uppercase ] <?php echo $activeNoticias; ?>"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
									<li><a type="button" data-toggle="modal" data-target="#SoyCDMX-mobile">#SomosCDMX</a></li>
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
			<h3>#SomosCDMX</h3>
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

		<div class="[ main ]">