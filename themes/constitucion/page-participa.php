<?php get_header(); the_post();

the_title(); ?>


<?php get_sidebar(); ?>
	<section class="[ bg-gray-light ][ margin-bottom--large padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<h2 class="[ no-margin-top ]">Instrucciones</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quod minus officia, vitae alias, ex illum perferendis veritatis impedit ullam, provident debitis, consequuntur commodi quo doloribus iste ipsam possimus. Quas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis eligendi exercitationem dolores est doloribus excepturi, facilis assumenda nam velit. Iure harum, aspernatur minus molestiae eos inventore possimus tempora soluta officiis.</p>
			<div class="[ row ][ margin-top-bottom ]">
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 1</p>
							<p class="[ fz-small ]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						<div class="[ col-xs-4 ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 2</p>
							<p class="[ fz-small ]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						<div class="[ col-xs-4 ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
				<div class="[ clearfix ][ visible-xs ]"></div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 3</p>
							<p class="[ fz-small ]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						<div class="[ col-xs-4 ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ]">
						<div class="[ col-xs-8 ]">
							<p class="[ fz-xlarge ]">Paso 4</p>
							<p class="[ fz-small ]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						<div class="[ col-xs-4 ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/flecha.png">
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	<section class="[ container ]">
		<h2 class="[ no-margin-top ]">Cronología</h2>
	</section>
	<?php do_shortcode('[show-survey]'); ?>
	<section class="[ bg-gray-light ][ margin-bottom--large padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<h2 class="[ no-margin-top ]">Instrucciones</h2>
			<p class="[ lead ][ text-uppercase ]">Lorem ipsum asit amet</p>
			<div class="[ row ][ text-center ][ margin-bottom--large ]">
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
				<div class="[ col-xs-3 ][ question ]">
					<div class="[ circle ][ relative ][ margin-auto ]">
						<img class="[ center-full ][ svg icon icon--iconed icon--thickness-1 icon--stoke ][ color-primary ]"  src="<?php echo THEMEPATH; ?>icons/hierarchy-business.svg">
					</div>
					<p class="[ text-uppercase ]">Lorem ipsum asit</p>
				</div>
			</div>
			<div class="[ row ]">
				<div class="[ col-xs-3 col-xs-offset-9 ][ text-center ]">
					<a href="" class="[ btn btn-gray ][ margin-bottom--small ]">siguiente</a>
					<p class="[ fz-xsmall ][ text-uppercase ]">Pregunta 1 de 12</p>
				</div>
			</div>
		</article>
	</section>
	<section class="[ container ][ text-center ][ margin-bottom--large ]">
		<h2>¿Ya participaste?</h2>
		<p class="[ text-uppercase ]">Ingresa tu número de folio para obtener tu certificado</p>
		<form class="[ form-inline  ]">
			<div class="[ input-group ]">
				<input type="text" class="[ form-control form--primary ]" placeholder="012345678-6">
				<span class="[ input-group-btn ]">
					<button class="[ btn btn-default ]" type="button">
						<img class="[ svg icon icon--iconed--small icon--thickness-1 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/find.svg">
					</button>
				</span>
			</div>
		</form>
	</section>
<?php get_footer(); ?>