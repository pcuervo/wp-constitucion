<?php 
	// if( ! isset( $_POST['nombre'] ) ){
	// 	wp_redirect( home_url() ); exit;
	// }
	// Pdf::generateCertificate( $_POST['nombre'], $_POST['apellidos'], 'CDASDGASDG' );
Pdf::generateCertificate( 'alejandro', 'cervantes', 'CDASDGASDG' );
