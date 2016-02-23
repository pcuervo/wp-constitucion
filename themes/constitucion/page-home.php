		<section>
			<div class="[ bg-image height-home-video ][ margin-bottom ][ relative ]" style="background-image: url('<?php echo THEMEPATH; ?>/images/home.png');">
				<div class="[ width-100 height-100 ]">
					<img class="[ width-15 ] " src="<?php echo THEMEPATH; ?>images/consti_vertical.png">
					<span class="[ lead ]"><em>punto de encuentro</em></span> 
					<button class="[ btn btn-play ][ center-full ]" onclick="playPause()"><img class="[ width-100 ]" src="<?php echo THEMEPATH; ?>images/play.png"></button>
					<video width="100%" height="50%" controls></video>
				</div>
			</div>
		</section>
		<div>
		</div>
<?php get_header(); the_post();  ?>



<!--home -- Favor de Leer el archivo readme.md -->

			
				<div class="[ row ]">
					<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-sm-6 ][ margin-bottom ]">
						<h1 class="[ text-sm-caps text-center ]">ConstituciónCDMX</h1>
						<h2 class="[ text-center ]">Nulla sed aliquet purus. Sed fringilla facilisis sapien, et iaculis nibh condimentum at. </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac dolor nec nulla consectetur lobortis vel nec eros. Aliquam erat volutpat. Sed at tempor nisi. Phasellus suscipit feugiat libero, sit amet dictum turpis maximus sollicitudin. Maecenas quis scelerisque ligula, at hendrerit turpis. Nulla sed aliquet purus. Sed fringilla facilisis sapien, et iaculis nibh condimentum at. Proin ut lorem quis magna dapibus ultricies nec sit amet ex. Vivamus convallis urna in iaculis cursus. Suspendisse venenatis rhoncus commodo. Curabitur et ornare lorem, nec ornare turpis. Nulla ultricies nibh suscipit efficitur congue.</p>
					</div>
				</div>
			</div><!--/container-->
			
<?php get_sidebar(); ?>
<iframe src="https://ishaqibrahim.cartodb.com/viz/6cc1ad26-d690-11e5-971e-0e31c9be1b51/embed_map" frameborder="0" height="400" width="100%"></iframe>


<?php get_footer(); ?>