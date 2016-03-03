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
				<div class="[ col-md-2 ]">
					<ul lass="[ text-center ]">
						<li class="[ box-li ]">
							<img class="img-slide" src="<?php echo THEMEPATH; ?>/images/cdmx.png"/>
						</li>
					</ul>
				</div>
				<div class="[ col-md-10 ]">
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
			</div> <!-- row -->
	</section>

	<section class="[ container padding--sides--xsm--large ][ text-center ][ margin-bottom--large ]" id="imagina_ciudad">
		<h2 class="[ text-left ]">Imagina tu ciudad</h2>
		<a class="[ btn btn-primary btn-large ][ margin-bottom ]" href="<?php echo site_url('/sondeo-masivo/'); ?> "><strong>Participa</strong></a>
		<h2>¿Ya participaste?</h2>
		<p class="[ text-uppercase ]">Ingresa tu número de folio para obtener tu certificado</p>
		<form class="[ form-inline  ]">
			<div class="[ input-group ]">
				<input type="text" class="[ form-control input--search ][ height-40 ]" placeholder="1456788049">
				<span class="[ input-group-btn ]">
					<button class="[ btn btn-secondary ][ height-40 ]" type="button">
						<img class="[ svg icon icon--iconed--small icon--thickness-2 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/search.svg">
					</button>
				</span>
			</div>
		</form>
	</section>
	<section class="[ container ]">
		<h2>Resultados</h2>
		<a class="[ btn btn-primary btn-large ][ margin-bottom ]" data-toggle="modal" data-target="#participador">Obten tu certificado</a>
	</section>

	<!-- Modal participador -->
	<div id="participador" class="modal fade" role="dialog">
		<div class="modal-dialog modal--participador">
			<!-- Modal content-->
			<div class="modal-content">
