<?php
get_header();
the_post();
$url_image_constirucion = attachment_image_url( $post->ID, 'full' );
$img_constitucion_cdmx = get_option( 'img_constitucion_cdmx' ); ?>

<div class="[ bg-image rectangle-small gtm-btn-banner ][ relative ][ margin--header ]" style="background-image: url('<?php echo $img_constitucion_cdmx; ?>');">
	<div class="[ width-100 height-100 ]">
		<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ][ hidden ]">Acerca de la Constitución</h1>
	</div>
</div>

<?php $mensaje = get_page_by_path('mensaje-del-jefe-de-gobierno');
$image_mensaje = attachment_image_url( $mensaje->ID, 'full' ); ?>
<section class="[ container ][ space-id ]" id="jefe-gobierno">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 ]">
			<div class="[ content-mensaje-jefegob ]">
				<h2><?php echo $mensaje->post_title; ?></h2>
				<?php echo wpautop( $mensaje->post_content ); ?>
			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<?php if ( has_post_thumbnail($mensaje->ID) ): ?>
		<img src="<?php echo $image_mensaje; ?>" alt="fotografía plaza de la revolución">
	<?php else: ?>
		<p class="text-warning">Falta la Imagen de Sobre la constitución</p>
	<?php endif; ?>
</div>

<?php $sobre = get_page_by_path('sobre-la-constitucion');
$image_sobre = attachment_image_url( $sobre->ID, 'full' ); ?>
<section class="[ container ][ space-id ]" id="sobre-constitucion">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 ]">
			<div class="[ content-acerca-de ]">
				<h2><?php echo $sobre->post_title; ?></h2>
				<?php echo wpautop( $sobre->post_content ); ?>
				
			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<?php if ( has_post_thumbnail($sobre->ID) ): ?>
		<img src="<?php echo $image_sobre; ?>" alt="fotografía tlaxcoaque patineto">
	<?php else: ?>
		<p class="text-warning">Falta la Imagen de Sobre la constitución</p>
	<?php endif; ?>
	
</div>

<section class="[ container ][ space-id ]" id="grupo-trabajo">
	<article class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 ]">

			<div class="[ content-acerca-de ]">
				<?php $grupo = get_page_by_path('grupo-de-trabajo'); ?>
				<h2><?php echo $grupo->post_title; ?></h2>
				<?php echo wpautop( $grupo->post_content ); ?>
			</div>
		</div>
	</article>

	<article class="[ space-id ]">
		<div class="[ row ]">
			<?php
			$query_count = 1;
			$grupoTrabajo = new WP_Query(array(
				'post_type'      => 'grupo-de-trabajo',
				'posts_per_page' => -1,
				'orderby'  => 'post_title',
				'order'    => 'ASC'
			));

			if ( $grupoTrabajo->have_posts() ) :
				while ( $grupoTrabajo->have_posts() ) : $grupoTrabajo->the_post();
					$url_img = attachment_image_url($post->ID, 'thumbnail');?>
					<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ][ margin-bottom ]">
						<a class="gtm-btn-grupo-<?php echo $post->post_name; ?>" data-toggle="modal" data-target="#trabajador">
							<div class="[ content-trabajo__img ]">
								<img src="<?php echo $url_img; ?>">
							</div>
							<h3 class="nombre"><?php the_title(); ?></h3>
							<div class="biografia hidden"><?php the_content(); ?></div>
							<div class="cargo hidden"><?php echo get_post_meta( $post->ID, 'cargo_integrante', true ); ?></div>
						</a>
					</div>

					<?php
						if($query_count % 2 == 0) {echo '<div class="[ clear--xs ]"></div>';}
						if($query_count % 3 == 0) {echo '<div class="[ clear--xsm ]"></div>';}
						if($query_count % 4 == 0) {echo '<div class="[ clear--sm ]"></div>';}
						if($query_count % 6 == 0) {echo '<div class="[ clear--md ]"></div>';}
						?>
				<?php $query_count++; endwhile;
			endif;
			wp_reset_postdata();?>

		</div>

		<!-- Modal grupo de trabajo -->
		<div id="trabajador" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<a type="button" class="close modal-group-close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
					<div class="modal-body">
						<img src="#" class="[ imagen-modal ][ img-responsive ][ margin-bottom--small ]">
						<h3 class="nombre-modal"></h3>
						<p class="cargo-modal"></p>
						<div class="biografia-modal"></div>
					</div><!-- modal-body -->
				</div>
			</div>
		</div>
	</article>
</section>

<?php $plataforma = get_page_by_path('sobre-la-plataforma'); 
$image_plataforma = attachment_image_url( $plataforma->ID, 'full' ); ?>
<section class="[ bg-gray--fondo section--bg ][ no-margin--bottom ][ space-id ]" id="sobre-plataforma">
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 ]">

				<div class="[ content-sobre-la-plataforma ]">
					
					<h2><?php echo $plataforma->post_title; ?></h2>
					<?php echo wpautop( $plataforma->post_content ); ?>
				</div>

			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<?php if ( has_post_thumbnail($plataforma->ID) ): ?>
		<img src="<?php echo $image_plataforma; ?>" alt="fotografía lago de chapultepec">
	<?php else: ?>
		<p class="text-warning">Falta la Imagen de Sobre la plataforma</p>
	<?php endif; ?>
