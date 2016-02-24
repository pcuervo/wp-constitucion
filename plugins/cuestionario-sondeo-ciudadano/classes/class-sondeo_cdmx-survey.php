<?php

class Sondeo_CDMX_Survey {

	private static $instance = null;

	/**
	 * Get singleton instance of class
	 * @return null or Sondeo_CDMX instance
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
		$this->init();
	}

	/**
	 * Initialize class
	 */
	private function init() {
		$this->hooks();

		if( ! is_admin() ){
			add_shortcode( 'show-survey', array( $this, 'display_survey' ) );
		}
	}

	/**
	 * Hooks
	 */
	private function hooks() {
		add_action( 'template_redirect', array( $this, 'load_script_is_page' ) );
	}

	/**
	 * Load scripts in specific pages
	 */
	public function load_script_is_page(){
		if( is_page( 'participa' )  ){
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_and_localize_scripts' ) );
		}
	}

	/**
	 * Add javascript and style files
	 */
	public function enqueue_and_localize_scripts(){
		// css
		//wp_enqueue_style( 'normalize', SONDEO_CDMX_PLUGIN_URL . 'inc/css/normalize.css' );
		wp_enqueue_style( 'demo', SONDEO_CDMX_PLUGIN_URL . 'inc/css/demo.css' );
		wp_enqueue_style( 'component', SONDEO_CDMX_PLUGIN_URL . 'inc/css/component.css' );
		wp_enqueue_style( 'cs-select', SONDEO_CDMX_PLUGIN_URL . 'inc/css/cs-select.css' );
		wp_enqueue_style( 'cs-skin-boxes', SONDEO_CDMX_PLUGIN_URL . 'inc/css/cs-skin-boxes.css' );
		// js
		wp_enqueue_script( 'normalize', SONDEO_CDMX_PLUGIN_URL . 'inc/js/modernizr.custom.js', '', '1.0', false );
		wp_enqueue_script( 'classie', SONDEO_CDMX_PLUGIN_URL . 'inc/js/classie.js', '', '1.0', true );
		wp_enqueue_script( 'select_fx', SONDEO_CDMX_PLUGIN_URL . 'inc/js/selectFx.js', '', '1.0', true );
		wp_enqueue_script( 'fullscreen_form', SONDEO_CDMX_PLUGIN_URL . 'inc/js/fullscreenForm.js', '', '1.0', true );
		wp_enqueue_script( 'sondeo_cdmx_functions', SONDEO_CDMX_PLUGIN_URL . 'inc/js/functions.js', array('jquery'), '1.0', true );
	}

	public function display_survey(){
		$questions = $this->get_questions();
		$next_question = 3;
		?>
		<div class="[ survey-container ]">
			<div class="[ fs-form-wrap ][ padding--top--large ]" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Sondeo CDMX</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1" data-info="Este campo es opcional. Recuerda que tu participación puede ser anónima.">¿Cómo te llamas?</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Juan Pérez"/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper">¿En qué delegación vives?</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower" required="required">
								<option value="" disabled selected>Selecciona tu delgación</option>
								<option value="alvaro-obregon">Álvaro Obregón</option>
								<option value="azcaptozalco">Azcaptozalco</option>
								<option value="benito-juárez">Benito Juárez</option>
								<option value="coyoacan">Coyoacán</option>
								<option value="cuajimalpa-de-morelos">Cuajimalpa de Morelos</option>
								<option value="cuauhtémoc">Cuauhtémoc</option>
								<option value="gustavo-a-madero">Gustavo A. Madero</option>
								<option value="iztacalco">Iztacalco</option>
								<option value="iztapalapa">Iztapalapa</option>
								<option value="magdalena-contreras">Magdalena Contreras</option>
								<option value="miguel-hidalgo">Miguel Hidalgo</option>
								<option value="milpa-alta" >Milpa Alta</option>
								<option value="tlahuac" >Tláhuac</option>
								<option value="tlalpan" >Tlalpan</option>
								<option value="venustiano-carranza" >Venustiano Carranza</option>
								<option value="xochimilco" >Xochimilco</option>
							</select>
						</li>
						<?php foreach ( $questions as $key => $question_with_answers ) : ?>
							<li data-input-trigger>
								<label class="fs-field-label fs-anim-upper" for="q<?php echo $next_question ?>" data-question=""><?php echo $question_with_answers['question'] ?></label>
								<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
									<?php $current_answer = 1; ?>
									<?php foreach ( $question_with_answers['answers'] as $key => $answer ) : ?>
										<span><input id="q<?php echo $next_question ?>-<?php echo $current_answer ?>" name="q<?php echo $next_question ?>" type="radio" value="<?php echo $answer['id'] ?>" /><label for="q<?php echo $next_question ?>-<?php echo $current_answer ?>" class="radio-conversion"><?php echo $answer['answer'] ?></label></span>
									<?php $current_answer += 1; endforeach; ?>
								</div>
							</li>
						<?php $next_question += 1; endforeach; ?>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Enviar respuestas</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			<!-- Related demos -->
			<div class="related">
			</div>
		</div>
		<?php
	}

	public function add_question( $question, $question_type, $answers ){
		global $wpdb;

		$question_data = array(
			'question'		=> $question,
			'question_type' => $question_type
		);
		$question_inserted = $wpdb->insert(
			$wpdb->prefix . 'sondeo_cdmx_questions',
			$question_data,
			array( '%s', '%s' )
		);
		if( $question_inserted ){
			$question_id = $wpdb->insert_id;
			foreach ( $answers as $answer ) {
				$this->add_answer( $question_id, $answer );
			}
			return 1;
		}
		return 0;
	}

	public function add_answer( $question_id, $answer ){
		global $wpdb;

		$answer_data = array(
			'sondeo_cdmx_question_id'	=> $question_id,
			'answer' 					=> $answer
		);
		$answer_inserted = $wpdb->insert(
			$wpdb->prefix . 'sondeo_cdmx_answers',
			$answer_data,
			array( '%d', '%s' )
		);
		if( $answer_inserted ){
			return 1;
		}
		return 0;
	}

	public function get_questions( $format = 'array' ){
		global $wpdb;
		$questions = array();
		$questions_results = $wpdb->get_results('
			SELECT q.id as question_id, question, question_type, a.id AS answer_id, answer FROM ' .
			$wpdb->prefix . 'sondeo_cdmx_questions q
			INNER JOIN ' . $wpdb->prefix . 'sondeo_cdmx_answers a
			ON q.id = a.sondeo_cdmx_question_id'
		);
		$current_question_id = -1;
		foreach ( $questions_results as $key => $result ) {
			if( $current_question_id != $result->question_id ){
				$current_question_id = $result->question_id;
				$questions[$current_question_id] = array(
					'id'			=> $result->question_id,
					'question'		=> $result->question,
					'question_type' => $result->question_type,
					'answers'		=> array(),
					);
			}
			$answer_arr = array(
				'id'		=> $result->answer_id,
				'answer' 	=> $result->answer,
			);
			array_push( $questions[$current_question_id]['answers'], $answer_arr );
		}

		if( 'array' == $format ){
			return $questions;
		}
		json_encode( $questions );
	}


}// Sondeo_CDMX_Survey