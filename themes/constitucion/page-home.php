<?php get_header(); the_post();  ?>
<section>
	<div class="[ relative bg-gray--xxlight height-home-video ]">

		<video class="[ width-100 ][ center-bottom ]" autoplay loop>
			<source src="<?php echo THEMEPATH; ?>video/ConstitucionCDMX.mp4" type="video/mp4">
		</video>
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
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Acerca de la constitución</a></li>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/participa/'); ?>">Participa</a></li>
							<li class="[ text-uppercase ]"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
							<li><a type="button" data-toggle="modal" data-target="#SoyCDMX-mobile-home">#SomosCDMX</a></li>
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
								<h1>#SomosCDMX</h1>
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
	<li class="[ dropdown--hover ][ text-uppercase ]">
		<span><a href="<?php echo site_url('/constitucion-cdmx/'); ?>">Acerca de la constitución<span class="caret"></span></a></span>
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
	<li class="[ text-uppercase ]"><a href="<?php echo site_url('/cdmx/'); ?>">Ciudad de México</a><!--  - page-cdmx.php--></li>
	<li class="[ dropdown--hover ][ text-uppercase ]">
		<span><a href="<?php echo site_url('/participa/'); ?>">Participa<span class="caret"></span></a></span>
		<ul class="dropdown-content dropdown-menu [ text-uppercase ]" aria-labelledby="dropdown--header">
			<li><a href="<?php echo site_url('/participa/'); ?>#imagina_ciudad">Imagina tu ciudad</a></li>
		<!-- 	<li><a href="<?php echo site_url('/participa/'); ?>#resultados">Resultados</a></li> -->
			<li><a href="<?php echo site_url('/participa/'); ?>#peticiones">Peticiones</a></li>
			<li><a href="<?php echo site_url('/participa/'); ?>#dialogos_publicos">Diálogos públicos</a></li>
			<li><a href="<?php echo site_url('/participa/'); ?>#ensayos">Ensayos</a></li>
			<li><a href="<?php echo site_url('/participa/'); ?>#voces_ciudadanas">Voces ciudadanas</a></li>
		</ul>
	</li>
	<li class="[ text-uppercase ]"><a href="<?php echo site_url('/noticias/'); ?>">Noticias</a><!--  - index.php--></li>
<!-- #SoyCDMX desktop home -->
	<li id="js-btn-cdmx">
		<a href="#">
			<img class="[ svg icon icon--iconed icon--thickness-1 icon--fill ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
			#SomosCDMX<!-- Contacto - page-contacto.php-->
		</a>
	</li>
</ul>

<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-1 col-sm-10 ][ margin-top-bottom--large ]">
			<h1 class="[ text-sm-caps text-center ]">¿una constitución para la ciudad de méxico?</h1>
			<?php $home = get_page_by_path('home');
			echo wpautop( $home->post_content ); ?>
		</div>
	</div>
</div><!--/container-->

<!-- slider -->
	<div class="flexslider relative">
	<ul class="slides">
		<li>
			<img src="<?php echo THEMEPATH; ?>images/1.jpg">
		</li>
		<li>
			<img src="<?php echo THEMEPATH; ?>images/2.jpg">
		</li>
		<li>
			<img src="<?php echo THEMEPATH; ?>images/3.jpg">
		</li>
		<li>
			<img src="<?php echo THEMEPATH; ?>images/1.jpg">
		</li>
	</ul>
	</div><!-- fin slider -->

<!-- Linea tiempo -->
<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-sm-12 ][ margin-top-bottom--large ]">
			<h3 class="[ text-uppercase text-center ]">Línea del tiempo</h3>
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
							$date = '<span class="[ color-primary ]"><strong>'. $date_arr[0] . '</strong></span> ' . $date_arr[1] . ' de ' . $date_arr[2];
						}

						$class_tipo = ($tipo_evento == 3) ? 'nota-destacada ' : '';
						$url = ($tipo_evento != 3) ? get_permalink() : '';

						if($count%2 == 0): ?>
						    <li class="[ box-li <?php echo $class_status.$class_tipo; ?> ]">

						    	<?php if($tipo_evento != 3) echo '<a href="'.$url.'">'; ?>
									<p class="[ color-gray ][ fz-small top-date ][ margin-top--date ][ text-uppercase ]"><?php echo $date; ?></p>
									<div class="[ border-gray--large ]"></div>
									<div class="[ vertical-line ]"></div>
									<div class="[ circle-xsmall ]"></div>
									<div class="[ text--large relative ]">
										<p class="[ evento evento-bottom ]"><?php the_title(); ?></p>
									</div>
								<?php if($tipo_evento != 3) echo '</a>'; ?>

								</a>
							</li>
						<?php else: ?>

							<li class="[ box-li <?php echo $class_status.$class_tipo; ?> ]">
								<?php if($tipo_evento != 3) echo '<a href="'.$url.'">'; ?>
									<div class="[ text--large text--destacado relative ]">
										<p class="[ evento ]"><?php the_title(); ?></p>
									</div>
									<div class="[ vertical-line--large ]"></div>
									<div class="[ border-gray--large ]"></div>
									<p class="[ color-gray ][ fz-small ][ margin-bottom--date ][ text-uppercase ]"><?php echo $date; ?></p>
								<?php if($tipo_evento != 3) echo '</a>'; ?>
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
</div><!--/container-->


<div class="[ bg-gray-light ]">
	<div class="[ container ]">
		<h3 class="[ margin-top--xlarge ][ text-uppercase text-center ][ color-primary ]">Noticias</h3>
		<div class="[ row ][ margin-top-bottom--large ]">
<!-- 3 noticias -->
			<?php $noticias = new WP_Query(array(
					'post_type'      => 'post',
					'posts_per_page' => 3
				));

			if ( $noticias->have_posts() ) :
				while ( $noticias->have_posts() ) : $noticias->the_post(); 
					$url_image = attachment_image_url( $post->ID, 'medium' );?>
					<div class="[ col-xs-12 col-sm-4 ]">
						<a href="<?php the_permalink(); ?>">
							<img class="[ img-responsive ]" src="<?php echo $url_image; ?>">
							<h4 class="[ color-gray ][ text-uppercase ]"><?php the_title(); ?></h4>
							<p class="[ color-gray ]"><?php echo wp_trim_words( get_the_excerpt(), 28 ) ?></p>
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

</div>



<?php get_footer(); ?>