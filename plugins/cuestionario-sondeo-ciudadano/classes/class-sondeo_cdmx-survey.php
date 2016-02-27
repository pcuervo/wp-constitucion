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
		$this->create_survey_page();

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
	 * Creates a Wordpress Page for for the survey.
	 */
	private function create_survey_page(){
		if( ! get_page_by_path( 'sondeo-masivo' ) ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Sondeo Masivo',
				'post_name'   => 'sondeo-masivo',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
	}

	/**
	 * Load scripts in specific pages
	 */
	public function load_script_is_page(){
		if( is_page( 'sondeo-masivo' )  ){
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
		<div class="[ survey-container ][ padding--header ]">
			<div class="[ fs-form-wrap ]" id="fs-form-wrap">
				<div class="fs-title [ container ][ text-center ]">
					<h1 class="[ margin-top ]">Sondeo Masivo CDMX</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li id="js-donde-vives">
							<label class="fs-field-label fs-anim-upper  [ color-gray ]">¿En dónde vives?</label>
							<select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required">
								<option value="" disabled selected>Selecciona una opción</option>
								<option value="cdmx">CDMX</option>
								<option value="zmvm">ZMVM</option>
								<option value="resto-republica">Resto de la república</option>
								<option value="fuera-mexico">Fuera de México</option>
							</select>
						</li>
						<li id="js-delegaciones-estados-paises"></li>
						<li id="js-colonias-municipios"></li>
						<li id="js-genero" data-input-trigger>
							<label class="fs-field-label fs-anim-upper  [ color-gray ]" for="genero">Género</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q1-1" name="genero" type="radio" value="mujer" /><label for="q1-1" class="radio-conversion">Mujer</label></span>
								<span><input id="q1-2" name="genero" type="radio" value="hombre" /><label for="q1-2" class="radio-conversion">Hombre</label></span>
								<span><input id="q1-3" name="genero" type="radio" value="otro" /><label for="q1-3" class="radio-conversion">Otro</label></span>
							</div>
						</li>
						<li id="js-edad">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="q3">Edad</label>
							<input class="fs-anim-lower" id="q3" name="q3" type="number" placeholder="¿Cuántos años tienes?" required/>
						</li>
						<li id="js-dedicas">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="q4">¿A què te dedicas?</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li id="js-trabajas" data-input-trigger>
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="trabajas">¿Trabajas?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q5-1" name="trabajas" type="radio" value="si" /><label for="q5-1" class="radio-conversion">Si</label></span>
								<span><input id="q5-2" name="trabajas" type="radio" value="no" /><label for="q5-2" class="radio-conversion">No</label></span>
							</div>
						</li>
						<?php foreach ( $questions as $key => $question_with_answers ) : ?>
							<li data-input-trigger>
								<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="q<?php echo $next_question ?>" data-question="<?php echo $question_with_answers['question_id'] ?>"><?php echo $question_with_answers['question'] ?></label>
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