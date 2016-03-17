<?php get_header(); the_post();
$asistencia_invitacion = get_post_meta( $post->ID, 'asistencia_invitacion', true );
$latitud_evento = get_post_meta( $post->ID, 'latitud_evento', true );
$longitud_evento = get_post_meta( $post->ID, 'longitud_evento', true );
$fecha_evento = get_post_meta( $post->ID, 'fecha_evento', true );
$date_arr = getDateTransform( $fecha_evento ); ?>

<section class="[ bg-gray--fondo section--bg no-margin ]">
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-10 col-md-offset-2 col-sm-8 ][ content-user ][ box-shadow--form ]">
				<?php if ( has_post_thumbnail() ):
					the_post_thumbnail('large', array('class' => '[ img-responsive ]'));
				endif;?>
				<div class="[ margin-bottom ]">
					<h2><?php the_title(); ?></h2>
					<p class="[ color-gray ][ margin-top-bottom--large ]"><?php the_content(); ?></p>
					<p class="[ color-gray--light ][ margin-top ]"><strong class="[ color-primary ]">Frase que describa el evento/sesión:</strong> <?php echo get_post_meta( $post->ID, 'frace_evento', true ); ?></p>
					<p class="[ color-gray--light ]"><strong class="[ color-primary ]">Institución u organización:</strong> <?php echo get_post_meta( $post->ID, 'institucion_evento', true ); ?></p>
					<p class="[ color-gray--light ]"><strong class="[ color-primary ]">Liga del sitio ofician:</strong> <?php echo get_post_meta( $post->ID, 'liga_oficial_evento', true ); ?></p>
					<p class="[ color-gray--light ]"><strong class="[ color-primary ]">Fotografía de cartel o publicidad del acontecimiento:</strong> <?php echo get_post_meta( $post->ID, 'fotografia_evento', true ); ?></p>
					<p class="[ color-gray--light ]"><strong class="[ color-primary ]">Correo electrónico:</strong> <?php echo get_post_meta( $post->ID, 'correo_evento', true ); ?></p>
					<p class="[ color-gray--light ]">
						<strong class="[ color-primary ]">Asistentes:</strong>
						<?php echo $asistencia_invitacion == 'si' ? 'Por invitación' : 'La asistencia es libre'; ?>
					</p>
					<p class="[ color-gray--light ]"><strong class="[ color-primary ]">Dónde se llevara a cabo el evento:</strong> <?php echo get_post_meta( $post->ID, 'ubicacion_evento', true ); ?></p>
					<?php if ($latitud_evento != '' ) {
						echo '<iframe width="100%" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='.$latitud_evento.','.$longitud_evento.'&hl=es;z=14&amp;output=embed"></iframe>';
					} ?>
					<p class="[ color-gray--light ][ text-right ][ margin-top ]"><strong class="[ color-primary ]">Fecha del evento:</strong> <?php echo $date_arr[4].' '.$date_arr[1].' '.$date_arr[2] ?></p>
					<p class="[ color-gray--light ][ text-right ]"><em><strong class="[ color-primary ]">Horario:</strong></em> <?php echo get_post_meta( $post->ID, 'horarios_evento', true ); ?></p>

				</div>
				<?php if (is_singular('post')): ?>
					<a class="[ btn btn-primary btn-large ]" href="<?php echo site_url('/noticias/'); ?>">Regresar</a>
				<?php endif; ?>
			</div>
		</div>		
	</div>
</section>

<?php get_footer(); ?>