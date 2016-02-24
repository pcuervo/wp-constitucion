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
			SELECT * FROM ' .
			$wpdb->prefix . 'sondeo_cdmx_questions q
			INNER JOIN ' . $wpdb->prefix . 'sondeo_cdmx_answers a 
			ON q.id = a.sondeo_cdmx_question_id'
		);
		$current_question_id = -1;
		foreach ( $questions_results as $key => $result ) {
			if( $current_question_id != $result->sondeo_cdmx_question_id ){
				$current_question_id = $result->sondeo_cdmx_question_id;
				$questions[$current_question_id] = array(
					'question'		=> $result->question,
					'question_type' => $result->question_type,
					'answers'		=> array(),
					);
			}
			array_push( $questions[$current_question_id]['answers'], $result->answer );
		}

		if( 'array' == $format ){
			return $questions;
		}
		json_encode( $questions );
	}


}// Sondeo_CDMX_Survey