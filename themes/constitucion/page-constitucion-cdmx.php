<?php get_header(); the_post();
the_title();
$url_image_constirucion = attachment_image_url( $post->ID, 'full' );
$img_constitucion_cdmx = get_option( 'img_constitucion_cdmx' ); ?>

<div class="[ bg-image rectangle-small ][ margin--header ][ relative ]" style="background-image: url('<?php echo $img_constitucion_cdmx; ?>');">
	<div class="[ bg-dark--opacity width-100 height-100 ]">
		<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]">Acerca de la Constitución</h1>
	</div>
</div>

<section class="[ container ][ space-id ]" id="jefe_gobierno">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-mensaje-jefegob ]">
				<h2>Mensaje del jefe de gobierno</h2>
				<blockquote>
					<p>Sed dignissim ligula id justo feugiat sodales.Mauris eu est arcu. Donec vestibulum rutrum feugiat sodales auris est.</p>
				</blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					accumsan lorem id porttitor porttitor. In pulvinar pellentesque ornare. Morbi facilisis sem molestie sapien euismod,
					vel ornare mi sagittis. Nulla at porta arcu, ut lacinia dui. In semper. Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-
					lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu.
					Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
				</p>
			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/IMG_6028.jpg" alt="">
</div>

<section class="[ container ][ space-id ]" id="sobre_constitucion">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-acerca-de ]">
				<h2>Sobre la constitución</h2>
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

<div class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/IMG_5956.jpg" alt="">
</div>

<section class="[ container ][ space-id ]" id="grupo_trabajo">
	<article class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

			<div class="[ content-acerca-de ]">
				<h2>Grupo de trabajo</h2>
				<blockquote>
					<p>Sed dignissim ligula id justo feugiat sodales.Mauris eu est arcu. Donec vestibulum rutrum feugiat sodales auris</p>
				</blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque.
					accumsan lorem id porttitor porttitor. In pulvinar pellentesque ornare.
					Morbi facilisis sem molestie sapien euismod, vel ornare mi sagittis.
					Nulla at porta arcu, ut lacinia dui. In semper.
					 Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-
					lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
					Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu.
					Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at
					rutrum risus.
				</p>
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
						<a data-toggle="modal" data-target="#trabajador">
							<img src="<?php echo $url_img; ?>">
							<h3 class="nombre"><?php the_title(); ?></h3>
							<div class="biografia hidden"><?php the_content(); ?></div>
							<div class="cargo hidden"><?php echo get_post_meta( $post->ID, 'cargo_integrante', true ); ?></div>
						</a>
						<!-- <a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a> -->
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
					<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
					<div class="modal-body">
						<img src="" class="[ imagen-modal ][ img-responsive ][ margin-bottom--small ]">
						<h3 class="nombre-modal"></h3>
						<p class="cargo-modal"></p>
						<div class="biografia-modal"></div>
					</div><!-- modal-body -->
				</div>
			</div>
		</div>
	</article>
</section>

<section class="[ bg-gray--fondo section--bg ][ no-margin--bottom ][ space-id ]" id="sobre_plataforma">
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

				<div class="[ content-sobre-la-plataforma ]">
					<h2>Sobre la plataforma</h2>
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
	</div>
</section>

<div class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/IMG_5993.jpg" alt="">
</div>

<section class="[ container ][ space-id ]" id="hacia_constituyente">
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

<section class="[ container ][ space-id ]" id="constitución_wiki">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-1 col-sm-10 ][ text-justify ]">
			<h2 class="[ margin-bottom ]">Constitución en wiki</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit in suscipit similique tempore ab quam voluptatibus, quos modi fuga iusto earum incidunt repellendus quis tempora? Perspiciatis officia accusantium temporibus esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus dolorum quam illo veniam id placeat nulla repellat vero debitis ratione consectetur eos praesentium, delectus doloremque dolor, ipsa deserunt eaque.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consequuntur error illum. Atque esse, et iure rerum fugiat consequuntur repellendus est dignissimos alias officia fugit culpa nam consequatur exercitationem quae!</p>
		</div>
	</div>
	<div class="[ text-center ][ margin-top--large ]">
		<a class="[ btn btn-primary btn-large ]" disabled>Próximamente</a>
	</div>
</section>

<div class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/IMG_6107.jpg" alt="">
</div>

<section class="[ space-id ]" id="preguntas_frecuentes">
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

<div class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/IMG_5747.jpg" alt="">
</div>


<section class="[ container ][ space-id ][ content-biblioteca ]" id="biblioteca">
	<h2 class="[ margin-bottom no-margin-top ]" id="biblioteca">Biblioteca</h2>
	<a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
	<a href="#"><p>Lorem ipsum dolor sit amet,  adipisicing elit.</p></a>
	<a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
	<a href="#"><p>Lorem ipsum sit amet, consectetur adipisicing elit.</p></a>
	<a href="#"><p>Lorem ipsum dolor sit amet, elit.</p></a>
</section>

<?php get_footer(); ?>
