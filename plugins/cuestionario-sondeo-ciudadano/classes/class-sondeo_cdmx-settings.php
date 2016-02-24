<?php

class Sondeo_CDMX_Settings {

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
		$this->hooks();
	}

	/**
	 * Hooks
	 */
	private function hooks() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_and_localize_scripts' ) );
		add_action( 'admin_menu', array( $this, 'add_menu_pages' ) );
	}

	/**
	 * Add menu pages
	 */
	public function add_menu_pages() {
		add_menu_page( 'Editar cuestionario', 'Cuestionario Sondeo CDMX', 'manage_options', 'menu_sondeo_cdmx', array( $this, 'add_sondeo_cdmx_page' ) );
	}

	/**
	 * Add javascript and style files
	 */
	function enqueue_and_localize_scripts(){
		wp_enqueue_script( 'plugins', SONDEO_CDMX_PLUGIN_URL . 'inc/js/plugins.js', array('jquery') );
		wp_enqueue_script( 'sondeo_cdmx_admin_functions', SONDEO_CDMX_PLUGIN_URL . 'inc/js/admin-functions.js', array('jquery') );
		wp_localize_script( 'sondeo_cdmx_admin_functions', 'ajax_url', admin_url('admin-ajax.php') );
	}

	/**
	 * The main screen
	 */
	public function add_sondeo_cdmx_page() {
		?>

		<div class="[ wrap ]">
			<h1>Cuestionario Sondeo CDMX</h1>
			<p>Aquí podrás dar de alta preguntas para el sondeo ciudadano masivo de la Plataforma Constitución CDMX. </p>
			<hr>
			<?php 
				if( ! isset( $_POST['new_question'] ) ) {
					$this->display_question_form();
				} else if( isset( $_POST['new_question'] ) ){
					$this->display_answers_form();
				}
			
				if( isset( $_POST['current_question'] ) ) {
					$question = $_POST['current_question'];
					$question_type = $_POST['current_question_type'];
					$answers = $_POST['answers'];
					$survey = Sondeo_CDMX_Survey::get();

					$survey->add_question( $question, $question_type, $answers );
				}
			?>
			<hr>
			<?php 
				$this->display_existing_questions(); 
			?>
		</div>
		<?php
	}// add_sondeo_cdmx_page

	public function display_question_form(){
		?>
		<form action="" method="POST" data-parsley-question="">
			<table class="[ form-table ][ questions ]">
				<tbody>
					<tr>
						<th scope="row">
							<label for="new-question">Pregunta</label>
						</th>
						<td>
							<input type="text" id="new-question" name="new_question" class="regular-text" required data-parsley-error-message="¡La pregunta no puede estar vacía!">
						</td>
						<td>
							<fieldset>
								<label title="checkbox">
									<input type="radio" name="question_type" value="checkbox" checked="checked">
									Varias respuestas válidas (checkboxes)
								</label> 
								<label title="single_answer">
									<input type="radio" name="question_type" value="radio">
									Una respuesta válida (botones de radio)
								</label>
							</fieldset>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="submit" name="submit" id="submit" class="[ button button-primary ]" value="Agregar pregunta">
		</form>
		<?php 
	}// display_question_form

	public function display_answers_form(){
		?>
		<h2>Pregunta actual: <?php echo $_POST['new_question']; ?></h2>
		<form action="" method="POST" data-parsley-answer="">
			<table class="[ form-table ][ answers ]">
				<tbody>
					<tr class="[ answer-row ]">
						<th scope="row">
							<label for="new-answer">Respuesta nueva</label>
						</th>
						<td>
							<input type="text" class="[ regular-text ]" id="new-answer" name="new_answer" required data-parsley-error-message="¡La respuesta no puede estar vacía!">
						</td>
						<td>
							<a href="#" class="[ button button-primary ][ js-add-answer-row ]">Agregar respuesta</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<div id="added-answers">
			<h2>Respuestas agregadas</h2>
			<p><small>Debes agregar al menos 2 respuestas para poder guardar tu pregunta.</small></p>
			<form action="" method="POST">
				<ol class="[ current-answers ]"></ol>
				<input type="hidden" name="current_question" value="<?php echo $_POST['new_question']; ?>">
				<input type="hidden" name="current_question_type" value="<?php echo $_POST['question_type']; ?>">
				<input type="submit" name="submit" id="submit" class="[ button button-primary ][ js-save-question ]" value="Guardar pregunta">
			</form>
		</div>
		<?php
	}// display_answers_form

	public function display_existing_questions(){
		$survey = Sondeo_CDMX_Survey::get();
		$existing_questions = $survey->get_questions();
		if( ! empty( $existing_questions ) ) : ?>
			<h2>Preguntas existentes:</h2>
			<table class="[ form-table ][ existing-questions ]">
				<thead>
					<tr>
						<th>Pregunta</th>
						<th>Tipo de pregunta</th>
						<th>Respuestas</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $existing_questions as $key => $question ) : ?>
						<tr>
							<td><?php echo $question['question'] ?></td>
							<td><?php echo $question['question_type'] ?></td>
							<td>
								<?php foreach ( $question['answers'] as $key => $answer ) : ?>
									<p><?php echo $key+1 . '. ' . $answer ?></p>
								<?php endforeach; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
		<?php 
	}// display_existing_questions

}