<?php

// RENAME THE DEFAULT POST TYPE

function change_post_menu_label() {
    global $menu, $submenu;

    $menu[5][0] = 'Noticias';
    $submenu['edit.php'][5][0] = 'Noticias';
    $submenu['edit.php'][10][0] = 'Nueva Noticia';
    $submenu['edit.php'][16][0] = 'Noticias Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );


// DEFINIR LOS PATHS A LOS DIRECTORIOS DE JAVASCRIPT Y CSS ///////////////////////////



	define( 'JSPATH', get_template_directory_uri() . '/js/' );

	define( 'CSSPATH', get_template_directory_uri() . '/css/' );

	define( 'THEMEPATH', get_template_directory_uri() . '/' );

	define( 'SITEURL', site_url('/') );



// FRONT END SCRIPTS AND STYLES //////////////////////////////////////////////////////



	add_action( 'wp_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );
		wp_enqueue_script( 'chart', JSPATH.'Chart.js', array('jquery'), '1.0', false );

		// localize scripts
		wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );
		wp_localize_script( 'functions', 'isPageParticipa', (string)is_page( 'participa' ) );
		wp_localize_script( 'functions', 'isPageSondeo', (string)is_page( 'sondeo-masivo' ) );
		wp_localize_script( 'functions', 'isPageCDMX', (string)is_page( 'cdmx' ) );
		wp_localize_script( 'functions', 'isHome', (string)is_page( 'home' ) );

		// styles
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

	});



// ADMIN SCRIPTS AND STYLES //////////////////////////////////////////////////////////



	add_action( 'admin_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'api-google', 'http://maps.google.com/maps/api/js?sensor=false&libraries=places&language=en-AU', array('jquery'), '1.0', true );
		wp_enqueue_script( 'admin-js', JSPATH.'admin.js', array('api-google'), '1.0', true );

		// localize scripts
		wp_localize_script( 'admin-js', 'ajax_url', admin_url('admin-ajax.php') );

		// styles
		wp_enqueue_style( 'admin-css', CSSPATH.'admin.css' );

	});



// FRONT PAGE DISPLAYS A STATIC PAGE /////////////////////////////////////////////////



	add_action( 'after_setup_theme', function () {

		$frontPage = get_page_by_path('home', OBJECT);
		$blogPage  = get_page_by_path('noticias', OBJECT);

		if ( $frontPage AND $blogPage ){
			update_option('show_on_front', 'page');
			update_option('page_on_front', $frontPage->ID);
			update_option('page_for_posts', $blogPage->ID);
		}
	});



// REMOVE ADMIN BAR FOR NON ADMINS ///////////////////////////////////////////////////



	add_filter( 'show_admin_bar', function($content){
		return ( current_user_can('administrator') ) ? $content : false;
	});



// CAMBIAR EL CONTENIDO DEL FOOTER EN EL DASHBOARD ///////////////////////////////////



	add_filter( 'admin_footer_text', function() {
		echo 'Creado por <a href="http://pcuervo.com">Pequeño Cuervo</a>. ';
		echo 'Powered by <a href="http://www.wordpress.org">WordPress</a>';
	});



// POST THUMBNAILS SUPPORT ///////////////////////////////////////////////////////////



	if ( function_exists('add_theme_support') ){
		add_theme_support('post-thumbnails');
	}

	if ( function_exists('add_image_size') ){

		// add_image_size( 'size_name', 200, 200, true );

		// cambiar el tamaño del thumbnail
		/*
		update_option( 'thumbnail_size_h', 100 );
		update_option( 'thumbnail_size_w', 200 );
		update_option( 'thumbnail_crop', false );
		*/
	}



// POST TYPES, METABOXES, TAXONOMIES AND CUSTOM PAGES ////////////////////////////////



	require_once('inc/post-types.php');


	require_once('inc/metaboxes.php');


	require_once('inc/taxonomies.php');


	require_once('inc/pages.php');



// MODIFICAR EL MAIN QUERY ///////////////////////////////////////////////////////////



	add_action( 'pre_get_posts', function($query){

		if ( $query->is_main_query() and ! is_admin() ) {

		}
		return $query;

	});



// THE EXECRPT FORMAT AND LENGTH /////////////////////////////////////////////////////



	/*add_filter('excerpt_length', function($length){
		return 20;
	});*/


	/*add_filter('excerpt_more', function(){
		return ' &raquo;';
	});*/



// REMOVE ACCENTS AND THE LETTER Ñ FROM FILE NAMES ///////////////////////////////////



	add_filter( 'sanitize_file_name', function ($filename) {
		$filename = str_replace('ñ', 'n', $filename);
		return remove_accents($filename);
	});



// HELPER METHODS AND FUNCTIONS //////////////////////////////////////////////////////


	/**
	 * Print the <title> tag based on what is being viewed.
	 * @return string
	 */
	function print_title(){
		global $page, $paged;

		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		// Add a page number if necessary
		if ( $paged >= 2 || $page >= 2 ){
			echo ' | ' . sprintf( __( 'Página %s' ), max( $paged, $page ) );
		}
	}


function insert_delegaciones_colonias(){
	$filename = 'delegaciones-y-colonias.csv';
	if ( ( $gestor = fopen( THEMEPATH . $filename, 'r' ) ) !== FALSE ) {
		$current_delegacion = '';
	    while ( ( $datos = fgetcsv( $gestor, 1700, ',' ) ) !== FALSE ) {
	    	if( $datos[0] == '' ) continue;
        	if( $current_delegacion !=  $datos[0] ){
        		$current_delegacion = $datos[0];
        		$delegacion_id = insert_delegacion( $current_delegacion );
        	}
	        insert_colonia( $delegacion_id, $datos[1] );
	    }
	    fclose( $gestor );
	}
}

