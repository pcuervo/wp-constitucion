<?php

/**
* Here we add all the javascript that needs to be run on the footer.
**/
function footer_scripts(){
	global $post;

	if( wp_script_is( 'functions', 'done' ) ) :

?>
		<script type="text/javascript">

			$(document).ready(function(){

				/*------------------------------------*\
					#GLOBAL
				\*------------------------------------*/

				imgToSvg();

				/*------------------------------------*\
					#HOME
				\*------------------------------------*/
				<?php if( is_page( 'cdmx' )) : ?>

				<?php endif; ?>


			});
		</script>
<?php
	endif;
}// footer_scripts
?>