<!-- 				<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
 -->				<div class="modal-body">
 					<div class="[ border-primary ]">
 						<div class="[ border-primary ]">
 							<div class="[ border-primary ]">
								<div class="[ row ]">
									<div class="[ col-xs-12 col-sm-4 ]">
										<div class="[ row ]">
											<div class="[ col-xs-6 col-sm-12 ]">
												<img src="<?php echo THEMEPATH; ?>images/consti_vertical.png">
											</div>
											<div class="[ col-xs-6 col-sm-12 ]">
												<p>Con el folio núm. <span>000000</span><br>
												podrás darle seguimiento <br>
												a tu participación</p>
											</div>
										</div>
									</div>
									<div class="[ col-xs-12 col-sm-8 ]">
										<h3>Diego emilio cuesy edgar</h3>
										<p>El grupo de trabajo redactor del proyecto de constitución Política de la Ciudad de México otorga la presente constancia por haber contribuido con ideas, reflexiones y propuestas.</p>
										<p>La Ciudad de México somos todas y todos. Gracias por ser parte de este proceso histórico.</p>
										<p>Ciudad de México a 2 de marzo de 2016</p>
									</div>
								</div>
 							</div><!-- border -->
 						</div><!-- border -->
 					</div><!-- border -->

				</div><!-- modal-body -->
			</div>
		</div>
	</div>

	<section class="[ container ]">
		<h2>Ensayos</h2>
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 ][ form-ensayos ]">
				<form class="[ margin-bottom--large ]" action="" method="POST" data-parsley-validate="">
					<label for="">Título del ensayo o de la relatoría</label>
					<input type="text" name="tipo_ensayo" id="tipo_ensayo" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Máximo 100 caracteres" required="">
					<label for="">Nombre del evento o sesión colaborativa de la cual se derivó el documento</label>
					<input name="nombre_evento" id="nombre_evento" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 100 caracteres" required="">
					<label for="">Frase que describe el evento <span>Comparte una frase que describa el evento/sesión de trabajo</span></label>
					<input name="frase_evento" id="frase_evento" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 120 caracteres" required="">
					<label for="">Fechas en las que sesionó el grupo de trabajo</label>
					<input type="date" name="fecha" class="[ input-primary ][ margin-bottom--large ][ width-50 ]">
					<input type="date" name="fecha" class="[ input-primary ][ margin-bottom--large ][ width-50 pull-left ]">
					<label for="">Resumen <span>Describe a continuación las reflexiones o propuestas centrales de la sesión de trabajo y el contexto en el que esta se llevó a cabo.</span></label>
					<input name="resumen_ensayo" id="resumen_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 250 palabras" required="">
					<label for="">Palabras Clave <span>Señala a continuación 3 palabras clave vinculadas a este documento</span></label>
					<input name="palabras_ensayo" id="palabras_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Ej. vivienda, salario, comunidad" required="">
					<label for="">Frase -Mensaje central <span>Comparte en una frase un mensaje central de la relatoría o ensayo</span></label>
					<input name="mensaje_ensayo" id="mensaje_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 120 caracteres" required="">
					<label for="">Autores <span>Lista a continuación el nombre de todos los autores separados por comas</span></label>
					<input name="autores_ensayo" id="autores_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
					<label for="">Institución u organización <span>En caso de que este ensayo o relatoría haya sido elaborado por una institución u organización señala abajo cuales. En caso de más de una, separar por comas.</span></label>
					<input name="resumen_ensayo" id="resumen_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
					<input name="" id="" type="hidden" value="">
					<button type="submit" class="[ btn btn-primary btn--large ][ pull-right ]"><strong>enviar</strong></button>
				</form>
			</div>
		</div>

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


	<section class="[ container ]">
		<h2 class="[ margin-top--large ]">Diálogos Públicos</h2>
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ col-sm-offset-3 col-sm-6 ]">
				<p>En esta sección podrás registrar acontecimientos que sean espacios de diálogo relacionados a la construcción de la Constitución de la Ciudad de México. Estos pueden ser sesiones de trabajo colaborativas, foros, asambleas, talleres o conferencias.</p>
			</div>
		</div>
		<div class="[ row ]">
			<div class="[ border-box-shadow ][ margin-sides--large margin-bottom--large padding--large ]">
				<h2>Formato y formulario para registrar eventos</h2>
				<form action="">
					<div class="[ form-group ][ col-xs 12 col-sm-6 ]">
						<label class="[ color-gray ]" for=""><span class="[ color-primary ]">Nombre del acontecimiento </span>(máximo 100 caracteres)</label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Text input">
						<label for="">Frase que describe el acontecimiento Comparte una frase que describa el evento/sesión de trabajo/diálogo público (120 caracteres) </label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder="Text input">
						<label for="">Descripción Describe los objetivos, alcances y perfil de asistentes de tu acontecimiento  (120 palabras) </label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Text input">
						<label for="">Liga oficial (Campo No obligatorio) Copia a continuación la liga del sitio oficial del acontecimiento, la cuenta de Facebook o de Twitter </label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder="Text input">
						<label for="">Fechas (Puede ser un sólo día) </label>
						<input type="date" name="fecha">
						<label for="">Ubicación Señala abajo dónde se llevara a cabo </label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder="Text input">
					</div>
					<div class="[ form-group ][ col-xs 12 col-sm-6 ]">git 
						<label for="">Horario ¿En qué momentos se llevará a cabo el evento? </label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder="Text input">
						<label for="">Institución u organización. Si este acontecimiento es organizado por una institución u organización, señala abajo cuál. En caso de más de una, separar por comas. Si son un grupo de personas, nombren su equipo de trabajo. </label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder="Text input">
						<label for="">Asistentes </label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						La asistencia es libre
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						por invitación
						<label for="">Fotografía de cartel o publicidad del acontecimiento. (Campo No obligatorio) Coloca el archivo de la fotografía en google drive, dropbox o onedrive y a continuación copia la liga.</label>
						<input input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder="Text input">
						<label for="">Correo Electrónico Señala a continuación un correo electrónico</label>
    					<input type="email" class="form-control" id="" placeholder="Email">
					</div>
					<div class="[ text-center ]">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>

		</div>



	</section>
<?php get_footer(); ?>