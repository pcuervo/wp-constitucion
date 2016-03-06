<?php get_header();
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$img_participa = get_option( 'img_noticias' );
global $wp_query; ?>
<br>

<div class="[ bg-image rectangle-small ][ margin--header margin-bottom--large ][ relative ]" style="background-image: url('<?php echo $img_participa; ?>');">
	<div class="[ bg-dark--opacity width-100 height-100 ]">
		<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]">Noticias</h1>
	</div>
</div>

<section class="[ container ]">
	<?php $noticias = new WP_Query(array(
			'post_type'      => 'post',
			'posts_per_page' => 10,
			'paged' => $pagina

		));
	if ( $noticias->have_posts() ) :

		while ( $noticias->have_posts() ) : $noticias->the_post();
			$date_arr = getDateTransform( $post->post_date );
			$url_image = attachment_image_url( $post->ID, 'medium' );?>
			<div class="[ row ][ margin-bottom--large ]">
				<a href="<?php the_permalink(); ?>">
					<div class="[ col-xs-5 no-padding--right ]">
						<img class="[ img-responsive ]" src="<?php echo $url_image; ?>">
					</div>
				</a>
				<div class="[ col-xs-7 ]">
					<h2 class="[ fw-semibold ]">
						<a class="[ color-gray ]" href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<p class="[ color-primary ]"><?php echo $date_arr[4].' '.$date_arr[1].' '.$date_arr[2] ?></p>
					<p><?php echo wp_trim_words( get_the_excerpt(), 23 ) ?></p>
					<a href="<?php the_permalink(); ?>">
						<p class="[ fz-small ][ color-primary ]">Leer más >></p>
					</a>
				</div>
			</div>
		<?php endwhile;
	endif;
	wp_reset_postdata(); ?>
	<section class="[ text-center ]">
		<?php if($noticias->max_num_pages > 1):
			$url = site_url('/noticias/');
			pagenavi($pagina, $noticias->max_num_pages, $url, true, '?', 'pagina');
		endif; ?>
	</div>

</section>
<?php get_footer(); ?>