<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		if( ! get_page_by_path('constitucion-cdmx') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Constitución CDMX',
				'post_name'   => 'constitucion-cdmx',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('cdmx') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'CDMX',
				'post_name'   => 'cdmx',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('participa') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Participa',
				'post_name'   => 'participa',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('cronologia') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Cronología',
				'post_name'   => 'cronologia',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('instrucciones') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Instrucciones',
				'post_name'   => 'instrucciones',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_name'   => 'contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('home') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Home',
				'post_name'   => 'home',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('noticias') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Noticias',
				'post_name'   => 'noticias',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('noticias-single') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Noticias Single',
				'post_name'   => 'noticias-single',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('proceso-participativo') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Proceso participativo',
				'post_name'   => 'proceso-participativo',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('experiencias-y-buenas-practicas-globales') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Experiencias y buenas prácticas globales',
				'post_name'   => 'experiencias-y-buenas-practicas-globales',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('pdf-certificado-de-participacion') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'PDF Certificado de Participación',
				'post_name'   => 'pdf-certificado-de-participacion',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('guia-para-compartir-el-texto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Guía para compartir el texto',
				'post_name'   => 'guia-para-compartir-el-texto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('obtener-certificado') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Obtener certificado',
				'post_name'   => 'obtener-certificado',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
		
	});
