<?php get_header(); the_post();
the_title();

global $result;
if( isset( $result['success'] ) ): ?>
	<div class="[ bg-success btn-lg text-center ]"><?php echo $result['success']; ?></div>
<?php endif;  ?>

	<section class="[ bg-gray-light ][ margin--header margin-bottom--large padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<div class="[ padding--sides--xsm ]">
				<?php the_content(); ?>
			</div>
			<div class="[ row ][ margin-top-bottom ][ padding--sides--xsm ]">
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ][ margin-bottom ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 1</p>
							<p class="[ fz-small ]"><?php echo get_post_meta($post->ID, 'paso_a', true);?></p>
						</div>
						<div class="[ col-xs-4 no-padding--sides ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ][ margin-bottom ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 2</p>
							<p class="[ fz-small ]"><?php echo get_post_meta($post->ID, 'paso_b', true);?></p>
						</div>
						<div class="[ col-xs-4 no-padding--sides ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
				<div class="[ clearfix ][ visible-xs ]"></div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ][ margin-bottom ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 3</p>
							<p class="[ fz-small ]"><?php echo get_post_meta($post->ID, 'paso_c', true);?></p>
						</div>
						<div class="[ col-xs-4 no-padding--sides ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ][ margin-bottom ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 4</p>
							<p class="[ fz-small ]"><?php echo get_post_meta($post->ID, 'paso_d', true);?></p>
						</div>
						<div class="[ col-xs-4 no-padding--sides ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	<section class="[ container ]">
		<h2 class="[ no-margin-top ]">Cronología</h2>

		<!-- scroll horizontal -->
			<div class="[ row ][ margin-bottom ]">
				<div class="[ col-md-12 ]">
					<ul id="scroll" class="[ scroll-cronologia ][ horizontal-slide ][ text-center ]">
						<li class="[ box-li ]">
							<img class="img-slide" src="<?php echo THEMEPATH; ?>/images/cdmx.png"/>
						</li>

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
								$recorre = $count_pasados * 150;
								echo '<input type="hidden" id="recorre" value="'.$recorre.'">';
							}

						endif; 
						wp_reset_postdata(); ?>
						
					</ul>
				</div>
			</div> <!-- row -->

	</section>

	<!-- Trigger the modal with a button -->
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Modal</button>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog [ margin-top--xlarge ][ padding--sides--xsm ]">
			<!-- Modal content-->
			<div class="[ row ]">
				<div class="[ col-xs-12  col-sm-10 col-sm-offset-1 ]">
					<div class="modal-content [ no-border-radius ]">
						<div class="modal-body [ padding--bottom--xxlarge padding--sides padding--sides--large--sm ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif">

							<h2 class="[ text-center ][ text-uppercase ]">¡Gracias por participar!</h2>
							<p class="[ text-center ][ text-uppercase ]">Escribe tu nombre y apellido para obtener tu certificado de participación</p>
							<form class="[ row ]">
								<div class="[ col-xs-12 col-sm-6  padding--right--small--sm ]">
									<input type="text" class="form-control [ margin-bottom ][ input--search ] " placeholder="NOMBRES">
								</div>
								<div class="[ col-xs-12 col-sm-6 padding--left--small--sm ]">
									<input type="text" class="form-control [ margin-bottom ][ input--search ] " placeholder="APELLIDOS">
								</div>
								<button type="submit" class="[ btn btn-secondary color-gray ][ pull-right ]">enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <section class="[ bg-gray-light ][ margin-bottom--large padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<h2 class="[ no-margin-top ]">Instrucciones</h2>
			<p class="[ lead ][ text-uppercase ]">Lorem ipsum asit amet</p>
			<div class="[ row ][ text-center ][ margin-bottom--large ]">
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
			</div>
			<div class="[ row ]">
				<div class="[ col-xs-3 col-xs-offset-9 ][ text-center ]">
					<a href="" class="[ btn btn-primary ][ margin-bottom--small ]">siguiente</a>
					<p class="[ fz-xsmall ][ text-uppercase ]">Pregunta 1 de 12</p>
				</div>
			</div>
		</article>
	</section> -->
	<section class="[ container padding--sides--xsm--large ][ text-center ][ margin-bottom--large ]">
		<h2>¿Ya participaste?</h2>
		<p class="[ text-uppercase ]">Ingresa tu número de folio para obtener tu certificado</p>
		<form class="[ form-inline  ]">
			<div class="[ input-group ]">
				<input type="text" class="[ form-control input--search ][ height-40 ]" placeholder="012345678-6">
				<span class="[ input-group-btn ]">
					<button class="[ btn btn-secondary ][ height-40 ]" type="button">
						<img class="[ svg icon icon--iconed--small icon--thickness-1 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/find.svg">
					</button>
				</span>
			</div>
		</form>
	</section>
	<section class="[ bg-gray-light ][ padding--top--xlarge padding-bottom--large--sm ]">
		<article class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ]">Voces ciudadanas</h2>
			<div class="[ row ][ margin-bottom ]">
				<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 4,
						'meta_query' => array(
							array(
								'key'     => 'video_voces',
								'value'   => '',
								'compare' => '!=',
							),
						),
					));

				if ( $voces_ciudadanas->have_posts() ) : 
					$count = 0;
					$count_pasados = 0;
					while ( $voces_ciudadanas->have_posts() ) : $voces_ciudadanas->the_post(); ?>
						<div class="[ col-xs-12 col-sm-6 col-lg-3 ][ margin-bottom ]">
							<div class="[ js-video-wrapper ]">

								<?php $video = get_post_meta( $post->ID, 'video_voces', true );
								preg_match('/src="([^"]+)"/', $video, $match);
								$url_video = $match[1]; ?>
								<iframe class="[ embed-responsive-item ]" src="<?php echo $url_video; ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					<?php endwhile; 
				endif; 
				wp_reset_postdata(); ?>
			
			</div>
			<div class="[ text-right ]">
				<a href="https://www.youtube.com/channel/UC3-12ySVHF-iItCbSdZ2z-Q" target="_blank"><p class="[ inline-block align-middle ][ no-margin ]">Ver más</p></a>
				<img class="[ inline-block align-middle ][ svg icon icon--iconed--small icon--thickness-1 icon--stoke ][ color-youtube ]"  src="<?php echo THEMEPATH; ?>icons/youtube.svg">
			</div>
		</article>
	</section>
	<section class="[ container padding--sides--xsm ][ margin-bottom--xlarge ]">
		<div class="[ bg-light float-top--sm ][ padding--top-bottom--large padding--sides--large--sm ]">
			<div>
				<h2 class="[ inline-block align-middle ][ no-margin ]">Estimados</h2>
				<img class="[ inline-block align-middle ][ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif">
			</div>
			<form class="[ margin-bottom--large ]" action="" method="POST">
				<input type="text" name="mensaje_cdmx" id="mensaje_cdmx" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Escribe tu mensaje">
				<h2 class="[ margin-bottom--large ][ fz-small--xs ]">Con respeto,</h2>
				<input name="nombre_cdmx" id="nombre_cdmx" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Tu nombre">
				<input name="email_cdmx" id="email_cdmx" type="email" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Correo Electrónico">
				<input name="telefono_cdmx" id="telefono_cdmx" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Teléfono">
				<input name="accion" id="accion" type="hidden" value="guarda-formulario">

				<button type="submit" class="[ btn btn-secondary ][ pull-right ]">enviar</button>
			</form>
		</div>
	</section>

<?php get_footer(); ?>