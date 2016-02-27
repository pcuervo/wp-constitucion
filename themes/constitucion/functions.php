<?php global $result;

if(isset($_POST['accion']) AND $_POST['accion'] == 'guarda-formulario') storeForm($_POST);

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
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_script( 'api-google', 'http://maps.google.com/maps/api/js?sensor=false&libraries=places&language=en-AU', array('jquery'), '1.0', true );
		wp_enqueue_script( 'admin-js', JSPATH.'admin.js', array('api-google'), '1.0', true );

		// localize scripts
		wp_localize_script( 'admin-js', 'ajax_url', admin_url('admin-ajax.php') );

		// styles
		wp_enqueue_style( 'admin-css', CSSPATH.'admin.css' );
		wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');

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


	/**	
	 * GET DATE TRANSFORM
	 */
	function getDateTransform($fecha){
		$dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');
		$dia_name = $dias[date('N', strtotime($fecha)) - 1];

		$fecha = explode('-', $fecha);

		$mes = array('01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' =>'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre');

		return array($fecha[2], $mes[$fecha[1]], $fecha[0], $dia_name, $fecha[1]);
	}

	/**
	 * STORE FORM
	 */
	function storeForm($data){
		global $result;

		$content = '<p><strong>Teléfono: </strong>'.$data['telefono_cdmx'].'<p>';
		$content .= '<p><strong>Correo: </strong>'.$data['email_cdmx'].'<p>';
		$content .= '<p><strong>Mensaje: </strong>'.$data['mensaje_cdmx'].'<p>';

		$contact_new = array(
		  'post_title'    => $data['nombre_cdmx'],
		  'post_content'  => $content,
		  'post_status'   => 'publish',
		  'post_type'     => 'formulario-cdmx',
		  'post_author'   => 1,
		);

		wp_insert_post( $contact_new );

		$result['success'] = 'Se envío el mensaje con exito';

		return true;
	}