function insert_delegacion( $delegacion ){
	global $wpdb;

	$delegacion_data = array(
		'delegacion'	=> $delegacion
	);
	$wpdb->insert(
		$wpdb->prefix . 'sondeo_cdmx_delegaciones',
		$delegacion_data,
		array( '%s' )
	);
	return $wpdb->insert_id;
}

function insert_colonia( $delegacion_id, $colonia ){
	global $wpdb;

	$colonia_data = array(
		'delegacion_id'	=> $delegacion_id,
		'colonia'		=> $colonia
	);
	$wpdb->insert(
		$wpdb->prefix . 'sondeo_cdmx_colonias',
		$colonia_data,
		array( '%d', '%s' )
	);
	return $wpdb->insert_id;
}

function insert_municipios(){
	$filename = 'municipios-edomex-hidalgo.csv';
	if ( ( $gestor = fopen( THEMEPATH . $filename, 'r' ) ) !== FALSE ) {
		$current_estado = '';
	    while ( ( $datos = fgetcsv( $gestor, 70, ',' ) ) !== FALSE ) {
	    	if( $datos[0] == '' ) continue;
        	if( $current_estado !=  $datos[0] ){
        		$current_estado = $datos[0];
        	}
	        insert_municipio( $current_estado, $datos[1] );
	    }
	    fclose( $gestor );
	}
}

function insert_municipio( $estado, $municipio ){
	global $wpdb;

	$municipio_data = array(
		'estado'	=> $estado,
		'municipio'	=> $municipio
	);
	$wpdb->insert(
		$wpdb->prefix . 'sondeo_cdmx_municipios',
		$municipio_data,
		array( '%s', '%s' )
	);
	return $wpdb->insert_id;
}

function insert_estados(){
	$filename = 'estados.csv';
	if ( ( $gestor = fopen( THEMEPATH . $filename, 'r' ) ) !== FALSE ) {
		$current_estado = '';
	    while ( ( $datos = fgetcsv( $gestor, 32, ',' ) ) !== FALSE ) {
	    	if( $datos[0] == '' ) continue;
        	insert_estado( $datos[0] );
	        
	    }
	    fclose( $gestor );
	}
}

function insert_estado( $estado ){
	global $wpdb;

	$municipio_data = array(
		'estado'	=> $estado
	);
	$wpdb->insert(
		$wpdb->prefix . 'sondeo_cdmx_estados',
		$municipio_data,
		array( '%s' )
	);
	return $wpdb->insert_id;
}

function insert_paises(){
	$filename = 'paises.csv';
	if ( ( $gestor = fopen( THEMEPATH . $filename, 'r' ) ) !== FALSE ) {
		$current_pais = '';
	    while ( ( $datos = fgetcsv( $gestor, 32, ',' ) ) !== FALSE ) {
	    	if( $datos[0] == '' ) continue;
        	insert_pais( $datos[0] );
	        
	    }
	    fclose( $gestor );
	}
}

function insert_pais( $pais ){
	global $wpdb;

	$municipio_data = array(
		'pais'	=> $pais
	);
	$wpdb->insert(
		$wpdb->prefix . 'sondeo_cdmx_paises',
		$municipio_data,
		array( '%s' )
	);
	return $wpdb->insert_id;
}

function insert_preguntas(){
	$filename = 'preguntas.csv';
	$text = 0;
	$question_number = 1;
	$type = 2;
	$is_dynamic = 3;
	$is_required = 4;
	$limit = 5;
	//ini_set('auto_detect_line_endings',TRUE);
	ini_set('auto_detect_line_endings',FALSE);
	if ( ( $gestor = fopen( THEMEPATH . $filename, 'r' ) ) !== FALSE ) {

	    while ( ( $datos = fgetcsv( $gestor, 200, ',' ) ) !== FALSE ) {
	    	echo '<pre>';
	    	var_dump( $datos );
	    	echo '</pre>';
	    	if( $datos[0] == '' ) continue;

        	insert_pregunta( $datos[$text], $datos[$question_number], $datos[$type], $datos[$is_dynamic], $datos[$is_required], $datos[$limit] );
	    }
	    fclose( $gestor );
	}
	//ini_set('auto_detect_line_endings',FALSE);
}

function insert_pregunta( $text, $number, $type, $is_dynamic, $is_required, $limit ){
	global $wpdb;

	$pregunta_data = array(
		'text'				=> $text,
		'question_number'	=> $number,
		'type'				=> $type,
		'is_dynamic'		=> $is_dynamic,
		'is_required'		=> $is_required,
		'limit'				=> $limit,
	);
	$wpdb->insert(
		$wpdb->prefix . 'sondeo_cdmx_questions',
		$pregunta_data,
		array( '%s', '%d', '%s', '%d', '%d', '%d' )
	);
	return $wpdb->insert_id;
}

	/**
	 * Regresa la url del attachment especificado
	 * @param  int     $post_id
	 * @param  string  $size
	 * @return string  url de la imagen
	 */
	function attachment_image_url($post_id, $size){
		$image_id   = get_post_thumbnail_id($post_id);
		$image_data = wp_get_attachment_image_src($image_id, $size, true);
		return isset($image_data[0]) ? $image_data[0] : '';
	}


