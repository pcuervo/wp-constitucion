<?php get_header(); the_post();
$date_arr = getDateTransform( $post->post_date ); ?>

<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 ]">
			<section class="[ content-user ]">
				<?php if ( has_post_thumbnail() ):
					the_post_thumbnail('large');
				else:
					echo '<img src="http://placehold.it/912x420" />';
				endif;?>
				<p><?php echo $date_arr[4].' '.$date_arr[1].' '.$date_arr[2] ?></p>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<a class="[ btn btn-primary btn-large ]" href="<?php echo site_url('/noticias/'); ?>"><strong>Regresar</strong></a>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>