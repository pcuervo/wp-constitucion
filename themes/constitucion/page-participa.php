<?php get_header(); the_post();

the_title(); ?>


<?php get_sidebar(); ?>
	<section class="[ bg-gray-light ][ margin-bottom--large padding--top-bottom--xlarge ]">
		<article class="[ container ]">
			<div class="[ padding--sides--xsm ]">
				<h2 class="[ no-margin-top ]">Instrucciones</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quod minus officia, vitae alias, ex illum perferendis veritatis impedit ullam, provident debitis, consequuntur commodi quo doloribus iste ipsam possimus. Quas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis eligendi exercitationem dolores est doloribus excepturi, facilis assumenda nam velit. Iure harum, aspernatur minus molestiae eos inventore possimus tempora soluta officiis.</p>
			</div>
			<div class="[ row ][ margin-top-bottom ][ padding--sides--xsm ]">
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ row ][ margin-bottom ]">
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
					<div class="[ row ][ margin-bottom ]">
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
					<div class="[ row ][ margin-bottom ]">
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
					<div class="[ row ][ margin-bottom ]">
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

	<!-- Trigger the modal with a button -->
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Modal</button>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog [ margin-top--xlarge ][ padding--sides--xsm--large ]">
			<!-- Modal content-->
			<div class="[ row ]">
				<div class="[ col-xs-12  col-sm-10 col-sm-offset-1 ]">
					<div class="modal-content [ no-border-radius ]">
						<div class="modal-body [ padding--bottom--xxlarge padding--sides padding--sides--large--sm ]">
						<!-- gif -->

							<h2 class="[ text-center ][ text-uppercase ]">¡Gracias por participar!</h2>
							<p class="[ text-center ][ text-uppercase ]">Escribe tu nombre y apellido para obtener tu certificado de participación</p>
							<form class="[ row ]">
								<div class="[ col-xs-12 col-sm-6  padding--right--small--sm ]">
									<input type="text" class="form-control [ margin-bottom ][ input--search ][ width-50 ] " placeholder="NOMBRES">
								</div>
								<div class="[ col-xs-12 col-sm-6 padding--left--small--sm ]">
									<input type="text" class="form-control [ margin-bottom ][ input--search ][ width-50 ] " placeholder="APELLIDOS">
								</div>
								<button type="submit" class="[ btn btn-secondary color-gray ][ pull-right ]">enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
	<section class="[ bg-image rectangle-small ][ relative ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/edificios.png');">
		<div class="[ bg-dark--opacity width-100 height-100 ][ text-center ]">
			<h2 class=" [ text-uppercase ][ no-margin ][ center-full ][ color-light ][ fw-semibold ]">¡Participa en nuestros kioskos!</h2>
		</div>
	</section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15049.640763754784!2d-99.14220487963355!3d19.437873773736463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sMexico+City%2C+Federal+District!5e0!3m2!1sen!2smx!4v1456352483009" class="[ height-200 width-100 ][ no-border ]" frameborder="0" allowfullscreen></iframe>
	<section class="[ bg-gray-light ][ padding--top--xlarge padding-bottom--large--sm ]">
		<article class="[ container padding--bottom--large ]">
			<h2 class="[ no-margin-top ]">Opinión de los ciudadanos</h2>
			<div class="[ row ][ margin-bottom ]">
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ js-video-wrapper ]">
						<iframe class="[ embed-responsive-item ]" src="https://www.youtube.com/embed/eVZbN7sPPV4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="[ col-xs-6 col-sm-3 ]">
					<div class="[ js-video-wrapper ]">
						<iframe class="[ embed-responsive-item ]" src="https://www.youtube.com/embed/eVZbN7sPPV4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="[ hidden-xs col-sm-3 ]">
					<div class="[ js-video-wrapper ]">
						<iframe class="[ embed-responsive-item ]" src="https://www.youtube.com/embed/eVZbN7sPPV4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="[ hidden-xs col-sm-3 ]">
					<div class="[ js-video-wrapper ]">
						<iframe class="[ embed-responsive-item ]" src="https://www.youtube.com/embed/eVZbN7sPPV4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="[ text-right ]">
				<p class="[ inline-block align-middle ][ no-margin ]">Ver más</p>
				<img class="[ inline-block align-middle ][ svg icon icon--iconed--small icon--thickness-1 icon--stoke ][ color-youtube ]"  src="<?php echo THEMEPATH; ?>icons/youtube.svg">
			</div>
		</article>
	</section>
	<section class="[ container padding--sides--xsm ][ margin-bottom--xlarge ]">
		<div class="[ bg-light float-top--sm ][ padding--top-bottom--large padding--sides--large--sm ]">
			<div>
				<h2 class="[ inline-block align-middle ][ no-margin ]">Estimados</h2>
				<img class="[ inline-block align-middle ][ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif">
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




<?php get_footer(); ?>