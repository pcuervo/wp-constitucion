<?php get_header(); the_post();
$img_cdmx = get_option( 'img_cdmx' ); ?>

<div class="[ bg-image rectangle-small ][ relative ]" style="background-image: url('<?php echo $img_cdmx; ?>');">
	<div class="[ width-100 height-100 ]">
		<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ][ hidden ]">Ciudad de México</h1>
	</div>
</div>

<section class="[ container padding--sides--xsm ][ the_content ]">
	<?php the_content(); ?>
</section>


<section class="[ space-id ][ container padding--sides--xsm ]" id="cronica">
	<div class="[ row ]">
		<div class="[ col-xs-12 ]">
			<div class="[ content-cronica-cdmx ]">
				<h2>Crónica</h2>
				<blockquote>
					<p>Sed dignissimligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu<canvas class="[ inline-block ]" id="pie-data" width="100px" height="100px"></canvas></p>
				</blockquote>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi explicabo doloremque, temporibus? 	Similique nam molestias enim eius quibusdam neque incidunt quam cum, hic sint dolorem accusamus itatis commodi! Optio, cupiditate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae  amet aperiam pariatur ea iste officia facilis, eligendi rem modi reiciendis delectus impedit quibusdam consectetur possimus eaque nihil facere reprehenderit nisi.</p>
				<p>Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.</p>
			</div>
		</div>
	</div>
	<?php echo wpautop( do_shortcode(get_post_meta($post->ID, 'contenido_extra', true) ) ); ?>
</section>

<!-- slider -->
<section>
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
</section><!-- fin slider -->

<section class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 ]">

			<div class="[ content-cronica-cdmx ][ text-justify ]">
				<h4></h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi explicabo doloremque, temporibus? 	Similique nam molestias enim eius quibusdam neque incidunt quam cum, hic sint dolorem accusamus itatis commodi! Optio, cupiditate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae  amet aperiam pariatur ea iste officia facilis, eligendi rem modi reiciendis delectus impedit quibusdam consectetur possimus eaque nihil facere reprehenderit nisi.
				Praesent quis enim mollis, molestie nisl non, dapibus tellus.
				Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
				Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
				</p>
				<blockquote>
					<canvas class="[ inline-block ]" id="bar-data" width="250px" height="250px"></canvas>
					<p>Sed dignissimligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu</p>
				</blockquote>
			</div>

		</div> <!-- /col -->
	</div> <!-- /row -->
</section>

<section class="[ container ]">
	<div class="[ hidden ]">
		<h2 class="[ margin-bottom ]">Expansión urbana</h2>
	</div>
	<img class="[ width-100 ]" src="<?php echo THEMEPATH; ?>images/expansion-urbana.gif" alt="">
</section>

<section class="[ container ][ space-id ]" id="hacia_el_constituyente">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-acerca-de ][ margin-bottom--large ]">
				<h2>Hacia el constituyente</h2>
				<blockquote>
					<p>Sed dignissim ligula id justo feugiat sodales.Mauris eu est arcu. Donec vestibulum rutrum feugiat sodales auris est.</p>
				</blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					accumsan lorem id porttitor porttitor. In pulvinar pellentesque ornare. Morbi facilisis sem molestie sapien euismod,
					vel ornare mi sagittis. Nulla at porta arcu, ut lacinia dui. In semper.Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
				</p>
			</div>

			<div class="[ content-acerca-de ]" >
				<blockquote>
					<p>Sed dignissim ligula id justo feugiat sodales.Mauris eu est arcu. Donec vestibulum rutrum feugiat sodales auris est.</p>
				</blockquote>
				<p>
					Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
				</p>
			</div>

		</div>
	</div>
</section>

<section class="[ bg-gray-light section--bg space-id ][ no-margin--bottom ]" id="voces_ciudadanas">
		<div class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ][ text-center ]">Voces ciudadanas</h2>
			<div class="[ row ][ margin-bottom ]">
				<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 1,
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
						<div class="[ col-xs-12 ][ margin-bottom ]">
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
		</div>

		<div class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ]">Grupo de trabajo</h2>
			<div class="[ row ][ margin-bottom ]">
				<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 3,
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
						<div class="[ col-xs-12 col-sm-4 ][ margin-bottom ]">
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
		</div>

		<div class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ]">"Más ciudadanas y ciudadanos:"</h2>
			<div class="[ row ][ margin-bottom ]">

					<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 1,
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
							<div class="[ col-xs-12 ][ margin-bottom ]">
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
				<a href="https://www.youtube.com/channel/UC3-12ySVHF-iItCbSdZ2z-Q" class="[ btn btn-primary btn-large ]" target="_blank">Ver más</a>
			</div>
		</div>

	</section>

<?php get_footer(); ?>