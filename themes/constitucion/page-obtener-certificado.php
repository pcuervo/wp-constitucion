<?php get_header();?>
	<section class="[ container ][ margin-top--large ][ text-center ]">
		<img class="[ img-logo ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif" alt="Logo horizontal Constitución CDMX">
		<h2 class="[ text-center text-uppercase ]">¡Gracias por participar!</h2>
		<p class="[ text-center ][ js-codigo-referencia ]">Tu número de folio es: <span></span></p>
		<p class="[ text-center text-uppercase ]">Escribe tu nombre y apellido para obtener tu certificado de participación</p>
		<form class="[ row ][ margin-top--large ][ padding--sides--xsm ]" action="<?php echo site_url('pdf-certificado-de-participacion'); ?>" method="POST" data-parsley-certificado target="_blank">
			<div class="[ col-xs-12 col-sm-4 ]">
				<input type="text" name="nombre" class="form-control [ margin-bottom--large ][ input-primary border-gray ]" placeholder="Nombre(s)" required="">
			</div>
			<div class="[ col-xs-12 col-sm-4 ]">
				<input type="text" name="apellidos" class="form-control [ margin-bottom--large ][ input-primary border-gray ]" placeholder="Apellidos" required="">
			</div>
			<input type="hidden" name="referencia">
			<div class="[ col-xs-12 col-sm-4  ]">
				<button type="submit" class="[ btn btn-secondary color-gray ][ center-block ]">obtener certificado</button>
			</div>
		</form>
	</section>
	<section class="[ container ]">
		<h2 class="[ margin-bottom ]">Conoce los ensayos relacionados con los retos que elegiste</h2>
		<div class="[ row ][ retos ]">
			<div class="[ col-xs-12 col-sm-3 ][ margin-bottom--large ]">
				<h3>Reto 1</h3><!-- reto 1 -->
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem ipsum</p>
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem ipsum sit amet</p>
			</div>
			<div class="[ col-xs-12 col-sm-3 ][ margin-bottom--large ]">
				<h3>Reto 2</h3><!-- reto  2-->
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem</p>
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem ipsum sit</p>
			</div>
			<div class="[ col-xs-12 col-sm-3 ][ margin-bottom--large ]">
				<h3>Reto 3</h3><!-- reto 3 -->
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem ipsum sit amet</p>
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo</p>
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem ipsum sit amet</p>
			</div>
			<div class="[ col-xs-12 col-sm-3 ][ margin-bottom--large ]">
				<h3>Reto 4</h3><!-- reto 4 -->
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo</p>
				<img class="[ svg icon icon--iconed icon--thickness-05 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/bookmark-article.svg" alt="icono de ensayos">
				<p>Titulo del ensayo lorem ipsum sit amet lorem consectetur adipisicing elit.</p>
			</div>
		</div>
	</section>


<?php get_footer(); ?>