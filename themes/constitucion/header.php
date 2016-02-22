<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
			<header>
				<nav>
					<ul>
						<li><a href="<?php echo site_url('/'); ?> ">Home</a></li>
						<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?> ">Constitución CDMX</a></li>
						<li><a href="<?php echo site_url('/cdmx/'); ?>">CDMX</a></li>
						<li><a href="<?php echo site_url('/participa/'); ?>">Participa</a>
							<ul>
								<li><a href="<?php echo site_url('/cronologia/'); ?>">Cronología</a></li>
								<li><a href="<?php echo site_url('/instrucciones/'); ?>">Instrucciones</a></li>
								<li>Calendario</li>
								<li>Cuestionario</li>
								<li><a href="#">Link a Youtube</a></li>
								<li><a href="<?php echo site_url('/instrucciones/'); ?>">Instrucciones</a></li>
								<li><a href="<?php echo site_url('/buscador/'); ?>">Buscador</a></li>
								<li><a href="#">Mapa con ubicación de kiosko</a></li>


							</ul>
						</li>
						<li><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a></li>
						<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>"></a></li>
						<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>"></a></li>

					</ul>
				</nav>
			</header>
