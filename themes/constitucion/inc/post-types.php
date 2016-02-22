<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// NOTICIAS
		$labels = array(
			'name'          => 'Calendario',
			'singular_name' => 'Calendario',
			'add_new'       => 'Nueva Fecha',
			'add_new_item'  => 'Nueva Fecha',
			'edit_item'     => 'Editar Fecha',
			'new_item'      => 'Nueva Fecha',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Fecha',
			'search_items'  => 'Buscar Fecha',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Calendario'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'calendario' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'calendario', $args );

		// KIOSCOS
		$labels = array(
			'name'          => 'Kioskos',
			'singular_name' => 'Kioskos',
			'add_new'       => 'Nuevo kiosko',
			'add_new_item'  => 'Nuevo kiosko',
			'edit_item'     => 'Editar kiosko',
			'new_item'      => 'Nuevo kiosko',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver kiosko',
			'search_items'  => 'Buscar kiosko',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Kioskos'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'kioskos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'kioskos', $args );

	});