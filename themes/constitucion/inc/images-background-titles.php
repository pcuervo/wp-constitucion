<?php 
add_action( 'admin_menu', 'register_background_titles' );

function register_background_titles(){
  add_menu_page('Opciones constitución', 'Opciones constitución', 'edit_pages', 'opciones-constitucion', 'vew_setings_constitucion');
}

function vew_setings_constitucion(){ ?>

	<h2 class="titulo-seting">Imagenes para las plecas de los titulos</h2>
	<form method="post" action="">
		<table class="form-table streaming">
			<tbody>
				
				<tr>
					<th><label for="img-kioskos">Imagen Kioskos</label></th>
					<td>
						<input type='text' class='widefat' id='img-kioskos' name='img-kioskos'/>
					</td>
				</tr>
				<tr>
					<th><label for="img-cdmx">Imagen CDMX</label></th>
					<td>
						<input type='text' class='widefat' id='img-cdmx' name='img-cdmx'/>
					</td>
				</tr>
				<tr>
					<th><label for="constitucion-cdmx">Imagen Constitución CDMX</label></th>
					<td>
						<input type='text' class='widefat' id='constitucion-cdmx' name='constitucion-cdmx'/>
					</td>
				</tr>

				<tr>
					<th>
						<input name="guarda_imagenes_plecas" type="hidden" id="guarda_imagenes_plecas" value="si" class="regular-text">

						<input type="submit" class="button-primary" value="Guardar">
					</th>
				</tr>


			</tbody>
		</table>
	</form>
	

<?php }

