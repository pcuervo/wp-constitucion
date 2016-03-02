<?php get_header(); the_post();  ?>
<section >
	<div class="[ relative height-home-video ]">
		<div class="[ js-video-wrapper ]">
				<iframe class="[ embed-responsive-item ]" src="https://www.youtube.com/embed/7Ezz0wnzdiQ" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- <div class="[ bg-image height-home-video ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/home.png');"></div> -->
		<button class="[ btn btn-play ]" onclick="playPause()"><img class="[ width-100 ]" src="<?php echo THEMEPATH; ?>images/play.png"></button>
		<div class="[ logo-video ]">
			<img class="[ width-40 ][ pull-left ]" src="<?php echo THEMEPATH; ?>images/consti_vertical.png">
			<span class="[ lead text-italic ][ color-gray ]">punto<br>de encuentro</span>
		</div>
		<div class="[ visible-xs ][ btn-nav-home ]">
			<a type="button" data-toggle="modal" data-target="#modal-menu-home"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-light ][ pull-right ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg"></a>
		</div>
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
							<li class="[ text-uppercase ]"><a data-toggle="collapse" data-target="#acerca--home">Acerca de la constitución</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
								<ul id="acerca--home" class="collapse [ text-uppercase ][ no-padding ][ collapse--menu ]">
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Mensaje del jefe de gobierno</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Sobre la constitución</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Grupo de trabajo</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Sobre la plataforma</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Hacia el constituyente</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Constitución en Wiki</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Preguntas frecuentes</a></li>
									<li><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Biblioteca</a></li>
								</ul>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
							<li class="[ text-uppercase ]"><a data-toggle="collapse" data-target="#participa--home">Participa</a></li>
								<ul id="participa--home" class="collapse [ text-uppercase ][ no-padding ][ collapse--menu ]">
									<li><a href="<?php echo site_url('/participa/'); ?>">Imagina tu ciudad</a></li>
									<li><a href="<?php echo site_url('/participa/'); ?>">Resultados</a></li>
									<li><a href="<?php echo site_url('/participa/'); ?>">Peticiones</a></li>
									<li><a href="<?php echo site_url('/participa/'); ?>">Diálogos públicos</a></li>
									<li><a href="<?php echo site_url('/participa/'); ?>">Ensayos</a></li>
									<li><a href="<?php echo site_url('/participa/'); ?>">Voces ciudadanas</a></li>
								</ul>
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




	<!-- 	</div>
	</div> -->
</section>

<!-- menu desktop home -->
<ul class="[ menu-home ][ text-center ][ hidden-xs hideen-sm ]">
	<!-- <li class="[ text-uppercase ]"><a href="<?php echo site_url('/'); ?> ">Home</a>- page-home.php --></li>
	<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?> ">Acerca de la constitución</a><!--  Constitución CDMX- page-constitucion-cdmx.php--></li>
	<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
	<li class="[ dropdown ]">
		<button class="dropdown-toggle [ text-uppercase btn-dropdown ]" type="button" id="dropdown--header" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			Participa
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu [ dropdown-menu--header ] [ text-uppercase ]" aria-labelledby="dropdown--header">
			<li><a href="<?php echo site_url('/participa/'); ?>">Cronología</a></li>
			<li><a href="<?php echo site_url('/participa/'); ?>">Cuestionario</a></li>
			<li><a href="<?php echo site_url('/participa/'); ?>">Calendario</a></li>
		</ul>
	</li>
	<li class="[ text-uppercase ]"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
<!-- #SoyCDMX desktop home -->
	<li id="js-btn-cdmx">
		<a href="#">
			<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
			#SoyCDMX<!-- Contacto - page-contacto.php-->
		</a>
	</li>
</ul>

<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-sm-6 ][ margin-top-bottom--large ]">
			<h1 class="[ text-sm-caps text-center ]">ConstituciónCDMX</h1>
			<?php $home = get_page_by_path('home');
			echo wpautop( $home->post_content ); ?>
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

	<!-- Slideshow 1
<div class="rslides_container">
	<ul class="rslides" id="slider1">
		<li><img src="<?php echo THEMEPATH; ?>images/1.jpg" alt=""></li>
		<li><img src="<?php echo THEMEPATH; ?>images/2.jpg"  alt=""></li>
		<li><img src="<?php echo THEMEPATH; ?>images/3.jpg"  alt=""></li>
	</ul>
</div>-->

<!-- Linea tiempo -->
<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-sm-6 ][ margin-top-bottom--large ]">
			<h3 class="[ text-uppercase text-center ]">Línea del tiempo</h3>
			<ul id="scroll" class="[ scroll-cronologia ][ horizontal-slide ][ text-center ]">

				<?php $cronologia = new WP_Query(array(
						'post_type'      => 'eventos',
						'posts_per_page' => -1,
						'orderby'  => 'fecha_evento',
						'order'    => 'ASC',
						'meta_query' => array(
							array(
								'key'     => 'fecha_evento',
							)

						)
					));

				if ( $cronologia->have_posts() ) :
					$count = 0;
					$count_pasados = 0;
					while ( $cronologia->have_posts() ) : $cronologia->the_post();
						$date_event = get_post_meta($post->ID, 'fecha_evento', true);
						$count_pasados = strtotime($date_event) < strtotime( date('Y-m-d') ) ? $count_pasados + 1 : $count_pasados;
						$class_status = strtotime($date_event) < strtotime( date('Y-m-d') ) ? 'ya-paso ' : '';

						$date = '';
						if ($date_event != '') {
							$date_arr = getDateTransform($date_event);
							$date = $date_arr[1].' '.$date_arr[0].' de '.$date_arr[2];
						}

						if($count%2 == 0): ?>
						    <li class="[ box-li <?php echo $class_status; ?> ]">
						    	<a href="<?php the_permalink(); ?>">
									<p class="[ color-gray ][ fz-small top-date ][ margin-top--date ]"><?php echo $date; ?></p>
									<div class="[ border-gray--large ]"></div>
									<div class="[ circle-xsmall ][ margin-auto ]"></div>
									<div class="[ vertical-line ]"></div>
									<div class="[ text--large relative ]">
										<p class="[ evento evento-bottom ]"><?php the_title(); ?></p>
									</div>
								</a>
							</li>
						<?php else: ?>

							<li class="[ box-li <?php echo $class_status; ?> ]">
								<a href="<?php the_permalink(); ?>">
									<div class="[ text--large relative ]">
										<p class="[ evento ]"><?php the_title(); ?></p>
									</div>
									<div class="[ vertical-line ]"></div>
									<div class="[ circle-xsmall ][ margin-auto ]"></div>
									<div class="[ border-gray--large ]"></div>
									<p class="[ color-gray ][ fz-small ][ margin-bottom--date ]"><?php echo $date; ?></p>
								</a>
							</li>

						<?php endif;

						$count++;
					endwhile;

					$data = '';
					if ($cronologia->found_posts >= 7 AND $count_pasados > 0) {
						$recorre = ($count_pasados - 1 ) * 150;
						echo '<input type="hidden" id="recorre" value="'.$recorre.'">';
					}

				endif;
				wp_reset_postdata(); ?>

			</ul>
		</div>
	</div>
</div><!--/container-->


<?php get_footer(); ?>