</div>

<?php $wiki = get_page_by_path('constitucion-en-wiki');
$image_wiki = attachment_image_url( $wiki->ID, 'full' ); ?>
<section class="[ container ][ space-id ]" id="constitucion-wiki">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 ][ text-justify ]">
			<h2><?php echo $wiki->post_title; ?></h2>
			<?php echo wpautop( $wiki->post_content ); ?>
		</div>
	</div>
	<div class="[ text-center ][ margin-top--large ]">
		<a class="[ btn btn-primary btn-large ]" disabled>Próximamente</a>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<?php if ( has_post_thumbnail($wiki->ID) ): ?>
		<img src="<?php echo $image_wiki; ?>" alt="fotografía nopales con hombre">
	<?php else: ?>
		<p class="text-warning">Falta la Imagen de Constitución en wiki</p>
	<?php endif; ?>
	
</div>

<section class="[ space-id ]" id="preguntas-frecuentes">
	<div class="[ container ]">
		<h2 class="[ margin-bottom ]">Preguntas frecuentes</h2>
		<?php $preguntas = new WP_Query(array(
				'post_type'      => 'preguntas-frecuentes',
				'posts_per_page' => -1,
			));

		if ( $preguntas->have_posts() ) :
			$count = 0;
			while ( $preguntas->have_posts() ) : $preguntas->the_post();
				if($count%2 == 0):
				    echo $count > 0 ? '</div>' : '';
				    echo '<div class="[ row ]">';
				endif; ?>

				<div class="[ col-xs-12 col-sm-6 ][ margin-bottom ]">
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</div>

				<?php $count++;
			endwhile;

		endif;
		wp_reset_postdata(); ?>
	</div>
</section>

<?php $biblioteca = get_page_by_path('biblioteca');
$image_biblioteca = attachment_image_url( $biblioteca->ID, 'full' ); ?>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<?php if ( has_post_thumbnail($biblioteca->ID) ): ?>
		<img src="<?php echo $image_biblioteca; ?>" alt="fotografía lago de chapultepec">
	<?php else: ?>
		<p class="text-warning">Falta la Imagen de Biblioteca</p>
	<?php endif; ?>
</div>


<section class="[ container ][ space-id ][ content-biblioteca ]" id="biblioteca">
	<h2 class="[ margin-bottom--large no-margin-top ]" id="biblioteca"><?php echo $biblioteca->post_title; ?></h2>
	<p class="[ margin-bottom--large ]">La búsqueda de una Reforma Política para la Ciudad de México es un proceso que ha tomado mucho tiempo en su conceptualización y cuya ejecución no es expedita. En esta biblioteca podrás descargar documentos relacionados a la historia de la configuración política del Distrito Federal y nuestra ciudad.</p>
	<a href="http://www.juridicas.unam.mx/publica/librev/rev/rap/cont/61/pr/pr21.pdf" target="_blank"><p class="[ margin-top gtm-btn-liga ]">La Ley Orgánica del Distrito y Territorios Federales de 1928</p></a>
	<a href="http://www.juridicas.unam.mx/publica/librev/rev/rap/cont/61/pr/pr23.pdf" target="_blank"><p class="[ margin-top gtm-btn-liga ]">La Ley Orgánica del Departamento del Distrito Federal de 1970</p></a>
	<a href="http://info4.juridicas.unam.mx/adprojus/leg/10/350/" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">Estatuto de Gobierno del Distrito Federal de 1994.</p></a>
	<a href="http://sil.gobernacion.gob.mx/Archivos/Documentos/2002/09/asun_57128_20020905_844595.pdf" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">Iniciativa de Reforma Política de Andrés Manuel López Obrador, 2001</p></a>
	<a href="http://sil.gobernacion.gob.mx/Archivos/Documentos/2010/04/asun_2663420_20100429_1272578740.pdf" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">Iniciativa de Reforma Política de Marcelo Ebrard Casaubón, 2010</p></a>
	<a href="http://www.reformapolitica.cdmx.gob.mx/index.php/hacia-la-reforma-politica/140-el-proceso-de-la-reforma-politica/893-iniciativa-de-reforma-politica-de-la-ciudad-de-mexico-presentada-por-el-dr-miguel-angel-mancera-espinosa-jefe-de-gobierno-del-distrito-federal-13-de-agosto-2013" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">Iniciativa de Reforma Política de Miguel Ángel Mancera, 2013</p></a>
	<a href="http://www.dof.gob.mx/nota_detalle.php?codigo=5424043&fecha=29/01/2016" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">Decreto de Reforma Política de la Ciudad de México 2016</p></a>
	<a href="http://biblio.juridicas.unam.mx/libros/2/649/19.pdf" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">El Distrito Federal Mexicano Gobierno y Democracia</p></a>
	<a href="http://www.juridicas.unam.mx/publica/librev/rev/mexder/cont/9/cnt/cnt1.pdf" target="_blank" class="gtm-btn-liga"><p class="[ margin-top ]">El Distrito Federal Una Nueva Estructura Constitucional</p></a>
</section>

<?php get_footer(); ?>
