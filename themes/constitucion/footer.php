			</div><!-- container -->
			<footer>
				<img class="[ center-block ]" src="<?php echo THEMEPATH; ?>images/logocdmx2.png">
				<div>
					<a href="#">Términos y condiciones</a>
					<a data-toggle="modal" data-target="#contacto">Contacto</a>
					<a href="#">Transparencia</a>
				</div>
			</footer>

			<!-- Modal -->
			<div id="contacto" class="modal fade" role="dialog">
				<div class="modal-dialog modal--contacto">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-body">
							<a type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
							<div class="[ row padding--sides--xsm ]">
								<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 ]">
									<div class="[ padding--top--large padding--bottom--xxlarge padding--sides--large--sm ]">
										<div>
											<h2 class="[ inline-block align-middle ][ no-margin ]">Estimados</h2>
											<img class="[ inline-block align-middle ][ img-contacto ][ margin-auto ]" src="<?php echo THEMEPATH; ?>/images/logo-horizontal.gif">
										</div>
										<form class="[ margin-bottom--large ]" action="" method="POST" data-parsley-validate="">
											<input type="text" name="mensaje_cdmx" id="mensaje_cdmx" class="[ form-control ][ input-primary border-gray ][ margin-bottom--large ]" placeholder="Escribe tu mensaje" required="">
											<h2 class="[ margin-bottom--large ][ fz-small--xs ]">Con respeto,</h2>
											<input name="nombre_cdmx" id="nombre_cdmx" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Tu nombre" required="">
											<input name="email_cdmx" id="email_cdmx" type="email" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Correo Electrónico" required="">
											<input name="telefono_cdmx" id="telefono_cdmx" type="text" class="[ form-control ][ input-primary ][ margin-bottom--large ]" placeholder="Teléfono" required="">
											<input name="accion" id="accion" type="hidden" value="guarda-formulario">
											<button type="submit" class="[ btn btn-secondary ][ pull-right ]">enviar</button>
										</form>
									</div>
								</div>
							</div>	<!-- row -->
						</div><!-- modal-body -->
					</div>
				</div>
			</div>

		<?php wp_footer(); ?>
	</body>

</html>
