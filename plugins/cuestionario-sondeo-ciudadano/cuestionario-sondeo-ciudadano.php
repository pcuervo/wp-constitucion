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
		$sondeo_cdmx->create_answers_table();
		$sondeo_cdmx->create_user_answers_table();
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
				question text NOT NULL,
				question_type varchar(8),
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_questions_table

	/**
	 * Create table "Answers"
	 */
	private function create_answers_table(){
		global $wpdb;

		$table_name = $wpdb->prefix . 'sondeo_cdmx_answers';
		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
			$charset_collate = $wpdb->get_charset_collate();
			$sql = "CREATE TABLE $table_name (
				id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
				sondeo_cdmx_question_id MEDIUMINT(9),
				answer text NOT NULL,
				UNIQUE KEY id (id),
				FOREIGN KEY (sondeo_cdmx_question_id)
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
				sondeo_cdmx_answer_id MEDIUMINT(9),
				reference_code varchar(20),
				UNIQUE KEY id (id),
				FOREIGN KEY (sondeo_cdmx_answer_id)
					REFERENCES " . $wpdb->prefix . "sondeo_cdmx_answers(id)
					ON DELETE CASCADE
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
		}
	}// create_user_answers_table

	/**
	 * Load required files for Wordpress Admin Panel and for Frontend.
	 */
	private function includes() {

		
		if ( is_admin() ) {
			require_once( SONDEO_CDMX_PLUGIN_DIR . 'classes/class-sondeo_cdmx-survey.php' );
			require_once( SONDEO_CDMX_PLUGIN_DIR . 'classes/class-sondeo_cdmx-settings.php' );
		}
	}

	/**
	 * Initialize class
	 */
	private function init() {
		
		if ( is_admin() ) {
			// Setup settings
			Sondeo_CDMX_Settings::get();
			return;
		}
	}

}// Sondeo_CDMX
