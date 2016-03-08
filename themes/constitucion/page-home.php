<?php get_header(); the_post();  ?>
<div id="container_video" class="[ bg-gray--xxlight hero_video ][ margin-bottom--large ]" style="background-image: url('http://pcuervo.com/constitucion/wp-content/uploads/2016/03/Captura-de-pantalla-2016-03-04-a-las-22.16.06.png'); background-size: cover;">
	<video class="[ width-100 ][ center-full video_home ]" autoplay loop>
		<source src="<?php echo THEMEPATH; ?>video/ConstitucionCDMX.mp4" type="video/mp4">
	</video>
	<div class="[ logo-video ]">
		<img class="[ width-80 ][ pull-left ]" src="<?php echo THEMEPATH; ?>images/Logotipo_Blanco-03.png">
	</div>
	<div class="[ hero_video__scroll ][ text-center ][ js-hero_video__scroll ]">
		<p class="[ text-center ][ color-light ][ margin-bottom--small ]">Conoce más</p>
		<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/arrow-down-9.svg">
	</div>
</div>

<section class="[ container ]" id="js-home-scroll-point">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-1 col-sm-10 ]">
			<h1 class="[ text-center ]">¿una constitución para la ciudad de méxico?</h1>
			<?php $home = get_page_by_path('home');
			echo wpautop( $home->post_content ); ?>
		</div>
	</div>
</section><!--/container-->

<!-- slider -->
<section class="flexslider relative">
	<ul class="slides">
		<li>
			<a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">
				<img src="<?php echo THEMEPATH; ?>images/slide-imagina.jpg">
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('/participa/'); ?>#peticiones">
				<img src="<?php echo THEMEPATH; ?>images/slide-peticion.jpg">
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('/participa/' ); ?>#dialogos_publicos">
				<img src="<?php echo THEMEPATH; ?>images/slide-organiza.jpg">
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('/participa/' ); ?>">
				<img src="<?php echo THEMEPATH; ?>images/slide-participa.jpg">
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('/participa/' ); ?>#ensayos">
				<img src="<?php echo THEMEPATH; ?>images/slide-publica.jpg">
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('/cdmx/' ); ?>#voces_ciudadanas">
				<img src="<?php echo THEMEPATH; ?>images/slide-voces-ciudadanas.jpg">
			</a>
		</li>
	</ul>
</section><!-- fin slider -->

<!-- Linea tiempo -->
<section class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-sm-12 ]">
			<h2 class="[ text-uppercase text-center ]">Hacia una ConstituciónCDMX</h2>
			<ul id="scroll" class="[ scroll-cronologia ][ horizontal-slide ][ text-center ]">

				<?php $cronologia = new WP_Query(array(
						'post_type'      => 'linea-del-tiempo',
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
						$tipo_evento = get_post_meta( $post->ID, 'tipo-de-evento', true );
						$date_event = get_post_meta($post->ID, 'fecha_evento', true);
						$count_pasados = strtotime($date_event) < strtotime( date('Y-m-d') ) ? $count_pasados + 1 : $count_pasados;
						$class_status = strtotime($date_event) < strtotime( date('Y-m-d') ) ? 'ya-paso ' : '';

						$date = '';
						if ($date_event != '') {
							$date_arr = getDateTransform($date_event);
							$date = '<span class="[ color-primary ]"><strong>'. $date_arr[0] . '</strong></span> ' . $date_arr[1];
						}


						if($tipo_evento != 3): ?>
						    <li class="[ box-li <?php echo $class_status; ?> ]">

						    	<a href="<?php echo get_permalink(); ?>">
									<p class="[ color-gray ][ fz-small top-date ][ margin-top--date ][ text-uppercase ]"><?php echo $date; ?></p>
									<div class="[ border-gray--large ]"></div>
									<div class="[ vertical-line ]"></div>
									<div class="[ circle-xsmall ]"></div>
									<div class="[ text--large relative ]">
										<p class="[ evento evento-bottom ]"><?php the_title(); ?></p>
									</div>
								</a>
							</li>
						<?php else: ?>

							<li class="[ box-li nota-destacada ]">
								<div class="[ text--large text--destacado relative ]">
									<p class="[ evento ]"><?php the_title(); ?></p>
								</div>
								<div class="[ box-li__lines ]">
									<div class="[ vertical-line--large ]"></div>
									<div class="[ border-gray--large ]"></div>
								</div>
								<p class="[ color-gray ][ fz-small ][ margin-bottom--date ][ text-uppercase ]"></p>
							</li>

						<?php endif;

						$count++;
					endwhile;

					$data = '';
					if ($cronologia->found_posts >= 7 AND $count_pasados > 0):
						$recorre = ($count_pasados - 1 ) * 165;
						echo '<input type="hidden" id="recorre" value="'.$recorre.'">';
					endif;
				else:
					echo '<p class="text-center">No existen eventos</p>';
				endif;
				wp_reset_postdata(); ?>

			</ul>
		</div>
	</div>
</section><!--/container-->


<section class="[ section--bg bg-gray-light ][ no-margin--bottom ]">
	<div class="[ container ]">
		<h2 class="[ text-uppercase text-center ]">Noticias</h2>
		<div class="[ row ]">
			<!-- 3 noticias -->
			<?php $noticias = new WP_Query(array(
					'post_type'      => 'post',
					'posts_per_page' => 6
				));

			if ( $noticias->have_posts() ) :
				while ( $noticias->have_posts() ) : $noticias->the_post();
					$url_image = attachment_image_url( $post->ID, 'medium' );?>
					<div class="[ col-xs-6 col-sm-4 ][ margin-bottom ][ post_compact ]">
						<a href="<?php the_permalink(); ?>">
							<img class="[ img-responsive ][ margin-bottom--small ]" src="<?php echo $url_image; ?>">
							<div>
								<h4 class="[ color-gray ][ text-uppercase ]"><?php the_title(); ?></h4>
							</div>
						</a>
					</div>
				<?php endwhile;
			endif; ?>

		</div>
<!-- con 2 noticias -->
		<!-- <div class="[ row ][ margin-bottom--large ]">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-4 ]">
				<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/noticiashome.png">
				<h4 class="[ color-gray ][ text-uppercase ]">Encabezado</h4>
				<p class="[ color-gray ]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pel-lentesque accumsan
				 lorem id porttitor porttitor. In pulvinar pellentesque ornare. n lorem id porttitor porttitor.pulvinar pellentesque ornare.</p>
			</div>
			<div class="[ col-xs-12 col-sm-4 ]">
				<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/noticiashome.png">
				<h4 class="[ color-gray ][ text-uppercase ]">Encabezado</h4>
				<p class="[ color-gray ]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pel-lentesque accumsan
				 lorem id porttitor porttitor. In pulvinar pellentesque ornare. n lorem id porttitor porttitor.pulvinar pellentesque ornare.</p>
			</div>
		</div> -->
<!-- con 1 noticia -->
		<!-- <div class="[ row ][ margin-bottom--large ]">
			<div class="[ col-xs-12 col-sm-offset-4 col-sm-4 ]">
				<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/noticiashome.png">
				<h4 class="[ color-gray ][ text-uppercase ]">Encabezado</h4>
				<p class="[ color-gray ]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pel-lentesque accumsan
				 lorem id porttitor porttitor. In pulvinar pellentesque ornare. n lorem id porttitor porttitor.pulvinar pellentesque ornare.</p>
			</div>
		</div> -->

	</div> <!-- /container -->

</section>



<?php get_footer(); ?>