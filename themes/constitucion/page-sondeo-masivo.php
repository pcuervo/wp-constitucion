<?php get_header(); ?>

<?php do_shortcode( '[show-survey]' ); ?>

	<div id="modal-agradecimiento" class="modal fade" role="dialog">
		<div class="modal-dialog [ margin-top--xlarge ][ padding--sides--xsm ]">
			<!-- Modal content-->
			<div class="[ row ]">
				<div class="[ col-xs-12  col-sm-10 col-sm-offset-1 ]">
					<div class="modal-content [ no-border-radius ]">
						<div class="modal-body [ padding--bottom--xxlarge padding--sides padding--sides--large--sm ]">
							<img class="[ img-responsive ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif">

							<h2 class="[ text-center text-uppercase ]">¡Gracias por participar!</h2>
							<p class="[ text-center ][ js-codigo-referencia ]">Tu código de referencia es: <span></span></p>
							<p class="[ text-center text-uppercase ]">Escribe tu nombre y apellido para obtener tu certificado de participación</p>
							<form class="[ row ]">
								<div class="[ col-xs-12 col-sm-6  ]">
									<input type="text" class="form-control [ margin-bottom ][ input--search ] " placeholder="Nombre(s)">
								</div>
								<div class="[ col-xs-12 col-sm-6 ]">
									<input type="text" class="form-control [ margin-bottom ][ input--search ] " placeholder="Apellidos">
								</div>
								<button type="submit" class="[ col-xs-12 ][ btn btn-secondary color-gray ][ center-block ]">obtener certificado</button>
								<a href="<?php echo site_url('participa') ?>" class="[ col-xs-12 ][ btn btn-secondary btn-sm color-gray ][ center-block ][ margin-top ]">No deseo obtener mi certificado en este momento</a>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>