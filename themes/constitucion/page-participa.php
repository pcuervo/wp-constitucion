<?php
get_header(); the_post();
	$img_participa = get_option( 'img_participa' );

	global $result;
	if( isset( $result['success'] ) ): ?>
		<div class="[ bg-success btn-lg text-center ]"><?php echo $result['success']; ?></div>
	<?php endif;  ?>

	<div class="[ bg-image rectangle-small ][ margin--header ][ relative ]" style="background-image: url('<?php echo $img_participa; ?>');">
		<div class="[ width-100 height-100 ]">
			<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ][ hidden ]">Participa</h1>
		</div>
	</div>


	<section class="[ container ][ padding--header--id ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ][ text-justify ]">
				<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum voluptas molestias officia blanditiis quidem tempore ut, ea, sint voluptatem hic ipsa odio, pariatur cum at! Voluptates, obcaecati maiores error velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eum, cupiditate voluptatum dicta libero iure! Accusamus accusantium ea neque eius officiis, dolor et, iusto numquam. Officia voluptas impedit, delectus vel.</p>
			</div>
		</div>
	</section>

	<section class="[ bg-gray-light section--bg ][ padding--header--id ]" id="instrucciones">
		<div class="[ container ]">
			<div class="[ padding--sides--xsm ][ text-justify ]">
				<?php the_content(); ?>
			</div>
			<div class="[ row ][ margin-top ][ padding--sides--xsm ]">
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
		</div>
	</section>

	<section class="[ container ][ padding--sides--xsm--large ][ space-id ]" id="imagina_ciudad">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
			<h2 class="[ no-margin-top margin-bottom ]">Imagina tu ciudad</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maiores, mollitia at qui aperiam illo cumque inventore eveniet facere quos, recusandae assumenda, delectus autem corporis cupiditate necessitatibus odio enim deserunt?</p>
			<div class="[ text-center ][ margin-top ]">
				<a class="[ btn btn-primary btn-large ]" href="<?php echo site_url('/sondeo-masivo/'); ?> ">
					Participa
				</a>
			</div>
		</div>
	</section>

	<div class="[ clear ]"></div>

	<section class="[ container ][ padding--sides--xsm--large ][ space-id ]" id="resultados">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
			<h2>¿Ya participaste?</h2>
			<p class="">Ingresa tu número de folio para obtener tu certificado</p>
			<form class="[ form-inline ][ js-check-reference-code ][ margin-top ]" data-parsley-certificado>
				<div class="[ input-group ]" >
					<input type="text" name="ref_code" class="[ form-control input--search ][ height-70 ][ fz-xxlarge ]" placeholder="CM5697CX08" required="" data-parsley-required-message="El número de folio es obligatorio">
					<span class="[ input-group-btn ]">
						<button class="[ btn btn-secondary ][ height-70 ]" type="submit">
							<img class="[ svg icon icon--iconed--small icon--thickness-2 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/search.svg">
						</button>
					</span>
				</div>
			</form>
		</div>
	</section>

	<div class="[ descanso-visual ][ margin-bottom--large ]" id="sobre_constitucion">
		<img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="">
	</div>

	<section class="[ space-id ]"  id="peticiones">
		<section class="[ container ]">
			<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ] [ text-justify ]">
				<h2 class="">Peticiones</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit in suscipit similique tempore ab quam voluptatibus, quos modi fuga iusto earum incidunt repellendus quis tempora? Perspiciatis officia accusantium temporibus esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus dolorum quam illo veniam id placeat nulla repellat vero debitis ratione consectetur eos praesentium, delectus doloremque dolor, ipsa deserunt eaque.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consequuntur error illum. Atque esse, et iure rerum fugiat consequuntur repellendus est dignissimos alias officia fugit culpa nam consequatur exercitationem quae!</p>
			</div>
			<div class="[ clear ]"></div>
			<div class="[ text-center ][ margin-top ]">
				<a href="https://www.change.org/movements/voces-ciudadanas-en-la-nueva-constituci%C3%B3n-de-la-cdmx" target="_blank" class="[ btn btn-primary btn-large ][ inline-block ]">Realizar petición</a>
			</div>
		</section>
	</section>

	<div class="[ bg-gray--fondo section--bg no-margin ]">
		<div class="[ container ]">
			<section class="[ row ][ section--bg ][ space-id ]" id="dialogos_publicos">
				<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ][ text-justify ]">
					<h2 class="[ no-margin-top ]">Encuentros ciudadanos</h2>
					<p>En esta sección podrás registrar acontecimientos que sean espacios de diálogo relacionados a la construcción de la Constitución de la Ciudad de México. Estos pueden ser sesiones de trabajo colaborativas, foros, asambleas, talleres o conferencias.</p>
				</div>
			</section>

			<!-- scroll horizontal -->
			<section class="[ row ]">
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
										<div class="[ vertical-line--large ]"></div>
										<div class="[ border-gray--large ]"></div>
										<p class="[ color-gray ][ fz-small ][ margin-bottom--date ][ text-uppercase ]"></p>

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
			</section> <!-- row -->

			<section class="[ space-id ]" id="registra_tu_evento">
				<div class="[ box-shadow--form ]">
					<h2 class="[ margin-bottom--large ]">Registra tu evento</h2>
					<form id="form-eventos" class="[ margin-bottom--large ]" action="" method="POST" data-parsley-validate="">
						<div class="[ row ]">
							<div class="[ col-xs-12 col-sm-6 ]">
								<label for="">Nombre del acontecimiento</label>
								<input type="text" name="nombre_evento" id="nombre_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="(máximo 100 caracteres)" required="" maxlength="100" data-parsley-error-message="El nombre obligatorio">
								<label for="">Comparte una frase que describa el evento/sesión de trabajo/diálogo público</label>
								<input type="text" name="frace_evento" id="frace_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]"placeholder=" (120 caracteres) " required="" maxlength="120" data-parsley-error-message="La frase es obligatoria">
								<label for="">Describe los objetivos, alcances y perfil de asistentes de tu acontecimiento </label>
								<textarea type="text" name="descripcion_evento" id="descripcion_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder=" (120 palabras) " required="" data-parsley-maxwords="120" data-parsley-required-message="La descripción es obligatoria" data-parsley-maxwords-message="La descripción no puede exceder 120 palabras"></textarea>
								<label for="">Copia a continuación la liga del sitio oficial del acontecimiento, la cuenta de Facebook o de Twitter </label>
								<input type="text" name="liga_oficial_evento" id="liga_oficial_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Liga oficial">
								<label for="">Fechas (Puede ser un sólo día) </label>
								<input class="[ input-primary border-gray ][ margin-bottom--large ] date-ensayo" name="fecha_evento" id="fecha_evento" placeholder="yyyy-mm-dd" required="" type="text" data-parsley-required-message="La fecha es obligatoria">
								<label for="">Señala abajo dónde se llevara a cabo el evento</label>
								<input type="text" name="ubicacion_evento" id="ubicacion_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Ubicación" data-parsley-required-message="La ubicación es obligatoria">
							</div>
							<div class="[ col-xs-12 col-sm-6 ]">
								<label for="">¿En qué momentos se llevará a cabo el evento? </label>
								<input type="text" name="horarios_evento" id="horarios_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Horario" data-parsley-required-message="El horario es obligatorio">
								<label for="">Si este acontecimiento es organizado por una institución u organización, señala abajo cuál. En caso de más de una, separar por comas. Si son un grupo de personas, nombren su equipo de trabajo. </label>
								<input type="text" name="institucion_evento" id="institucion_evento" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Institución u organización." data-parsley-required-message="La institución u organización es obligatoria">
								<label for="">Asistentes</label>
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
								<label for="">Fotografía de cartel o publicidad del acontecimiento. Coloca el archivo de la fotografía en Google Drive, Dropbox o OneDrive y a continuación copia la liga.</label>
								<input name="fotografia_evento" id="fotografia_evento"  class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" type="text" >
								<label for="">Señala a continuación un correo electrónico</label>
								<input name="correo_evento" id="correo_evento" type="email" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" required="" placeholder="Correo Electrónico" data-parsley-required-message="El correo es obligatorio" data-parsley-type-message="Por favor escribe un correo válido">
							</div>
						</div>
						<div class="[ text-center ]">
							<input name="accion" id="accion" type="hidden" value="guarda-evento">
							<button type="submit" class="[ btn btn-primary btn--large ]">enviar</button>
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>

	<div class="[ descanso-visual ]" id="sobre_constitucion">
		<img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="">
	</div>

	<section class="[ bg-gray--fondo section--bg ][ space-id ][ no-margin--bottom ]">
		<div class="[ container ]" id="ensayos">
			<article class="[ row ][ margin-bottom ]">
				<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ][ text-justify ]">
					<h2 class="">Ensayo</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ducimus soluta. Tempora recusandae cum cumque odit consequatur, laborum nulla atque accusamus doloribus rem placeat, optio libero delectus voluptatem repellendus facilis.</p>
				</div>
			</article>
			<article class="[ box-shadow--form ]">
				<h2 class="[ margin-bottom ]">Comparte tu ensayo o relatoria</h2>
				<form id="form-ensayos" class="[ margin-bottom--large ]" action="" method="POST" data-parsley-validate="" >
					<div class="[ row ]">
						<div class="[ form-group ][ col-xs-12 col-sm-6 ]">
							<label for="">Título del ensayo o de la relatoría</label>
							<input type="text" name="titulo_ensayo" id="titulo_ensayo" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Máximo 100 caracteres" required="" maxlength="100" data-parsley-error-message="El título es obligatorio">
							<label for="">Nombre del evento o sesión colaborativa de la cual se derivó el documento</label>
							<input name="nombre_ensayo" id="nombre_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 100 caracteres"  required="" maxlength="100" data-parsley-error-message="El nombre es obligatorio">
							<label for="">Comparte una frase que describa el evento/sesión de trabajo</label>
							<input name="frase_ensayo" id="frase_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 120 caracteres"  required="" maxlength="120" data-parsley-error-message="La frase es obligatoria">
							<label for="">Fechas en las que sesionó el grupo de trabajo</label><br>
							<label for="">Inicio</label>
							<input type="text" name="fechaInicio" class="[ input-primary ][ margin-bottom--large ][ width-50 ] date-ensayo" placeholder="yyyy-mm-dd" required="" data-parsley-error-message="La fecha es obligatoria"><br>
							<label for="">Final</label>
							<input type="text" name="fechaFinal" class="[ input-primary ][ margin-bottom--large ][ width-50 ] date-ensayo-fin" placeholder="yyyy-mm-dd" disabled>
							<label for="">Describe a continuación las reflexiones o propuestas centrales de la sesión de trabajo y el contexto en el que esta se llevó a cabo.</label>
							<textarea name="resumen_ensayo" id="resumen_ensayo" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 250 palabras" required="" data-parsley-maxwords="250" data-parsley-required-message="El resumen es obligatorio" data-parsley-maxwords-message="El resumen no puede exceder 250 palabras"></textarea>
							<label for="">Señala a continuación 3 palabras clave vinculadas a este documento</label>
							<input name="palabra_a" id="palabra_a" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Palabra 1" required="" data-parsley-error-message="Palabra obligatoria">
							<input name="palabra_b" id="palabra_b" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Palabra 2" required="" data-parsley-error-message="Palabra obligatoria">
							<input name="palabra_c" id="palabra_c" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Palabra 3" required="" data-parsley-error-message="Palabra obligatoria">
							<label for="">Comparte en una frase un mensaje central de la relatoría o ensayo</label>
							<input name="mensaje_central" id="mensaje_central" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Máximo 120 caracteres" required="" maxlength="120" data-parsley-error-message="La frase es obligatoria">
							<label for="">Lista a continuación el nombre de todos los autores separados por comas</label>
							<input name="autores_ensayo" id="autores_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="" data-parsley-error-message="Los autores son obligatorios">
						</div>
						<div class="[ form-group ][ col-xs-12 col-sm-6 ]">
							<label for="">En caso de que este ensayo o relatoría haya sido elaborado por una institución u organización señala abajo cual es. En caso de más de una, separar por comas.</label>
							<input name="institucion-u-organizacion" id="institucion-u-organizacion" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="" data-parsley-error-message="La institución u organización es obligatoria">
							<label for="">Comparte fotografías del grupo que trabajó este documento.</label>
							<input name="fotografias_ensayo" id="fotografias_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="" data-parsley-error-message="Las fotografías son obligatoria">
							<label for="">Comparte también fotografías con una liga a flicker, instagram o blog</label>
							<input name="fotografias_redes_ensayo" id="fotografias_redes_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]">
							<label for="">Comparte la lista de asistentes firmada de los participantes de la sesión/evento con una liga a Google Drive, Dropbox o OneDrive</label>
							<input name="lista_asistentes_ensayo" id="lista_asistentes_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="" data-parsley-error-message="La lista de asistentes es obligatoria">
							<label for="">Copia a continuación la liga a Google Drive, Dropbox o OneDrive. Este deberá estar en formato .docx (Microsoft Word) y no deberá exceder 8 páginas. <a href="<?php echo site_url('/guia-para-compartir-el-texto/'); ?>" target="_blank" class="[ color-gray--light ][ fz--small ]">Aqui puedes descargar una guía para compartir el texto.</a></label>
							<input name="compartir_documento_ensayo" id="compartir_documento_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="" data-parsley-error-message="El documento obligatorio">
							<label for="">Señala a continuación un correo electrónico para contactar al grupo que preparó este documento.</label>
							<input name="correo_electronico_ensayo" id="correo_electronico_ensayo" type="email" class="[ form-control ][ input-primary ][ margin-bottom--large ]" required="" data-parsley-required-message="El correo es obligatorio" data-parsley-type-message="Por favor escribe un correo válido">
							<label for="">Página Web</label>
							<input name="pagina_web_ensayo" id="pagina_web_ensayo" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Si es el caso">
							<label for="">¿Quieres recibir más información?</label>
							<label for="" class="[ inline-block ]">Sí</label>
							<input type="radio" name="recibir_mas_informacion" id="optionsRadios1" value="si" checked>
							<label for="" class="[ margin-left ][ inline-block ]">No</label>
							<input type="radio" name="recibir_mas_informacion" id="optionsRadios2" value="no">
							<input name="accion" id="accion" type="hidden" value="guarda-ensayo">
						</div>
					</div>
					<div class="[ text-center ]" id="voces_ciudadanas">
						<button type="submit" class="[ btn btn-primary btn--large ]">enviar</button>
					</div>
				</form>
			</article>
		</div> <!-- /container -->
	</section>

	<div id="modal-agradecimiento" class="modal fade" role="dialog">
		<div class="modal-dialog [ margin-top--xlarge ][ padding--sides--xsm ]">
			<!-- Modal content-->
			<div class="[ row ]">
				<div class="[ col-xs-12  col-sm-10 col-sm-offset-1 ]">
					<div class="modal-content [ no-border-radius ]">
						<div class="modal-body [ padding--bottom--xxlarge padding--sides padding--sides--large--sm ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif">
							<h2 class="[ text-center text-uppercase ]">¡Gracias por participar!</h2>
							<p class="[ text-center ][ js-codigo-referencia ]">Tu número de folio es: <span></span></p>
							<p class="[ text-center text-uppercase ]">Escribe tu nombre y apellido para obtener tu certificado de participación</p>
							<form class="[ row ]" action="<?php echo site_url('pdf-certificado-de-participacion'); ?>" method="POST" data-parsley-certificado target="_blank">
								<div class="[ col-xs-12 col-sm-6  ]">
									<input type="text" name="nombre" class="form-control [ margin-bottom--large ][ input--search ] " placeholder="Nombre(s)" required="">
								</div>
								<div class="[ col-xs-12 col-sm-6 ]">
									<input type="text" name="apellidos" class="form-control [ margin-bottom--large ][ input--search ] " placeholder="Apellidos" required="">
								</div>
								<input type="hidden" name="referencia">
								<button type="submit" class="[ col-xs-12 ][ btn btn-secondary color-gray ][ center-block ]">obtener certificado</button>
								<a href="<?php echo site_url('participa') ?>" class="[ col-xs-12 ][ btn btn-secondary btn-sm color-gray ][ center-block ][ margin-top ]">No, gracias</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>