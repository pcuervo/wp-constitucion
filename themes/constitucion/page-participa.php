<?php get_header(); the_post();

the_title(); ?>


<?php get_sidebar(); ?>
	<section class="[ bg-gray-light ][ margin-bottom--large padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<div class="[ padding--sides--xsm ]">
				<h2 class="[ no-margin-top ]">Instrucciones</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quod minus officia, vitae alias, ex illum perferendis veritatis impedit ullam, provident debitis, consequuntur commodi quo doloribus iste ipsam possimus. Quas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis eligendi exercitationem dolores est doloribus excepturi, facilis assumenda nam velit. Iure harum, aspernatur minus molestiae eos inventore possimus tempora soluta officiis.</p>
			</div>
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
	<!-- <section class="[ bg-gray-light ][ margin-bottom--large padding--top-bottom--xlarge ]">
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
					<a href="" class="[ btn btn-primary ][ margin-bottom--small ]">siguiente</a>
					<p class="[ fz-xsmall ][ text-uppercase ]">Pregunta 1 de 12</p>
				</div>
			</div>
		</article>
	</section> -->
	<section class="[ container padding--sides--xsm--large ][ text-center ][ margin-bottom--large ]">
		<h2>¿Ya participaste?</h2>
		<p class="[ text-uppercase ]">Ingresa tu número de folio para obtener tu certificado</p>
		<form class="[ form-inline  ]">
			<div class="[ input-group ]">
				<input type="text" class="[ form-control input--search ][ height-40 ]" placeholder="012345678-6">
				<span class="[ input-group-btn ]">
					<button class="[ btn btn-secondary ][ height-40 ]" type="button">
						<img class="[ svg icon icon--iconed--small icon--thickness-1 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/find.svg">
					</button>
				</span>
			</div>
		</form>
	</section>
	<div class="[ bg-image rectangle ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/edificios.png');"></div>
	<!-- map -->
	<section class="[ bg-gray-light ][ padding--top--large padding-bottom--large--sm ]">
		<article class="[ container padding--sides--xsm ]">
			<h2>Opinión de los ciudadanos</h2>
			<div class="[ row ]">
				<div class="[ col-xs-6 col-sm-3 ]">

				</div>
				<div class="[ col-xs-6 col-sm-3 ]">

				</div>
				<div class="[ hidden-xs col-sm-3 ]">

				</div>
				<div class="[ hidden-xs col-sm-3 ]">

				</div>
			</div>
			<div class="[ pull-right ]">
				<p class="[ inline-block align-middle ][ no-margin ]">Ver más</p>
				<img class="[ inline-block align-middle ][ svg icon icon--iconed--small icon--thickness-1 icon--stoke ][ color-gray ]"  src="<?php echo THEMEPATH; ?>icons/youtube.svg">
			</div>
		</article>
	</section>
	<section class="[ container padding--sides--xsm ][ margin-bottom--xlarge ]">
		<div class="[ bg-light float-top--sm ][ padding--top-bottom--large padding--sides--large--sm ]">
			<div>
				<h2 class="[ inline-block align-middle ][ no-margin ]">Estimados</h2>
<!-- 				<img class="[ inline-block align-middle ][ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo_horizontal.gif"> -->
			</div>
			<form class="[ margin-bottom--large ]">
				<input type="text" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Escribe tu mensaje">
				<h2 class="[ margin-bottom--large ]">Con respecto,</h2>
				<input type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Tu nombre">
				<input type="email" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Correo Electrónico">
				<input type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Teléfono">
				<button type="submit" class="[ btn btn-secondary ][ pull-right ]">enviar</button>
			</form>
		</div>
	</section>


	<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>