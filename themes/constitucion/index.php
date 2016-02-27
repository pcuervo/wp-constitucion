<?php get_header();
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1; 
global $wp_query;
global $no_post;?>
	<section class="padding--header">
		<?php if ( ! empty( $wp_query->posts ) ) :
			foreach ($wp_query->posts as $destacado):
				$no_post = $destacado->ID;
				$date_arr = getDateTransform( $destacado->post_date );
				$url_image_destacada = attachment_image_url( $destacado->ID, 'full' ); ?>
				<div class="[ bg-image rectangle ][  margin-bottom--large ][ relative ]" style="background-image: url('<?php echo $url_image_destacada; ?>');">
					<a href="<?php the_permalink(); ?>">
						<div class="[ bg--light rectangle--light ]">
							<div class="[ center-full width-90 ][ color-gray ] ">
								<h2 class=" [ text-uppercase ][ no-margin ][ color-primary ][ fw-semibold ][ fz-small--xs ]"><?php echo $destacado->post_title; ?></h2>
								<p class="[ color-gray ]"><?php echo $date_arr[4].' '.$date_arr[1].' '.$date_arr[2] ?></p>
								<?php echo wp_trim_words( $destacado->post_content, 16 ) ?>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach;
		endif; ?>
	</section>
	<section class="[ container ]">
		<?php $noticias = new WP_Query(array(
				'post_type'      => 'post',
				'posts_per_page' => 10,
				'post__not_in' => array( $no_post ),
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
						<a href="<?php the_permalink(); ?>">
							<h2 class="[ no-margin-top ][ color-primary ][ fw-semibold ]"><?php the_title(); ?></h2>
						</a>
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