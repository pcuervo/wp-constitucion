<?php get_header(); the_post();
the_title();

global $result;
if( isset( $result['success'] ) ): ?>
	<div class="[ bg-success btn-lg text-center ]"><?php echo $result['success']; ?></div>
<?php endif;  ?>

	<section class="[ bg-image rectangle-small ][ margin--header ][ relative ]" style="background-image: ">
		<div class="[ bg-dark--opacity width-100 height-100 ]">
			<h1 class=" [ text-uppercase ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]">Participa</h1>
		</div>
	</section>

	<section class="[ container ][ padding--header--id ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum voluptas molestias officia blanditiis quidem tempore ut, ea, sint voluptatem hic ipsa odio, pariatur cum at! Voluptates, obcaecati maiores error velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eum, cupiditate voluptatum dicta libero iure! Accusamus accusantium ea neque eius officiis, dolor et, iusto numquam. Officia voluptas impedit, delectus vel.</p>
			</div>
		</div>
	</section>
	<section class="[ bg-gray-light ][ padding--header--id padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<h2 class="[ no-margin-top ]">Instrucciones</h2>
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
	<article class="[ padding--header--id ]" id="imagina_ciudad">
		<section class="[ container padding--header--id padding--sides--xsm--large ][ text-center ]">
			<h2 class="[ no-margin-top margin-bottom ]">Imagina tu ciudad</h2>
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maiores, mollitia at qui aperiam illo cumque inventore eveniet facere quos, recusandae assumenda, delectus autem corporis cupiditate necessitatibus odio enim deserunt?</p>
			</div>
			<div class="[ clear ]"></div>
			<a class="[ btn btn-primary btn-large ][ margin-top-bottom ]" href="<?php echo site_url('/sondeo-masivo/'); ?> "><strong>Participa</strong></a>
			<h2>¿Ya participaste?</h2>
			<p class="[ text-uppercase ]">Ingresa tu número de folio para obtener tu certificado</p>
			<form class="[ form-inline ]">
				<div class="[ input-group ]">
					<input type="text" class="[ form-control input--search ][ height-70 ][ fz-xxlarge ]" placeholder="1456788049">
					<span class="[ input-group-btn ]">
						<button class="[ btn btn-secondary ][ height-70 ]" type="button" id="resultados">
							<img class="[ svg icon icon--iconed--small icon--thickness-2 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/search.svg">
						</button>
					</span>
				</div>
			</form>
		</section>
	</article>
	<section class="[ descanso-visual ]" id="sobre_constitucion">
		<img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="">
	</section>
	<article class="[ space-id ]"  id="peticiones">
		<section class="[ container ]">
			<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
				<h2 class="[ no-margin-top margin-bottom ]">Peticiones</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit in suscipit similique tempore ab quam voluptatibus, quos modi fuga iusto earum incidunt repellendus quis tempora? Perspiciatis officia accusantium temporibus esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus dolorum quam illo veniam id placeat nulla repellat vero debitis ratione consectetur eos praesentium, delectus doloremque dolor, ipsa deserunt eaque.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consequuntur error illum. Atque esse, et iure rerum fugiat consequuntur repellendus est dignissimos alias officia fugit culpa nam consequatur exercitationem quae!</p>
			</div>
			<div class="[ text-center ][ clear ]">
				<a class="[ btn btn-primary btn-large ][ margin-top ]" data-toggle="modal" data-target="#trabajador"><strong>Realizar petición</strong></a>
			</div>
		</section>
	</article>
	<article class="[ bg-gray--fondo space-id no-margin ]" id="dialogos_publicos">
		<section class="[ container ]">
				<div class="[ row ]">
					<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
						<h2 class="[ no-margin-top ]">Diálogos Públicos</h2>
						<p>En esta sección podrás registrar acontecimientos que sean espacios de diálogo relacionados a la construcción de la Constitución de la Ciudad de México. Estos pueden ser sesiones de trabajo colaborativas, foros, asambleas, talleres o conferencias.</p>
					</div>
				</div>
			<!-- scroll horizontal -->
				<div class="[ row ][ margin-bottom ]">
				
					<div class="[ col-md-12 ]">
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
										$date = '<span class="[ color-primary ]"><strong>'. $date_arr[0] . '</strong></span> ' . $date_arr[1] . ' de ' . $date_arr[2];
									}

									if($count%2 == 0): ?>
										<li class="[ box-li <?php echo $class_status; ?> ]">
											<a href="<?php the_permalink(); ?>">
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
										<li class="[ box-li <?php echo $class_status; ?> ]">		<!-- estilo evento destacado -->
											<a href="<?php the_permalink(); ?>">
												<div class="[ text--large text--destacado relative ]">
													<p class="[ evento ]"><?php the_title(); ?></p>
												</div>
												<div class="[ vertical-line--large ]"></div>
												<div class="[ border-gray--large ]"></div>
												<p class="[ color-gray ][ fz-small ][ margin-bottom--date ][ text-uppercase ]"><?php echo $date; ?></p>
											</a>
										</li>

									<?php endif;

									$count++;
								endwhile;

								$data = '';
								if ($cronologia->found_posts >= 7 AND $count_pasados > 0) {
									$recorre = ($count_pasados - 1 ) * 165;
									echo '<input type="hidden" id="recorre" value="'.$recorre.'">';
								}

							endif;
							wp_reset_postdata(); ?>

						</ul>
					</div>
				</div> <!-- row -->

				<div class="[ box-shadow--form ]">
					<h2 class="[ margin-bottom--large ]">Regristra tu evento</h2>
					<form id="form-eventos" class="[ margin-bottom--large ]" action="" method="POST" data-parsley-validate="">
						<div class="[ row ]">
							<div class="[ col-xs-12 col-sm-6 ]">
								<label for=""><strong class="[ color-primary ]">Nombre</strong> del acontecimiento</label>
								<input type="text" name="nombre_evento" id="nombre_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="(máximo 100 caracteres)" required="" data-parsley-maxlength="100">
								<label for=""><strong class="[ color-primary ]">Frase que describe el acontecimiento</strong> Comparte una frase que describa el evento/sesión de trabajo/diálogo público</label>
								<input type="text" name="frace_evento" id="frace_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder=" (120 caracteres) " required="" data-parsley-maxlength="120">
								<label for=""><strong class="[ color-primary ]">Descripción</strong> Describe los objetivos, alcances y perfil de asistentes de tu acontecimiento </label>
								<input type="text" name="descripcion_evento" id="descripcion_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder=" (120 palabras) " required="" data-parsley-maxlength="120">
								<label for=""><strong class="[ color-primary ]">Liga oficial</strong><i class="[ color-gray--light ]"> (Campo No obligatorio) </i> Copia a continuación la liga del sitio oficial del acontecimiento, la cuenta de Facebook o de Twitter </label>
								<input type="text" name="liga_oficial_evento" id="liga_oficial_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Liga oficial (Campo No obligatorio) ">
								<label for=""><strong class="[ color-primary ]">Fechas</strong> (Puede ser un sólo día) </label>
								<input class="[ input-primary border-gray ][ margin-bottom--large ] date-ensayo" name="fecha_evento" id="fecha_evento" placeholder="yyyy-mm-dd" required="" type="text">
								<label for=""><strong class="[ color-primary ]">Ubicación</strong> Señala abajo dónde se llevara a cabo </label>
								<input type="text" name="ubicacion_evento" id="ubicacion_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Ubicación">
							</div>
							<div class="[ col-xs-12 col-sm-6 ]">
								<label for=""><strong class="[ color-primary ]">Horario</strong> ¿En qué momentos se llevará a cabo el evento? </label>
								<input type="text" name="horarios_evento" id="horarios_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Horario">
								<label for=""><strong class="[ color-primary ]">Institución u organización.</strong> Si este acontecimiento es organizado por una institución u organización, señala abajo cuál. En caso de más de una, separar por comas. Si son un grupo de personas, nombren su equipo de trabajo. </label>
								<input type="text" name="institucion_evento" id="institucion_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Institución u organización.">
								<label for=""><strong class="[ color-primary ]">Asistentes</strong></label>
								<div class="[ margin-bottom--large ]">
									<div>
										<input  type="radio" name="asistencia_invitacion" id="asistencia_invitacion" value="no" checked>
										La asistencia es libre
									</div>
									<div>
										<input type="radio" name="asistencia_invitacion" id="asistencia_invitacion1" value="si" >
										Por invitación
									</div>
								</div>
								<label for=""><strong class="[ color-primary ]">Fotografía de cartel o publicidad del acontecimiento.</strong> (Campo No obligatorio) Coloca el archivo de la fotografía en google drive, dropbox o onedrive y a continuación copia la liga.</label>
								<input name="fotografia_evento" id="fotografia_evento"  class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" type="text" >
								<label for=""><strong class="[ color-primary ]">Correo Electrónico</strong> Señala a continuación un correo electrónico</label>
								<input name="correo_evento" id="correo_evento" type="email" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Correo Electrónico">
							</div>
						</div>
						<div class="[ text-center ]">
							<input name="accion" id="accion" type="hidden" value="guarda-evento">
							<button type="submit" class="[ btn btn-primary btn--large ]"><strong>enviar</strong></button>
						</div>
					</form>
				</div>
			</section>
	</article>
	<section class="[ descanso-visual ]" id="sobre_constitucion">
		<img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="">
	</section>
	<article class="[ space-id ]" id="ensayos">
		<section class="[ container ]">
			<div class="[ row ][ margin-bottom ]">
					<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
						<h2 class="[ no-margin-top ]">Ensayo</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ducimus soluta. Tempora recusandae cum cumque odit consequatur, laborum nulla atque accusamus doloribus rem placeat, optio libero delectus voluptatem repellendus facilis.</p>
					</div>
				</div>
			<div class="[ box-shadow--form ]">
				<h2 class="[ margin-bottom ]">Comparte tu ensayo o relatoria</h2>
				<form id="form-ensayos" class="[ margin-bottom--large ]" action="" method="POST" data-parsley-validate="" >
					<div class="[ row ]">
						<div class="[ form-group ][ col-xs-12 col-sm-6 ]">
							<label for=""><span class="[ color-primary ]">Título del ensayo</span> o de la relatoría</label>
							<input type="text" name="titulo_ensayo" id="titulo_ensayo" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Máximo 100 caracteres" required="" data-parsley-maxlength="100">
							<label for=""><span class="[ color-primary ]">Nombre del evento</span> o sesión colaborativa de la cual se derivó el documento</label>
							<input name="nombre_ensayo" id="nombre_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 100 caracteres"  required="" data-parsley-maxlength="100">
							<label for=""><span class="[ color-primary ]">Frase que describe el evento</span> <span>Comparte una frase que describa el evento/sesión de trabajo</span></label>
							<input name="frase_ensayo" id="frase_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 120 caracteres"  required="" data-parsley-maxlength="120">
							<label for=""><span class="[ color-primary ]">Fechas en las que sesionó</span> el grupo de trabajo</label><br>
							<label for="">Inicio</label>
							<input type="text" name="fechaInicio" class="[ input-primary ][ margin-bottom--large ][ width-50 ] date-ensayo" placeholder="yyyy-mm-dd" required=""><br>
							<label for="">Final</label>
							<input type="text" name="fechaFinal" class="[ input-primary ][ margin-bottom--large ][ width-50 ] date-ensayo-fin" placeholder="yyyy-mm-dd" disabled>
							<label for=""><span class="[ color-primary ]">Resumen</span> <span>Describe a continuación las reflexiones o propuestas centrales de la sesión de trabajo y el contexto en el que esta se llevó a cabo.</span></label>
							<input name="resumen_ensayo" id="resumen_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 250 palabras" required="" data-parsley-maxlength="120">
							<label for=""><span class="[ color-primary ]">Palabras Clave</span> <span>Señala a continuación 3 palabras clave vinculadas a este documento</span></label>
							<input name="palabra_a" id="palabra_a" type="text" class="[ form-control ][ input-primary ][ margin-bottom ]" placeholder="Palabra 1" required="">
							<input name="palabra_b" id="palabra_b" type="text" class="[ form-control ][ input-primary ][ margin-bottom ]" placeholder="Palabra 2" required="">
							<input name="palabra_c" id="palabra_c" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Palabra 3" required="">
							<label for=""><span class="[ color-primary ]">Frase -Mensaje central</span> <span>Comparte en una frase un mensaje central de la relatoría o ensayo</span></label>
							<input name="mensaje_central" id="mensaje_central" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 120 caracteres" required="" data-parsley-maxlength="120">
							<label for=""><span class="[ color-primary ]">Autores</span> <span>Lista a continuación el nombre de todos los autores separados por comas</span></label>
							<input name="autores_ensayo" id="autores_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
							<label for=""><span class="[ color-primary ]">Institución u organización</span> <span>En caso de que este ensayo o relatoría haya sido elaborado por una institución u organización señala abajo cuales. En caso de más de una, separar por comas.</span></label>
							<input name="institucion-u-organizacion" id="institucion-u-organizacion" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
						</div>
						<div class="[ form-group ][ col-xs 12 col-sm-6 ]">
							<label for=""><span class="[ color-primary ]">Fotografias</span> <span>Comparte fotografías del grupo que trabajó este documento. Copia a continuación la liga a google drive, dropbox o onedrive. </span></label>
							<input name="fotografias_ensayo" id="fotografias_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
							<label for=""><span class="[ color-primary ]">Comparte también fotografías</span> con una liga a flicker, instagram o blog</label>
							<input name="fotografias_redes_ensayo" id="fotografias_redes_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]">
							<label for=""><span class="[ color-primary ]">Lista de asistentes.</span> Comparte la lista de asistentes firmada de los participantes de la sesión/evento con una liga a google drive, dropbox o onedrive</label>
							<input name="lista_asistentes_ensayo" id="lista_asistentes_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
							<label for=""><span class="[ color-primary ]">Compartir documento.</span> Copia a continuación la liga a google drive, dropbox o onedrive. Este deberá estar en formato .docx (Microsoft Word) y no deberá exceder 8 páginas. <a href="<?php echo site_url('/guia-para-compartir-el-texto/'); ?>" target="_blank" class="[ color-gray--light ][ fz--small ]">Aqui puedes descargar una guía para compartir el texto.</a></label>
							<input name="compartir_documento_ensayo" id="compartir_documento_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
							<label for=""><span class="[ color-primary ]">Correo Electrónico.</span> Señala a continuación un correo electrónico para contactar al grupo que preparó este documento.</label>
							<input name="correo_electronico_ensayo" id="correo_electronico_ensayo" type="email" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="">
							<label for=""><span class="[ color-primary ]">Página Web</span></label>
							<input name="pagina_web_ensayo" id="pagina_web_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Si es el caso">
							<label for=""><span class="[ color-primary ]">Quieres recibir más información</span></label>
							<label for="" class="[ inline-block ]">Sí</label>
							<input type="radio" name="recibir_mas_informacion" id="optionsRadios1" value="si" checked>
							<label for="" class="[ margin-left ][ inline-block ]">No</label>
							<input type="radio" name="recibir_mas_informacion" id="optionsRadios2" value="no">
							<input name="accion" id="accion" type="hidden" value="guarda-ensayo">
						</div>
					</div>
					<div class="[ text-center ]" id="voces_ciudadanas">
						<button type="submit" class="[ btn btn-primary btn--large ]"><strong>enviar</strong></button>
					</div>
				</form>
			</div>
		</section>
	</article>
	<section class="[ bg-gray-light space-id ]" id="voces_ciudadanas">
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

<?php get_footer(); ?>