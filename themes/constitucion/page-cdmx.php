<?php get_header(); the_post();
the_title();
$img_cdmx = get_option( 'img_cdmx' ); ?>

<section class="[ bg-image rectangle-small ][ margin--header margin-bottom--large ][ relative ]" style="background-image: url('<?php echo $img_cdmx; ?>');">
	<div class="[ bg-dark--opacity width-100 height-100 ]">
		<h1 class=" [ text-uppercase text-center ][ width-100 ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]">Ciudad de México</h1>
	</div>
</section>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
	<div class="[ margin-bottom--large ]">
		<?php the_content(); ?>
	</div>
	<div class="[ margin-bottom--large ]">
 		<div class="[ row ]">
			<div class="[ col-xs-12 ]">

				<div class="[ content-cronica-cdmx ]">
					<blockquote>

						<p>Sed dignissimligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu<canvas class="[ inline-block ]" id="pie-data" width="100px" height="100px"></canvas></p>

					</blockquote>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi explicabo doloremque, temporibus? 	Similique nam molestias enim eius quibusdam neque incidunt quam cum, hic sint dolorem accusamus itatis commodi! Optio, cupiditate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae  amet aperiam pariatur ea iste officia facilis, eligendi rem modi reiciendis delectus impedit quibusdam consectetur possimus eaque nihil facere reprehenderit nisi.
						Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus <br>Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
						</p>
				</div>
			</div>
		</div>
	</div>
	<?php echo wpautop( do_shortcode(get_post_meta($post->ID, 'contenido_extra', true) ) ); ?>
</section>

<!-- slider -->
<div>
	<div class="flexslider relative">
	<ul class="slides">
		<li>
			<img src="<?php echo THEMEPATH; ?>images/cd4.png">
		</li>
		<li>
			<img src="<?php echo THEMEPATH; ?>images/cd1.png">
		</li>
		<li>
			<img src="<?php echo THEMEPATH; ?>images/cd2.png">
		</li>
		<li>
			<img src="<?php echo THEMEPATH; ?>images/cd3.png">
		</li>
	</ul>
	</div>
</div><!-- fin slider -->

<section>
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ]">

				<div class="[ content-cronica-cdmx ]">
					<h4></h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi explicabo doloremque, temporibus? 	Similique nam molestias enim eius quibusdam neque incidunt quam cum, hic sint dolorem accusamus itatis commodi! Optio, cupiditate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae  amet aperiam pariatur ea iste officia facilis, eligendi rem modi reiciendis delectus impedit quibusdam consectetur possimus eaque nihil facere reprehenderit nisi.
					Praesent quis enim mollis, molestie nisl non, dapibus tellus.
					Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
					Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus <br>Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
					</p>
					<blockquote>
						<canvas class="[ inline-block ]" id="bar-data" width="250px" height="250px"></canvas>
						<p>Sed dignissimligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu</p>
					</blockquote>
				</div>

			</div> <!-- /col -->
		</div> <!-- /row -->
	</div> <!-- /container -->
</section>

<section class="[ margin-top-bottom--xxlarge ]">
	<img class="[ width-100 ]" src="<?php echo THEMEPATH; ?>images/logo-horizontal.gif" alt="">
</section>

<?php get_footer(); ?>