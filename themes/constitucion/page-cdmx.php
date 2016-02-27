<?php get_header(); the_post();
the_title(); ?>

<section class="[ bg-image rectangle-small ][ margin--header margin-bottom--large ][ relative ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/edificios.png');">
	<div class="[ bg-dark--opacity width-100 height-100 ]">
		<h2 class=" [ text-uppercase text-center ][ width-100 ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]">Ciudad de México</h2>
	</div>
</section>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
	<div class="[ margin-bottom--large ]">
		<?php the_content(); ?>
	</div>
	<!-- <img class="[ img-responsive ][ margin-auto margin-bottom--large ]" src="<?php echo $url_image; ?>"> -->
<!-- 	<div class="[ bg-image rectangle ][ margin-bottom ][ relative ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/edificios.png');"></div>
 -->
	<div class="[ margin-bottom--large ]">
 		<div class="[ row ]">
			<div class="[ col-xs-4 col-sm-3 ][ margin-bottom text-center ]">
				<canvas class="[ inline-block ]" id="pie-data" width="100px" height="100px"></canvas>
			</div>
			<div class="[ col-xs-8 col-sm-3 ][ margin-bottom text-center ]">
				<canvas class="[ inline-block ]" id="bar-data" width="150px" height="150px"></canvas>
			</div>
			<div class="[ col-xs-12 col-sm-6 ]">
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi explicabo doloremque, temporibus? Similique nam molestias enim eius quibusdam neque incidunt quam cum, hic sint dolorem accusamus veritatis commodi! Optio, cupiditate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae amet aperiam pariatur ea iste officia facilis, eligendi rem modi reiciendis delectus impedit quibusdam consectetur possimus eaque nihil facere reprehenderit nisi.</p>
			</div>
		</div>
		<p class="[ visible-xs ]">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	</div>
	<?php echo wpautop( do_shortcode(get_post_meta($post->ID, 'contenido_extra', true) ) ); ?>

</section>

<?php get_footer(); ?>