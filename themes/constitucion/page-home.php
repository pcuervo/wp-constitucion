<?php get_header(); the_post();  ?>
<section >
	<div class="[ bg-image height-home-video ][ margin-bottom ][ relative ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/home.png');">
		<div class="[ width-100 height-100 ]">
			<div class="[ visible-xs ][ padding--top padding--right ][ btn-nav-home ]">
				<a type="button" data-toggle="modal" data-target="#modal-menu-home"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-light ][ pull-right ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>
			</div>
<!-- modal menu mobile -->
			<div class="modal fade" id="modal-menu-home" tabindex="-1" role="dialog">
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
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?> ">Información</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/participa/'); ?>">Participa</a><!--  - page-participa.php--></li>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
							<li><a type="button" data-toggle="modal" data-target="#SoyCDMX-mobile-home">#SoyCDMX</a></li>
						</ul>
					</div>
					<img class="[ width-60 ][ margin-top-bottom--large ][ center-block ]" src="<?php echo THEMEPATH; ?>images/logocdmx.png">
				</div>
			</div>
<!-- #SoyCDMX mobile -->
			<div class="modal fade" id="SoyCDMX-mobile-home" tabindex="-1" role="dialog">
				<div class="[ modal-content ][ width-100 ][ no-margin ]">
					<div class="[ container ]">
						<div class="[ row ]">
							<div class="[ col-xs-2 ][ padding--top-bottom--large ]">
								<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/back.svg"></a>
							</div>
							<div class="[ col-xs-10 ]">
								<h1>#SoyCDMX</h1>
							</div>
						</div>

						<?php $tweet = new Twitter;
						$tweets = $tweet->feedTwitter();
						if (! empty($tweets) ):
							foreach ($tweets as $tweet): ?>
								<div class="[ row ]">
									<div class="[ col-xs-12 ][ color-gray ]">
										<p class="[ fz-xsmall ]"><?php echo $tweet['user_name'].' @'.$tweet['screen_name'];  ?></p>
										<p><?php echo $tweet['text'];  ?></p>
										<p class="[ text-italic fz-xsmall ]"><?php echo $tweet['date']; ?></p>
										<hr class="[ border-bottom-gray ]">
									</div>
								</div>
							<?php endforeach;
						endif; ?>


					</div>
				</div>
			</div>

			<div class="[ absolute ][ margin-top--large padding--large ]">
				<img class="[ width-40 ][ pull-left ]" src="<?php echo THEMEPATH; ?>images/consti_vertical.png">
				<span class="[ lead text-italic ][ color-gray ]">punto<br>de encuentro</span>
			</div>
			<button class="[ btn btn-play ]" onclick="playPause()"><img class="[ width-100 ]" src="<?php echo THEMEPATH; ?>images/play.png"></button>
			<video width="100%" height="100%"></video>
		</div>
	</div>
</section>

<!-- menu desktop home -->
<ul class="[ menu-home ][ text-center ][ hidden-xs hideen-sm ]">
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
<!-- #SoyCDMX desktop home -->
	<li id="js-btn-cdmx">
		<a href="#">
			<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
			#SoyCDMX<!-- Contacto - page-contacto.php-->
			<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/drop-down.svg">
		</a>
	</li>
</ul>

<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-sm-6 ][ margin-top-bottom--large ]">
			<h1 class="[ text-sm-caps text-center ]">ConstituciónCDMX</h1>
			<?php $home = get_page_by_path('home');
			echo wpautop($home->post_content); ?>
		</div>
	</div>
</div><!--/container-->
<?php $img_kioskos = get_option( 'img_kioskos' ); ?>
<section class="[ bg-image rectangle-small ][ relative ]" style="background-image: url('<?php echo $img_kioskos; ?>');">
	<div class="[ bg-dark--opacity width-100 height-100 ][ text-center ]">
		<h2 class=" [ text-uppercase ][ no-margin ][ center-full ][ color-light ][ fw-semibold ]">¡Participa en nuestros kioskos!</h2>
	</div>
</section>
<div id="map_canvas" class="mapping" style="width: 100%; height: 500px;"></div>

<?php get_footer(); ?>