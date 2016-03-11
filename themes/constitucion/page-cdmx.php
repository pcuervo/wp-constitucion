<?php get_header(); the_post();
$img_cdmx = get_option( 'img_cdmx' ); ?>

<div class="[ bg-image rectangle-small ][ relative ]" style="background-image: url('<?php echo $img_cdmx; ?>');">
	<div class="[ width-100 height-100 ]">
		<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ][ hidden ]">Ciudad de México</h1>
	</div>
</div>

<section class="[ container padding--sides--xsm ][ the_content ]">
	<?php the_content(); ?>
</section>

<section class="[ space-id ][ container padding--sides--xsm ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-acerca-de ]">
				<h2>Crónica</h2>
				<blockquote>
					<img class="[ inline-block ]" src="<?php echo THEMEPATH; ?>images/graficos-02.png" alt="gráfico de ciudad más poblada">
					<p>La CDMX, incluyendo su zona metropolitana, es la ciudad más poblada de América y la cuarta del mundo.</p>
					<canvas id="pie-data" width="100px" height="100px"></canvas>
				</blockquote>
				<p>La Ciudad de México es un asentamiento cuya historia se remonta casi 700 años atrás, desde la fundación de Tenochtitlan en 1325 hasta la Ciudad de México que vivimos hoy. En estos años, la ciudad ha experimentado cambios dramáticos en su paisaje natural, físico, administrativo, político y social. Ha sido un espacio de lucha, de reinvención y vanguardia. Hoy nos encontramos en un momento histórico con la creación formal de la Ciudad de México, la cual se convierte en el entidad 32 del país, avanza en su autonomía y podrá contar con su propio congreso y constitución. <br><br>El año de 1985 constituye un punto de inflexión en la historia de la Ciudad de México. El sismo que tuvo lugar ese año impulsó la solidaridad entre ciudadanos, fortaleció la identidad colectiva y el deseo compartido por una ciudad donde sus habitantes pudieran ser actores en su construcción e incidir en las decisiones que se toman sobre ella. Este acontecimiento fue un catalizador de la democracia en la ciudad y el inicio de un proceso de la construcción de ciudad que tenemos hoy.</p>
			</div>
		</div>
	</div>
	<?php echo wpautop( do_shortcode(get_post_meta($post->ID, 'contenido_extra', true) ) ); ?>
</section>

<!-- slider -->
<section>
	<div class="flexslider relative">
		<ul class="slides">
			<li>
				<img src="<?php echo THEMEPATH; ?>images/cd4.png" alt="Imagen slider 4">
			</li>
			<li>
				<img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="Imagen slider 1">
			</li>
			<li>
				<img src="<?php echo THEMEPATH; ?>images/cd2.png" alt="Imagen slider 2">
			</li>
			<li>
				<img src="<?php echo THEMEPATH; ?>images/cd3.png" alt="Imagen slider 3">
			</li>
		</ul>
	</div>
</section><!-- fin slider -->

<section>
	<div class=" slider responsive ">
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="Imagen slick 1"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd2.png" alt="Imagen slick 2"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd3.png" alt="Imagen slick 3"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd4.png" alt="Imagen slick 4"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd1.png" alt="Imagen slick 1"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd2.png" alt="Imagen slick 2"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd3.png" alt="Imagen slick 3"></div>
		<div class="[ item ]"><img src="<?php echo THEMEPATH; ?>images/cd4.png" alt="Imagen slick 4"></div>
	</div>
</section>

<section class="[ container ][ space-id ]" id="hacia-el-constituyente">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-acerca-de ][ margin-bottom ]">
				<h2>Hacia el constituyente</h2>
				<blockquote>
					<img src="<?php echo THEMEPATH; ?>images/graficos-10.png" alt="gráfico destino número 1 new york times">
					<p>
						El diario the New York Times señaló a la CDMX como el destino número 1 para visitar en el 2016 y la describió como “la ciudad que lo tiene todo”.
					</p>
				</blockquote>
				<p>
					La Asamblea Constituyente de la Ciudad de México es el órgano encargado de recibir, enmendar y aprobar el Proyecto de Constitución que le presente el Jefe de Gobierno durante su primera sesión de trabajo, el 15 de septiembre de 2016. Será la Asamblea quien tenga la palabra final sobre la futura Constitución Política de la Ciudad de México. Es importante que la ciudadanía utilice esta plataforma para lograr un Proyecto incluyente que comprenda la voz de los que convivimos en la ciudad puesto que las maneras de participar en un momento posterior son limitadas.

					La creación de la Asamblea está estipulada en el Decreto de Reforma Política de la Ciudad de México, publicado el 29 de enero de 2015 en el Diario Oficial de la Federación tras extensas sesiones de trabajo entre el Gobierno del Distrito Federal, los partidos políticos y el poder Legislativo Federal. Su conformación fue decidida por las diputadas y diputados del Congreso de la Unión y es de la siguiente forma:

					60 diputados electos por voto popular bajo principio de representación proporcional sobre una lista plurinominal de candidatos para una sola circunscripción electoral (la Ciudad de México).
					14 senadores electos por dos tercios de los representantes en el Senado de la República.
					14 diputados federales designados por voto de las dos terceras partes de los representantes en la Cámara de Diputados.
					6 diputados designados por el Presidente de la República
					6 diputados designados por el Jefe de Gobierno del Distrito Federal

					La organización de las elecciones de las diputadas y diputados de representación proporcional se llevará a cabo el día Domingo 5 de Junio de 2016. La organización de estas elecciones es facultad del Instituto Nacional Electoral (INE). Consulta el portal de este instituto para conocer los pormenores de las elecciones.
				</p>
			</div>
			<div class="[ content-acerca-de ]">
				<h3>Candidatos independientes</h3>
				<div>
					Las ciudadanas y ciudadanos que no están adscritos a un partido político pueden contender por un puesto en la Asamblea Constituyente como candidatos independientes. Para conocer más detalles de este proceso visita el sitio oficial de las Elecciones de la Asamblea Constituyente de la Ciudad de México.
				</div>
			</div>
			<div class="[ content-acerca-de ]" >
				<h3>La Asamblea Constituyente</h3>
				<blockquote>
					<img src="<?php echo THEMEPATH; ?>images/graficos-09.png" alt="Primer lugar nacional acceso información.">
					<p>La CDMX ocupa el primer lugar nacional en acceso a información pública de oficio.</p>
				</blockquote>
				<p>
					La Asamblea Constituyente se instalará el 15 de Septiembre de 2016 y deberá aprobar una Constitución Política a más tardar el 31 de Enero de 2017. Las sesiones de trabajo se llevarán a cabo en la Antigua sede del Senado de la República, en Xicoténcatl. La Asamblea Constituyente tiene la facultad de discutir, modificar, adicionar y votar el Proyecto de Constitución Política elaborado por el Grupo de Trabajo constituido para esta labor.
				</p>
				<h3>Participación ciudadana</h3>
				<div>
					Dado que la participación directa de la ciudadanía en esta etapa es limitada, es de suma importancia que esta aproveche y utilice la plataforma Constitución CDMX para que su voz sea escuchada e incorporada al Proyecto de Constitución que envíe el Jefe de Gobierno a la Asamblea Constituyente. No importa cómo decidas participar, tu aportación es esencial para presentar un Proyecto más sólido e incluyente.
				</div>
			</div>		

		</div>
	</div>
