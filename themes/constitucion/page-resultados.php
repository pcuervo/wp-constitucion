<?php get_header(); ?>

<?php 
	$survey = Sondeo_CDMX_Survey::get();

	// pregunta #8
	$palabras_que_piensas = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_PIENSAS_CDMX );
	echo '<pre>';
	var_dump( $palabras_que_piensas );
	echo '</pre>';

	// pregunta #9
	$palabras_grandes_retos = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_GRANDES_RETOS );
	echo '<pre>';
	var_dump( $palabras_grandes_retos );
	echo '</pre>';

	// pregunta #10
	$num_respuestas = 3;
	$ultimas_respuestas = $survey->get_latest_answers( $num_respuestas, Sondeo_CDMX_Survey::Q_CDMX_IDEAL );
	echo '<pre>';
	var_dump( $ultimas_respuestas );
	echo '</pre>';

	// pregunta #11
	$palabras_obstaculos_principales = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_OBSTACULOS_PRINCIPALES );
	echo '<pre>';
	var_dump( $palabras_obstaculos_principales );
	echo '</pre>';

	// pregunta #14
	$palabras_cosas_valiosas = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_COSAS_VALIOSAS );
	echo '<pre>';
	var_dump( $palabras_cosas_valiosas );
	echo '</pre>';

?>

<?php get_footer(); ?>