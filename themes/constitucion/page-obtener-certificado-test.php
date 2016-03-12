<?php get_header();
if( ! isset( $_GET['referencia'] ) || $_GET['referencia'] == '' ):
	echo 'Referencia no registrada';
else:

	$retos = new RetosParticipante($_GET['referencia']);
	$posts = $retos->get_retos_relacionados();

	echo '<pre>';
	print_r($posts);
	echo '</pre>';

endif;

get_footer();