</section>

<section class="[ bg-gray-light section--bg space-id ][ no-margin--bottom ]" id="voces-ciudadanas">
		<div class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ][ text-center ]">Voces ciudadanas</h2>
			<div class="[ row ][ margin-bottom ]">
				<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 1,
						'meta_query' => array(
							array(
								'key'     => 'video_voces',
								'value'   => '',
								'compare' => '!=',
							),
						),
						'tax_query' => array(
							array(
								'taxonomy' => 'taxonomy-voces-ciudadanas',
								'field'    => 'slug',
								'terms'    => 'grupo-de-trabajos',
							),
						)
					));

				if ( $voces_ciudadanas->have_posts() ) :
					while ( $voces_ciudadanas->have_posts() ) : $voces_ciudadanas->the_post(); ?>
						<div class="[ col-xs-12 ][ margin-bottom ]">
							<div class="[ js-video-wrapper ]">

								<?php $video = get_post_meta( $post->ID, 'video_voces', true );
								preg_match('/src="([^"]+)"/', $video, $match);
								$url_video = $match[1]; ?>
								<iframe class="[ embed-responsive-item ]" src="<?php echo $url_video; ?>" title="<?php echo get_the_title(); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata(); ?>

			</div>
		</div>

		<div class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ]">Grupo de trabajo</h2>
			<div class="[ row ][ margin-bottom ]">
				<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 3,
						'meta_query' => array(
							array(
								'key'     => 'video_voces',
								'value'   => '',
								'compare' => '!=',
							),
						),
						'tax_query' => array(
							array(
								'taxonomy' => 'taxonomy-voces-ciudadanas',
								'field'    => 'slug',
								'terms'    => 'grupo-de-trabajo',
							),
						)
					));

				if ( $voces_ciudadanas->have_posts() ) :
					$count = 0;
					$count_pasados = 0;
					while ( $voces_ciudadanas->have_posts() ) : $voces_ciudadanas->the_post(); ?>
						<div class="[ col-xs-12 col-sm-4 ][ margin-bottom ]">
							<div class="[ js-video-wrapper ]">

								<?php $video = get_post_meta( $post->ID, 'video_voces', true );
								preg_match('/src="([^"]+)"/', $video, $match);
								$url_video = $match[1]; ?>
								<iframe class="[ embed-responsive-item ]" src="<?php echo $url_video; ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata(); ?>

			</div>
		</div>

		<div class="[ container padding--sides--xsm padding--bottom--large ]">
			<h2 class="[ no-margin-top ]">Más ciudadanas y ciudadanos</h2>
			<div class="[ row ][ margin-bottom ]">

					<?php $voces_ciudadanas = new WP_Query(array(
						'post_type'      => 'voces-ciudadanas',
						'posts_per_page' => 1,
						'meta_query' => array(
							array(
								'key'     => 'video_voces',
								'value'   => '',
								'compare' => '!=',
							),
						),
						'tax_query' => array(
							array(
								'taxonomy' => 'taxonomy-voces-ciudadanas',
								'field'    => 'slug',
								'terms'    => 'mas-de-ciudadanos',
							),
						)
					));

					if ( $voces_ciudadanas->have_posts() ) :
						$count = 0;
						$count_pasados = 0;
						while ( $voces_ciudadanas->have_posts() ) : $voces_ciudadanas->the_post(); ?>
							<div class="[ col-xs-12 ][ margin-bottom ]">
								<div class="[ js-video-wrapper ]">

									<?php $video = get_post_meta( $post->ID, 'video_voces', true );
									preg_match('/src="([^"]+)"/', $video, $match);
									$url_video = $match[1]; ?>
									<iframe class="[ embed-responsive-item ]" src="<?php echo $url_video; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						<?php endwhile;
					endif;
					wp_reset_postdata(); ?>

			</div>
			<div class="[ text-right ]">
				<a href="https://www.youtube.com/channel/UC3-12ySVHF-iItCbSdZ2z-Q" class="[ btn btn-primary btn-large ]" target="_blank">Ver más</a>
			</div>
		</div>

	</section>

<?php get_footer(); ?>