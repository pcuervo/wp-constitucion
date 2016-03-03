<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){
		global $post;

		add_meta_box( 'meta-box-ubicacion', 'Ubicación', 'show_metabox_ubicacion', 'kioskos');
		add_meta_box( 'meta-box-extras_evento', 'Extras evento', 'show_metabox_extras_evento', 'eventos', 'side', 'high');
		add_meta_box( 'meta-box-extras_evento_line', 'Extras evento', 'show_metabox_extras_evento', 'linea-del-tiempo', 'side', 'high');
		add_meta_box( 'meta-box-video_voces', 'Insertar video', 'show_metabox_video_voces', 'voces-ciudadanas');
		add_meta_box( 'meta-box-extras_noticias', 'Extras', 'show_metabox_extras_noticias', 'post', 'side', 'high');

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
