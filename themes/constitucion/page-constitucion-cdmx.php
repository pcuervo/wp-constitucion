<?php get_header(); the_post();
the_title(); 
$url_image_constirucion = attachment_image_url( $post->ID, 'full' ); ?>

<section class="[ bg-image rectangle-small ][ margin--header margin-bottom--large ][ relative ]" style="background-image: url('<?php echo $url_image_constirucion; ?>');">
	<div class="[ bg-dark--opacity width-100 height-100 ]">
		<h2 class=" [ text-uppercase ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]"><strong>Información</strong></h2>
	</div>
</section>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
	<div class="[ margin-bottom--large ]">
		<?php the_content(); ?>
	</div>
	<img class="[ img-responsive ][ margin-auto ]" src="<?php echo $url_image_constirucion; ?>">
</section>
<article class="[ bg-gray-light ][ margin-top-bottom--large padding--top-bottom--xlarge ]">
	<section class="[ container padding--sides--xsm ]">
		<?php $proceso = get_page_by_path('proceso-participativo'); ?>
		<h2 class="[ no-margin-top ]"><?php echo $proceso->post_title; ?></h2>
		<?php echo $proceso->post_content; ?>
		
		<div>
			<p class="[ inline-block middle ][ text-uppercase ]">Descarga los documentos oficiales aquí</p>
			<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/file-pdf.svg">
		</div>
	</section>
</article>

<?php $experiencias = get_page_by_path('experiencias-y-buenas-practicas-globales'); 
$url_image_experiencias = attachment_image_url( $experiencias->ID, 'full' );?>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
	<h2><?php echo $experiencias->post_title; ?></h2>
	<?php echo $experiencias->post_content; ?>
</section>
<section class="[ bg-image rectangle ][ margin-bottom ][ relative ]" style="background-image: url('<?php echo $url_image_experiencias; ?>');"></section>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
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
				<p class="[ text-uppercase ]"><strong><?php the_title(); ?></strong></p>
				<?php the_content(); ?>
			</div>

			<?php $count++; 
		endwhile; 

	endif; 
	wp_reset_postdata(); ?>

</section>
<?php get_footer(); ?>
