<?php get_header(); the_post();
the_title();
$url_image_constirucion = attachment_image_url( $post->ID, 'full' );
$img_constitucion_cdmx = get_option( 'img_constitucion_cdmx' ); ?>

<section class="[ bg-image rectangle-small ][ margin--header margin-bottom--large ][ relative ]" style="background-image: url('<?php echo $img_constitucion_cdmx; ?>');">
	<div class="[ bg-dark--opacity width-100 height-100 ]">
		<h2 class=" [ text-uppercase ][ no-margin ][ center-full ][ color-light ][ letter-spacing ]">Acerca de la Constitución</h2>
	</div>
</section>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
	<div class="[ margin-bottom--large ]">
		<?php the_content(); ?>
	</div>
	<img class="[ img-responsive ][ margin-auto ]" src="<?php echo $url_image_constirucion; ?>">
</section>

<section >
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

				<div class="[ content-mensaje-jefegob ]">
					<h3>Mensaje del Jefe de Gobierno</h3>
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
	</div>
</section>

<section class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="">
</section>

<section >
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

				<div class="[ content-acerca-de ]">
					<h3>Sobre la Constitución</h3>
					<blockquote>
						<p>Sed dignissim ligula id justo feugiat sodales.Mauris eu est arcu. Donec vestibulum rutrum feugiat sodales auris est.</p>
					</blockquote>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
						accumsan lorem id porttitor porttitor. In pulvinar pellentesque ornare. Morbi facilisis sem molestie sapien euismod,
						vel ornare mi sagittis. Nulla at porta arcu, ut lacinia dui. In semper.Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
					</p>
				</div>

				<div class="[ content-acerca-de ]">
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

<section class="[ descanso-visual ]">
	<img src="<?php echo THEMEPATH; ?>images/cd3.png" alt="">
</section>

<section >
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

				<div class="[ content-acerca-de ]">
					<h3>Subtítulo</h3>
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
		</div>
	</div>
</section>


<article class="[ bg-gray-light ][ margin-top-bottom--large padding--top-bottom--xlarge ]">
	<section class="[ container padding--sides--xsm ]">
		<?php $proceso = get_page_by_path('proceso-participativo'); ?>
		<h2 class="[ no-margin-top ]"><?php echo $proceso->post_title; ?></h2>
		<?php echo $proceso->post_content; ?>

		<div class="[ row ][ margin-top-bottom ]">
			<div class="[ col-xs-6 col-sm-3 ]">
				<div class="[ row ]">
					<div class="[ col-xs-8 ]">
						<p class="[ fz-xlarge ]">Paso 1</p>
						<p class="[ fz-small ]"><?php echo get_post_meta($proceso->ID, 'paso_a', true);?></p>
					</div>
					<div class="[ col-xs-4 no-padding--sides ]">
						<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH ?>images/flecha.png" alt="" /></div>
					</div>
				</div>

			<div class="[ col-xs-6 col-sm-3 ]">
				<div class="[ row ]">
					<div class="[ col-xs-8 ]">
						<p class="[ fz-xlarge ]">Paso 2</p>
						<p class="[ fz-small ]"><?php echo get_post_meta($proceso->ID, 'paso_b', true);?></p>

					</div>
					<div class="[ col-xs-4 no-padding--sides ]">
						<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH ?>images/flecha.png" alt="" />
					</div>
				</div>
			</div>
			<div class="[ col-xs-6 col-sm-3 ]">
				<div class="[ row ]">
					<div class="[ col-xs-8 ]">
						<p class="[ fz-xlarge ]">Paso 3</p>
						<p class="[ fz-small ]"><?php echo get_post_meta($proceso->ID, 'paso_c', true);?></p>
					</div>
					<div class="[ col-xs-4 no-padding--sides ]">
						<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH ?>images/flecha.png" alt="" />
					</div>
				</div>
			</div>
			<div class="[ col-xs-6 col-sm-3 ]">
				<div class="[ row ]">
					<div class="[ col-xs-8 ]">
						<p class="[ fz-xlarge ]">Paso 4</p>
						<p class="[ fz-small ]"><?php echo get_post_meta($proceso->ID, 'paso_d', true);?></p>
					</div>
					<div class="[ col-xs-4 no-padding--sides ]">
						<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH ?>images/flecha.png" alt="" /></div>
					</div>
				</div>
		</div>

		<div>
			<?php $attachment = get_attachment_pdf($proceso->ID);
			if ( $attachment != '' ) : ?>
				<a href="<?php echo $attachment; ?>" target="_blank" class="descargar-doc">
			<?php endif; ?>
				<p class="[ inline-block middle ][ text-uppercase ]">Descarga los documentos oficiales aquí</p>
				<img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/file-pdf.svg">
			<?php if ( $attachment != '' ) echo '</a>'; ?>
		</div>
	</section>
</article>

<?php $experiencias = get_page_by_path('experiencias-y-buenas-practicas-globales');
$url_image_experiencias = attachment_image_url( $experiencias->ID, 'full' );?>
<section class="[ container padding--sides--xsm ][ margin-bottom--large ]">
	<h2><?php echo $experiencias->post_title; ?></h2>
	<?php echo $experiencias->post_content; ?>
</section>
<section class="[ container ]">
	<h2>Grupo de trabajo</h2>
	<div class="[ row ]">
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ]">
			<img src="<?php echo THEMEPATH; ?>images/4.jpg">
			<h3>Nombre lorem ipsum</h3>
			<p>contacto@lorem.com</p>
			<a class="[ btn btn-primary btn--small ][ margin-bottom ]" data-toggle="modal" data-target="#trabajador"><strong>Ver más</strong></a>
		</div>
	</div>
</section>
<!-- Modal grupo de trabajo -->
<div id="trabajador" class="modal fade" role="dialog">
	<div class="modal-dialog modal--trabajador">
		<!-- Modal content-->
		<div class="modal-content">
			<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
			<div class="modal-body">
				<h3>Nombre lorem ipsum</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum incidunt id quo. Ea assumenda doloremque earum, excepturi iure reiciendis eum. Officia, vero atque. Quae provident voluptas, facilis adipisci! Aperiam, necessitatibus.</p>
				<p>contacto@lorem.com</p>
			</div><!-- modal-body -->
		</div>
	</div>
</div>
<section class="[ container ]">
	<h2>Constitución en wiki</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus dolorum quam illo veniam id placeat nulla repellat vero debitis ratione consectetur eos praesentium, delectus doloremque dolor, ipsa deserunt eaque.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consequuntur error illum. Atque esse, et iure rerum fugiat consequuntur repellendus est dignissimos alias officia fugit culpa nam consequatur exercitationem quae!</p>
	<div class="[ text-center ][ margin-top--large ]">
		<a class="[ btn btn-primary btn-large ][ margin-bottom--large ]" data-toggle="modal" data-target="#trabajador"><strong>Visitar sitio</strong></a>
	</div>
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
