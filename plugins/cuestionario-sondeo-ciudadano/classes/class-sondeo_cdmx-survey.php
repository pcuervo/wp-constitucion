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
		wp_localize_script( 'functions', 'allDelegaciones', $this->get_delegaciones() );
		wp_localize_script( 'functions', 'allColonias', $this->get_colonias() );
		wp_localize_script( 'functions', 'allMunicipios', $this->get_municipios() );
		wp_localize_script( 'functions', 'allEstados', $this->get_estados() );
		wp_localize_script( 'functions', 'allPaises', $this->get_paises() );
	}

	public function display_survey(){
		//$questions = $this->get_questions();
		$next_question = 3;
		?>
		<div class="[ survey-container ][ padding--header ]">
			<div class="[ fs-form-wrap ]" id="fs-form-wrap">
				<div class="fs-title [ container ][ text-center ]">
					<h1 class="[ margin-top ]">Sondeo Masivo CDMX</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">	

						<li id="js-donde-vives" data-question="1">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">¿En dónde vives?</label>
							<select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required">
								<option value="" disabled selected>Selecciona una opción</option>
								<option value="cdmx">CDMX</option>
								<option value="zmvm">ZMVM</option>
								<option value="resto-republica">Resto de la república</option>
								<option value="fuera-mexico">Fuera de México</option>
							</select>
						</li>
						<li id="js-grandes-retos" data-question="26">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="grandes-retos">Si pensaras en los grandes retos de esta Ciudad, ¿cuáles son los primeros cuatro que te llegan a la mente?</label>
<!-- 							<a href="#">Derechos Humanos</a>
							<a href="#">Transporte y movilidad</a>
							<a href="#">Empleo digno y productividad</a>
							<a href="#">Pobreza y desigualdad económica.</a>
							<a href="#">Educación de calidad permanente. </a>
							<a href="#">Salud pública y bienestar</a>
							<a href="#">Vivienda y uso de suelo</a>
							<a href="#">Coordinación Metropolitana</a>
							<a href="#">Transparencia y Rendición de Cuentas</a>
							<a href="#">Agua</a>
							<a href="#">Sustentabilidad del Medio Ambiente</a>
							<a href="#">Servicios Urbanos</a>
							<a href="#">Desarrollo barrial participativo</a>
							<a href="#">Finanzas públicas</a>
							<a href="#">Legalidad y Justicia</a>
							<a href="#">Igualdad de género</a>
							<a href="#">Infraestructura</a>
							<a href="#">Otro</a> -->
							<input class="fs-anim-lower" id="q9" name="grandes-retos" type="text" required/>
						</li>
						<li id="js-delegaciones-estados-paises"></li>
						<li id="js-colonias" data-question="3"></li>
						<li id="js-genero" data-input-trigger data-question="7">
							<label class="fs-field-label fs-anim-upper  [ color-gray ]" for="genero">Género</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q1-1" name="genero" type="radio" value="mujer" /><label for="q1-1" class="radio-mujer">Mujer</label></span>
								<span><input id="q1-2" name="genero" type="radio" value="hombre" /><label for="q1-2" class="radio-hombre">Hombre</label></span>
								<span><input id="q1-3" name="genero" type="radio" value="otro" /><label for="q1-3" class="radio-otro">Otro</label></span>
							</div>
						</li>
						<li id="js-edad" data-question="8">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="q3">Edad</label>
							<input class="fs-anim-lower" id="q3" name="q3" type="number" placeholder="¿Cuántos años tienes?" required/>
						</li>
						<li id="js-dedicas" data-question="9">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="q4">¿A qué te dedicas?</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder=""></textarea>
						</li>
						<li id="js-trabajas" data-input-trigger data-question="10">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="trabajas">¿Trabajas?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q5-1" name="trabajas" type="radio" value="si" /><label for="q5-1" class="radio-si">Si</label></span>
								<span><input id="q5-2" name="trabajas" type="radio" value="no" /><label for="q5-2" class="radio-no">No</label></span>
							</div>
						</li>
						<li id="js-estudias" data-input-trigger data-question="17">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="estudias">¿Estudias?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q6-1" name="estudias" type="radio" value="si" /><label for="q6-1" class="radio-si">Si</label></span>
								<span><input id="q6-2" name="estudias" type="radio" value="no" /><label for="q6-2" class="radio-no">No</label></span>
							</div>
						</li>
						<li id="js-naciste-cdmx" data-input-trigger data-question="24">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="naciste-cdmx">Naciste en la CDMX?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q7-1" name="naciste-cdmx" type="radio" value="si" /><label for="q7-1" class="radio-si">Si</label></span>
								<span><input id="q7-2" name="naciste-cdmx" type="radio" value="no" /><label for="q7-2" class="radio-no">No</label></span>
							</div>
						</li>
						<li id="js-piensas-cdmx" data-question="25">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="piensas-cdmx" data-info="Las palabras deben ir separadas por comas.">¿Cuáles son las tres primeras palabras que te llegan a la mente cuando piensas en la Ciudad de México?</label>
							<input class="fs-anim-lower" id="q8" name="piensas-cdmx" type="text" placeholder="Ej. palabra1, palabra2, palabra3" required/>
						</li>
						<li id="js-grandes-retos" data-question="26">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="grandes-retos">Si pensaras en los grandes retos de esta Ciudad, ¿cuáles son los primeros cuatro que te llegan a la mente?</label>
							<a href="#">Derechos Humanos</a>
							<a href="#">Transporte y movilidad</a>
							<a href="#">Empleo digno y productividad</a>
							<a href="#">Pobreza y desigualdad económica.</a>
							<a href="#">Educación de calidad permanente. </a>
							<a href="#">Salud pública y bienestar</a>
							<a href="#">Vivienda y uso de suelo</a>
							<a href="#">Coordinación Metropolitana</a>
							<a href="#">Transparencia y Rendición de Cuentas</a>
							<a href="#">Agua</a>
							<a href="#">Sustentabilidad del Medio Ambiente</a>
							<a href="#">Servicios Urbanos</a>
							<a href="#">Desarrollo barrial participativo</a>
							<a href="#">Finanzas públicas</a>
							<a href="#">Legalidad y Justicia</a>
							<a href="#">Igualdad de género</a>
							<a href="#">Infraestructura</a>
							<a href="#">Otro</a>
							<input class="fs-anim-lower" id="q9" name="grandes-retos" type="text" style="display: none;" required/>
						</li>
						<li id="js-como-imaginas" data-question="28">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="como-imaginas" data-info="Máximo 140 caracteres.">¿Cómo te imaginas la CDMX ideal, en 20 años?</label>
							<textarea class="fs-anim-lower" id="q10" name="como-imaginas" placeholder="" maxlength="140"></textarea>
						</li>
						<li id="js-obstaculos-principales" data-question="29">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="obstaculos-principales" data-info="Las palabras deben ir separadas por comas.">Pensando en esta visión, ¿cuáles pensarías que son los tres obstáculos principales para que se haga realidad?</label>
							<input class="fs-anim-lower" id="q11" name="obstaculos-principales" type="text" placeholder="Ej. palabra1, palabra2, palabra3" required/>
						</li>
						<li id="js-vision-realidad" data-question="30">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="vision-realidad" data-info="Máximo 140 caracteres.">Imagina que es el año 2036. Tu visión se hizo realidad ¿Qué tuvo que hacer el gobierno para que esto sucediera?</label>
							<textarea class="fs-anim-lower" id="q12" name="vision-realidad" placeholder="" maxlength="140"></textarea>
						</li>
						<li id="js-tuviste-hacer" data-question="31">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="tuviste-hacer" data-info="Máximo 140 caracteres.">¿Y qué tuviste que hacer tú?</label>
							<textarea class="fs-anim-lower" id="q13" name="tuviste-hacer" placeholder="" maxlength="140"></textarea>
						</li>
						<li id="js-cosas-valiosas" data-question="32">
							<label class="[ fs-field-label fs-anim-upper ][ color-gray ]" for="cosas-valiosas" data-info="Las palabras deben ir separadas por comas.">Si pensaras en las tres cosas más valiosas de la CDMX que deben ser protegidas o potenciadas ¿Qué palabras te vienen a la mente?</label>
							<input class="fs-anim-lower" id="q14" name="cosas-valiosas" type="text" placeholder="Ej. palabra1, palabra2, palabra3" required/>
						</li>
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

	public function get_delegaciones(){
		global $wpdb;
		$delegaciones = array();
		$delegaciones_results = $wpdb->get_results('
			SELECT * FROM ' .
			$wpdb->prefix . 'sondeo_cdmx_delegaciones'
		);

		foreach ( $delegaciones_results as $result ) {
			$delegaciones[$result->id] =  array(
				'delegacion'	=> $result->delegacion
			);
		}

		return $delegaciones;
	}

	public function get_colonias(){
		global $wpdb;
		$colonias = array();
		$colonias_results = $wpdb->get_results('
			SELECT col.id AS colonia_id, delegacion_id, colonia, delegacion FROM ' . $wpdb->prefix . 'sondeo_cdmx_colonias col 
			INNER JOIN ' . $wpdb->prefix . 'sondeo_cdmx_delegaciones del ON col.delegacion_id = del.id'
		);

		$current_delegacion = '';
		foreach ( $colonias_results as $result ) {
			if( $current_delegacion != $result->delegacion ){
				$current_delegacion = $result->delegacion;
				$colonias[$current_delegacion] = array();
			}
			array_push( $colonias[$current_delegacion], $result->colonia );
		}

		return $colonias;
	}

	public function get_municipios(){
		global $wpdb;
		$municipios = array();
		$municipios_results = $wpdb->get_results('
			SELECT id, municipio FROM ' .
			$wpdb->prefix . 'sondeo_cdmx_municipios ORDER BY municipio ASC'
		);

		foreach ( $municipios_results as $result ) {
			$municipios[$result->id] =  array(
				'municipio'	=> $result->municipio
			);
		}

		return $municipios;
	}

	public function get_estados(){
		global $wpdb;
		$estados = array();
		$estados_results = $wpdb->get_results('
			SELECT id, estado FROM ' .
			$wpdb->prefix . 'sondeo_cdmx_estados ORDER BY estado ASC'
		);

		foreach ( $estados_results as $result ) {
			$estados[$result->id] =  array(
				'estado'	=> $result->estado
			);
		}

		return $estados;
	}

	public function get_paises(){
		global $wpdb;
		$paises = array();
		$paises_results = $wpdb->get_results('
			SELECT id, pais FROM ' .
			$wpdb->prefix . 'sondeo_cdmx_paises ORDER BY pais ASC'
		);

		foreach ( $paises_results as $result ) {
			$paises[$result->id] =  array(
				'pais'	=> $result->pais
			);
		}

		return $paises;
	}


}// Sondeo_CDMX_Survey