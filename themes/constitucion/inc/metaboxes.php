<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){
		global $post;

		add_meta_box( 'meta-box-ubicacion', 'Ubicación', 'show_metabox_ubicacion', 'kioskos');
		add_meta_box( 'meta-box-extras_evento', 'Extras evento', 'show_metabox_extras_evento', 'eventos', 'side', 'high');
		add_meta_box( 'meta-box-extras_evento_line', 'Extras evento', 'show_metabox_extras_evento', 'linea-del-tiempo', 'side', 'high');
		add_meta_box( 'meta-box-video_voces', 'Insertar video', 'show_metabox_video_voces', 'voces-ciudadanas');
		add_meta_box( 'meta-box-extras_noticias', 'Extras', 'show_metabox_extras_noticias', 'post', 'side', 'high');
		add_meta_box( 'meta-box-info_ensayo', 'Información del ensayo', 'show_metabox_info_ensayo', 'ensayos');


		if ($post->post_name == 'participa' || $post->post_name == 'proceso-participativo'){
			add_meta_box( 'meta-box-pasos', 'Pasos', 'show_metabox_pasos', 'page');
		}

		if ($post->post_name == 'participa' || $post->post_name == 'cdmx'){
			add_meta_box( 'meta-box-contenido_extra', 'Extras', 'show_metabox_contenido_extra', 'page');
		}

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function show_metabox_ubicacion($post){
		$latitud_kiosko = get_post_meta($post->ID, 'latitud_kiosko', true);
		$longitud_kiosko = get_post_meta($post->ID, 'longitud_kiosko', true);
		$ubicacion_kiosko = get_post_meta($post->ID, 'ubicacion_kiosko', true);

		wp_nonce_field(__FILE__, '_ubicacion_kiosko_nonce');

		echo "<label for='ubicacion_kiosko' class='label-paquetes'>Ingresa la dirección: </label>";
		echo "<input type='text' class='widefat' id='ubicacion_kiosko' name='ubicacion_kiosko' value='$ubicacion_kiosko'/>";

		echo "<input type='hidden' class='widefat' id='latitud_kiosko' name='latitud_kiosko' value='$latitud_kiosko'/>";
		echo "<input type='hidden' class='widefat' id='longitud_kiosko' name='longitud_kiosko' value='$ubicacion_kiosko'/>";


		echo '<br><br><div class="iframe-cont">';
			if ($latitud_kiosko != '' ) {
				echo '<iframe width="100%" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='.$latitud_kiosko.','.$longitud_kiosko.'&hl=es;z=14&amp;output=embed"></iframe>';
			}

		echo '</div>';
	}

	/**
	 * PASOS PARA PARTICIPAR
	 */
	function show_metabox_pasos($post){
		$paso_a = get_post_meta($post->ID, 'paso_a', true);
		$paso_b = get_post_meta($post->ID, 'paso_b', true);
		$paso_c = get_post_meta($post->ID, 'paso_c', true);
		$paso_d = get_post_meta($post->ID, 'paso_d', true);

		wp_nonce_field(__FILE__, '_pasos_nonce');

		echo "<label for='paso_a' class='label-paquetes'>Paso 1: </label>";
		echo "<input type='text' class='widefat' id='paso_a' name='paso_a' value='$paso_a'/><br><br>";

		echo "<label for='paso_b' class='label-paquetes'>Paso 2: </label>";
		echo "<input type='text' class='widefat' id='paso_b' name='paso_b' value='$paso_b'/><br><br>";

		echo "<label for='paso_c' class='label-paquetes'>Paso 3: </label>";
		echo "<input type='text' class='widefat' id='paso_c' name='paso_c' value='$paso_c'/><br><br>";

		echo "<label for='paso_d' class='label-paquetes'>Paso 4: </label>";
		echo "<input type='text' class='widefat' id='paso_d' name='paso_d' value='$paso_d'/><br><br>";

	}


	/**
	 * EXTRAS CRONOLOGIA
	 */
	function show_metabox_extras_evento($post){
		$fecha_evento = get_post_meta($post->ID, 'fecha_evento', true);

		wp_nonce_field(__FILE__, '_evento_nonce');

		echo "<label for='fecha_evento' class='label-paquetes'>Fecha del evento </label>";
		echo "<input type='text' class='widefat datepicker' id='fecha_evento' name='fecha_evento' value='$fecha_evento'/><br><br>";
		$tipo = get_post_meta( $post->ID, 'tipo-de-evento', true );
		$checked_1 = $tipo == 1 ? 'checked' : '';
		$checked_2 = $tipo == 2 ? 'checked' : ''; 
		$checked_3 = $tipo == 3 ? 'checked' : ''; 

		echo "<label for='tipo-de-evento' class='label-paquetes'>Tipo de evento: </label>";?><br><br>
		<input type="radio" name="tipo-de-evento" value="1" <?php echo $checked_1; ?> > Tipo 1<br>
  		<input type="radio" name="tipo-de-evento" value="2" <?php echo $checked_2; ?> > Tipo 2<br>
  		<input type="radio" name="tipo-de-evento" value="3" <?php echo $checked_3; ?> > Nota destacada<br>

	<?php }


	function show_metabox_video_voces($post){
		$video_voces = get_post_meta($post->ID, 'video_voces', true);

		wp_nonce_field(__FILE__, '_video_nonce');

		echo "<label for='video_voces' class='label-paquetes'>Video </label>";
		echo "<textarea class='widefat' id='video_voces' name='video_voces' rows='6'/>$video_voces</textarea><br><br>";

		if ($video_voces != '') {
			preg_match('/src="([^"]+)"/', $video_voces, $match);
			$url = $match[1];
			echo '<iframe class="[ embed-responsive-item ]" src="'.$url.'" frameborder="0" allowfullscreen></iframe>;';
		}
	}

	function show_metabox_contenido_extra($post){
		wp_nonce_field(__FILE__, '_extra_cdmx_nonce');
		$contenido_extra = get_post_meta($post->ID, 'contenido_extra', true);
		wp_editor( $contenido_extra, 'contenido_extra' );

	}

	function show_metabox_info_ensayo($post){
		$nombre_ensayo = get_post_meta( $post->ID, 'nombre_ensayo', true );
		$frase_ensayo = get_post_meta( $post->ID, 'frase_ensayo', true );
		$fechaInicio = get_post_meta( $post->ID, 'fechaInicio', true );
		$fechaFinal = get_post_meta( $post->ID, 'fechaFinal', true );
		$palabra_a = get_post_meta( $post->ID, 'palabra_a', true );
		$palabra_b = get_post_meta( $post->ID, 'palabra_b', true );
		$palabra_c = get_post_meta( $post->ID, 'palabra_c', true );
		$mensaje_central = get_post_meta( $post->ID, 'mensaje_central', true );
		$autores_ensayo = get_post_meta( $post->ID, 'autores_ensayo', true );
		$institucion = get_post_meta( $post->ID, 'institucion-u-organizacion', true );
		$fotografias_ensayo = get_post_meta( $post->ID, 'fotografias_ensayo', true );
		$fotografias_redes_ensayo = get_post_meta( $post->ID, 'fotografias_redes_ensayo', true );
		$lista_asistentes_ensayo = get_post_meta( $post->ID, 'lista_asistentes_ensayo', true );
		$compartir_documento_ensayo = get_post_meta( $post->ID, 'compartir_documento_ensayo', true );
		$correo_electronico_ensayo = get_post_meta( $post->ID, 'correo_electronico_ensayo', true );
		$pagina_web_ensayo = get_post_meta( $post->ID, 'pagina_web_ensayo', true );
		$recibir_informacion = get_post_meta( $post->ID, 'recibir_mas_informacion', true );

		echo "<label for='nombre_ensayo' class='label-paquetes'>Nombre del ensayo o sesión colaborativa: </label>";
		echo "<input type='text' class='widefat' id='nombre_ensayo' name='nombre_ensayo' value='$nombre_ensayo'/><br><br>";

		echo "<label for='frase_ensayo' class='label-paquetes'>Frase que describe el ensayo: </label>";
		echo "<input type='text' class='widefat' id='frase_ensayo' name='frase_ensayo' value='$frase_ensayo'/><br><br>";

		echo "<label for='fechaInicio' class='label-paquetes'>Fechas Inicio: </label>";
		echo "<input type='text' class='widefat date-ensayo' id='fechaInicio' name='fechaInicio' value='$fechaInicio'/><br><br>";

		echo "<label for='fechaFinal' class='label-paquetes'>Fechas Final: </label>";
		echo "<input type='text' class='widefat date-ensayo-fin' id='fechaFinal' name='fechaFinal' value='$fechaFinal' disabled/><br><br>";

		echo "<label class='label-paquetes'>Palabras: </label><br><br>";
		echo "<label for='palabra_a' class='label-paquetes'>Palabra 1: </label>";
		echo "<input type='text' class='widefat' id='palabra_a' name='palabra_a' value='$palabra_a' /><br><br>";
		echo "<label for='palabra_b' class='label-paquetes'>Palabra 2: </label>";
		echo "<input type='text' class='widefat' id='palabra_b' name='palabra_b' value='$palabra_b' /><br><br>";
		echo "<label for='palabra_c' class='label-paquetes'>Palabra 3: </label>";
		echo "<input type='text' class='widefat' id='palabra_c' name='palabra_c' value='$palabra_c' /><br><br>";

		echo "<label for='mensaje_central' class='label-paquetes'>Frase - Mensaje central: </label>";
		echo "<input type='text' class='widefat' id='mensaje_central' name='mensaje_central' value='$mensaje_central' /><br><br>";

		echo "<label for='autores_ensayo' class='label-paquetes'>Autores: </label>";
		echo "<input type='text' class='widefat' id='autores_ensayo' name='autores_ensayo' value='$autores_ensayo' /><br><br>";

		echo "<label for='institucion-u-organizacion' class='label-paquetes'>Institución u organización: </label>";
		echo "<input type='text' class='widefat' id='institucion-u-organizacion' name='institucion-u-organizacion' value='$institucion' /><br><br>";

		echo "<label for='fotografias_ensayo' class='label-paquetes'>Fotografías: </label>";
		echo "<input type='text' class='widefat' id='fotografias_ensayo' name='fotografias_ensayo' value='$fotografias_ensayo' /><br><br>";

		echo "<label for='fotografias_redes_ensayo' class='label-paquetes'>Fotografías redes sociales: </label>";
		echo "<input type='text' class='widefat' id='fotografias_redes_ensayo' name='fotografias_redes_ensayo' value='$fotografias_redes_ensayo' /><br><br>";

		echo "<label for='lista_asistentes_ensayo' class='label-paquetes'>Lista de asistentes: </label>";
		echo "<input type='text' class='widefat' id='lista_asistentes_ensayo' name='lista_asistentes_ensayo' value='$lista_asistentes_ensayo' /><br><br>";

		echo "<label for='compartir_documento_ensayo' class='label-paquetes'>Compartir documento: </label>";
		echo "<input type='text' class='widefat' id='compartir_documento_ensayo' name='compartir_documento_ensayo' value='$compartir_documento_ensayo' /><br><br>";

		echo "<label for='correo_electronico_ensayo' class='label-paquetes'>Correo Electrónico: </label>";
		echo "<input type='text' class='widefat' id='correo_electronico_ensayo' name='correo_electronico_ensayo' value='$correo_electronico_ensayo' /><br><br>";

		echo "<label for='pagina_web_ensayo' class='label-paquetes'>Página Web: </label>";
		echo "<input type='text' class='widefat' id='pagina_web_ensayo' name='pagina_web_ensayo' value='$pagina_web_ensayo' /><br><br>";

		
		$checked_1 = $recibir_informacion == 'si' ? 'checked' : '';
		$checked_2 = $recibir_informacion == 'no' ? 'checked' : ''; 
		$default = ($checked_1 == '' AND $checked_2 == '') ? 'checked' : '';

		echo "<label for='recibir_mas_informacion' class='label-paquetes'>Quieres recibir más información: </label><br><br> ";
		echo '<input type="radio" name="recibir_mas_informacion" value="si" '.$checked_1.' '.$default.'> Si<br>';
  		echo '<input type="radio" name="recibir_mas_informacion" value="no" '.$checked_2.' > No<br>';

	}


	function show_metabox_extras_noticias($post){
		global $post;
		wp_nonce_field(__FILE__, '_extras_noticia_nonce');

		$destacado = get_post_meta( $post->ID, 'destacado_noticia', true );
		$checked = $destacado ? 'checked' : ''; ?>

		<input type="checkbox" name="destacado_noticia" id="destacado" value="1"  <?php echo $checked; ?> /> Check costo<br><br>
		
	<?php }



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['latitud_kiosko']) and check_admin_referer(__FILE__, '_ubicacion_kiosko_nonce') ){
			update_post_meta($post_id, 'latitud_kiosko', $_POST['latitud_kiosko']);
			update_post_meta($post_id, 'longitud_kiosko', $_POST['longitud_kiosko']);
			update_post_meta($post_id, 'ubicacion_kiosko', $_POST['ubicacion_kiosko']);
		}

		if ( isset($_POST['paso_a']) and check_admin_referer(__FILE__, '_pasos_nonce') ){
			update_post_meta($post_id, 'paso_a', $_POST['paso_a']);
			update_post_meta($post_id, 'paso_b', $_POST['paso_b']);
			update_post_meta($post_id, 'paso_c', $_POST['paso_c']);
			update_post_meta($post_id, 'paso_d', $_POST['paso_d']);
		}

		if ( isset($_POST['fecha_evento']) and check_admin_referer(__FILE__, '_evento_nonce') ){
			update_post_meta($post_id, 'fecha_evento', $_POST['fecha_evento']);
			update_post_meta($post_id, 'tipo-de-evento', $_POST['tipo-de-evento']);
			
		}

		if ( isset($_POST['video_voces']) and check_admin_referer(__FILE__, '_video_nonce') ){
			update_post_meta($post_id, 'video_voces', $_POST['video_voces']);
		}

		if ( isset($_POST['contenido_extra']) and check_admin_referer(__FILE__, '_extra_cdmx_nonce') ){
			update_post_meta($post_id, 'contenido_extra', $_POST['contenido_extra']);
		}

		if ( isset($_POST['destacado_noticia']) and check_admin_referer(__FILE__, '_extras_noticia_nonce')){
			update_post_meta($post_id, 'destacado_noticia', $_POST['destacado_noticia']);
		}else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, 'destacado_noticia');
		}

		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
