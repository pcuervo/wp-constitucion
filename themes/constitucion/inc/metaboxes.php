<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'meta-box-ubicacion', 'Ubicación', 'show_metabox_ubicacion', 'kioskos');

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

		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
