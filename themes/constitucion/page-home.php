<?php get_header(); the_post();  ?>
			<section>
				<div class="[ bg-image height-home-video ][ margin-bottom ][ relative ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/home.png');">
					<div class="[ width-100 height-100 ]">
						<div class="[ visible-xs ][ padding--top padding--right ][ btn-nav-home ]">
							<a type="button" data-toggle="modal" data-target="#modal-menu"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-light ][ pull-right ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>
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
				<li>
					<a href="<?php echo site_url('/contacto/'); ?>">
						<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
						#SoyCDMX<!-- Contacto - page-contacto.php-->
						<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/drop-down.svg">
					</a>
				</li>
			</ul>

<!--home -- Favor de Leer el archivo readme.md -->

			<div class="[ container ]">
				<div class="[ row ]">
					<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-sm-6 ][ margin-top-bottom--large ]">
						<h1 class="[ text-sm-caps text-center ]">ConstituciónCDMX</h1>
						<h2 class="[ text-center ]"><em>Nulla sed aliquet purus. Sed fringilla facilisis sapien, et iaculis nibh condimentum at. </em></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor nec nulla consectetur lobortis vel nec eros. Aliquam erat volutpat. Sed at tempor nisi. Phasellus suscipit feugiat libero, sit amet dictum turpis maximus sollicitudin. Maecenas quis scelerisque ligula, at hendrerit turpis. Nulla sed aliquet purus. Sed fringilla facilisis sapien, et iaculis nibh condimentum at. Proin ut lorem quis magna dapibus ultricies nec sit amet ex. Vivamus convallis urna in iaculis cursus. Suspendisse venenatis rhoncus commodo. Curabitur et ornare lorem, nec ornare turpis. Nulla ultricies nibh suscipit efficitur congue.</p>
					</div>
				</div>
			</div><!--/container-->
			
<?php get_sidebar(); ?>
			<iframe src="https://ishaqibrahim.cartodb.com/viz/6cc1ad26-d690-11e5-971e-0e31c9be1b51/embed_map" frameborder="0" height="400" width="100%"></iframe>


<?php get_footer(); ?>