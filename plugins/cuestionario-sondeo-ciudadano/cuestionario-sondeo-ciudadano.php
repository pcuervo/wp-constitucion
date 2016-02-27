<?php
/**
 * @package CuestionarioSondeoCiudadano
 */
/*
Plugin Name: Cuestionario Sondeo Constitución CDMX
Description: Creación y edición de preguntas y respuestas para el cuestionario del sondeo ciudadano masivo para la Plataforma de Constitución CDMX. 
Version: 1.0
Author: Miguel Cabral
Author URI: http://pcuervo.com
*/ 

if( ! defined( 'SONDEO_CDMX_PLUGIN_URL' ) ){
	define( 'SONDEO_CDMX_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}
if( ! defined( 'SONDEO_CDMX_PLUGIN_DIR' ) ){
	define( 'SONDEO_CDMX_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'SONDEO_CDMX_PLUGIN_FILE' ) ) {
	define( 'SONDEO_CDMX_PLUGIN_FILE', __FILE__ );
}


register_activation_hook( SONDEO_CDMX_PLUGIN_FILE, array( 'Sondeo_CDMX', 'install' ) );
add_action( 'plugins_loaded', create_function( '', 'Sondeo_CDMX::get();' ) );

class Sondeo_CDMX {

	const SONDEO_CDMX_VERSION = '1.0';

	private static $instance = null;

	/**
	 * Get singleton instance of class
	 * @return Sondeo_CDMX instance
	 */
	public static function get() {
		if ( self::$instance == null ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor
	 */
	private function __construct() {
		// Load files
		$this->includes();
		// Initialize plugin
		$this->init();
	}

	/**
	 * Create required database tables.
	 */
	public static function install() {
		$sondeo_cdmx = Sondeo_CDMX::get();
		$sondeo_cdmx->create_questions_table();
		//$sondeo_cdmx->create_closed_answers_table();
		$sondeo_cdmx->create_user_answers_table();
		$sondeo_cdmx->create_delegaciones_table();
		$sondeo_cdmx->create_colonias_table();
		$sondeo_cdmx->create_municipios_table();
		$sondeo_cdmx->create_estados_table();
		$sondeo_cdmx->create_paises_table();
		add_option( 'sondeo_cdmx_db_version', Sondeo_CDMX::SONDEO_CDMX_VERSION );
	}

	/**
	 * Create table "Questions"
	 */
	private function create_questions_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_questions';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				text TEXT NOT NULL,
				question_number INT NOT NULL,
				type VARCHAR(10)  NOT NULL,
				is_dynamic INT NOT NULL,
				is_required INT NOT NULL,
				limit INT,
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_questions_table

	/**
	 * Create table "Answers"
	 */
	private function create_closed_answers_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_closed_answers';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				question_id MEDIUMINT(9),
				answer text NOT NULL,
				UNIQUE KEY id (id),
				FOREIGN KEY (question_id)
					REFERENCES " . $wpdb->prefix . "sondeo_cdmx_questions(id)
					ON DELETE CASCADE
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}

	}// create_questions_table

	private function create_user_answers_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_user_answers';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				question_id MEDIUMINT(9) NOT NULL,
				answer TEXT,
				reference_code varchar(20),
				UNIQUE KEY id (id),
				FOREIGN KEY (question_id)
					REFERENCES " . $wpdb->prefix . "sondeo_cdmx_questions(id)
					ON DELETE CASCADE
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_user_answers_table

	private function create_delegaciones_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_delegaciones';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				delegacion VARCHAR(120),
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_delegaciones_table

	private function create_colonias_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_colonias';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				delegacion_id MEDIUMINT(9) NOT NULL,
				colonia VARCHAR(120),
				UNIQUE KEY id (id),
				FOREIGN KEY (delegacion_id)
					REFERENCES " . $wpdb->prefix . "sondeo_cdmx_delegaciones(id)
					ON DELETE CASCADE
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_colonias_table

	private function create_municipios_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_municipios';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				municipio VARCHAR(120),
				estado VARCHAR(50),
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_municipios_table

	private function create_estados_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_estados';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				estado VARCHAR(120),
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_estados_table

	private function create_paises_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_paises';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				pais VARCHAR(120),
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_paises_table

	/**
	 * Load required files for Wordpress Admin Panel and for Frontend.
	 */
	private function includes() {

		require_once( SONDEO_CDMX_PLUGIN_DIR . 'classes/class-sondeo_cdmx-survey.php' );

		if ( is_admin() ) {
			require_once( SONDEO_CDMX_PLUGIN_DIR . 'classes/class-sondeo_cdmx-settings.php' );
		}

	}

	/**
	 * Initialize class
	 */
	private function init() {
		
		Sondeo_CDMX_Survey::get();
		if ( is_admin() ) {
			// Setup settings
			Sondeo_CDMX_Settings::get();
			return;
		}
	}

}// Sondeo_CDMX
