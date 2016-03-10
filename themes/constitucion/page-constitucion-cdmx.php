<?php
get_header();
the_post();
$url_image_constirucion = attachment_image_url( $post->ID, 'full' );
$img_constitucion_cdmx = get_option( 'img_constitucion_cdmx' ); ?>

<div class="[ bg-image rectangle-small ][ relative ][ margin--header ]" style="background-image: url('<?php echo $img_constitucion_cdmx; ?>');">
	<div class="[ width-100 height-100 ]">
		<h1 class="[ container ][ text-uppercase text-center ][ no-margin ][ center-full ][ color-light ][ letter-spacing ][ hidden ]">Acerca de la Constitución</h1>
	</div>
</div>

<section class="[ container ][ space-id ]" id="jefe-gobierno">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-mensaje-jefegob ]">
				<h2>Mensaje del jefe de gobierno</h2>
				<blockquote>
					<img src="<?php echo THEMEPATH; ?>images/graficos-15.png" alt="">
					<p>La Zona Metropolitana del Valle de México la integran actualmente las 16 delegaciones de la CDMX, 59 municipios del Estado de México y un municipio del estado de Hidalgo.
					</p>
				</blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					accumsan lorem id porttitor porttitor. In pulvinar pellentesque ornare. Morbi facilisis sem molestie sapien euismod,
					vel ornare mi sagittis. Nulla at porta arcu, ut lacinia dui. In semper. Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu-
					lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu.
					Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.Praesent quis enim mollis, molestie nisl non, dapibus tellus. Vestibu lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed dignissim ligula id justo feugiat sodales. Mauris eu est arcu. Donec vestibulum rutrum arcu, quis molestie odio iaculis in. Nunc at rutrum risus.
				</p>
			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<img src="<?php echo THEMEPATH; ?>images/01.jpg" alt="">
</div>

<section class="[ container ][ space-id ]" id="sobre-constitucion">
	<div class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">
			<div class="[ content-acerca-de ]">
				<h2>Sobre la constitución</h2>
				<blockquote>
					<img src="<?php echo THEMEPATH; ?>images/graficos-08.png" alt="">
					<p>En el 2014 la CDMX recibió a 13 millones de turistas.</p>
				</blockquote>
				<p>
					La capital de México concentra a millones de personas. Es una de las urbes más grandes y extensas del mundo. En ella encontramos una diversidad sorprendente de personas, infraestructura, geografías e historias. Pero hay algo muy importante que todos tenemos en común: un espacio geográfico y un futuro conjunto.
					<br><br>
					Elaborar una Constitución Política es un asunto trascendental para cualquier comunidad. Una Constitución le da forma y razón de ser a un Estado, delimita sus territorios, determina cómo funciona su gobierno y la gestión de los bienes públicos. También define los fundamentos de su sistema económico y reconoce los derechos, garantías individuales y deberes de sus ciudadanos.
					<br><br>
					Una constitución incorpora las aspiraciones y anhelos de quienes la suscriben, plasma cómo quieren que sea su vida colectiva y lo que es posible (y no) dentro de los bordes del espacio que comparten.
				</p>
			</div>
			<div class="[ content-acerca-de ]">
				<blockquote>
					<img src="<?php echo THEMEPATH; ?>images/graficos-06.png" alt="">
					<p>El metro de la ciudad mueve a casi 5 millones de usuarios al día.</p>
				</blockquote>
				<p>
					<br>
					La estructura del poder en el Distrito Federal fue establecida por el Gobierno de la República y el Congreso de la Unión.  Aunque desde el Estatuto de Gobierno del Distrito Federal (1994) la ciudad cuenta con una Asamblea Legislativa capaz de aprobar y derogar leyes, este año se presenta la oportunidad para que, por primera vez, la opinión ciudadana tenga injerencia en la determinación de esta estructura.
					<br><br>
					Elaborar nuestra Constitución es acordar en conjunto un pacto social de suma importancia para todos los que habitamos y visitamos la Ciudad de México. Es un documento que nos dirigirá hacia el futuro y conservará el espíritu de la ciudad para futuras generaciones sin que sea alterado por el paso de distintos gobiernos.
					<br><br>
					La sociedad capitalina ha estado detrás de las grandes conquistas sociales del país de las últimas décadas. Con la energía social y fuerza ciudadana característica de la Ciudad de México, la Constitución tiene el potencial de ser otro gran logro.
				</p>
			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<img src="<?php echo THEMEPATH; ?>images/02.jpg" alt="">
</div>

<section class="[ container ][ space-id ]" id="grupo-trabajo">
	<article class="[ row ]">
		<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

			<div class="[ content-acerca-de ]">
				<h2>Grupo de trabajo</h2>
				<blockquote>
					<img src="<?php echo THEMEPATH; ?>images/graficos-13.png" alt="">
					<p>En la CDMX se realizan 14 millones de viajes al día en buses y microbuses.</p>
				</blockquote>
				<p>
					El Jefe de Gobierno es la única persona facultada para presentar un Proyecto de Constitución a la <a href="<?php echo site_url( 'cdmx' ) ?>#hacia_el_constituyente">Asamblea Constituyente</a>. Para su elaboración, formó un Grupo de Trabajo de personajes notables de la ciudad conformado por representantes de sociedad civil, academia y especialistas, como espacio democrático y plural de participación social y ciudadana.
					<br><br>
					Además de apoyar en la redacción del Proyecto de Constitución, el Grupo de trabajo tiene como objetivo conocer y compilar las propuestas y opiniones de la ciudadanía y de las organizaciones políticas, civiles y sociales de la Ciudad de México. Dentro de sus funciones está evaluar y considerar la <a href="<?php echo site_url('participa'); ?>">opinión ciudadana</a> bajo los criterios de legalidad, calidad, viabilidad y beneficio social. Todos ellos seguirán de cerca las reflexiones e ideas que se concentren en esta plataforma ciudadana.
					<br><br>
					El Proyecto de Constitución Política de la Ciudad de México será remitido a la Asamblea Constituyente por el Jefe de Gobierno en su primera sesión de trabajo, el 15 de Septiembre de 2016.
				</p>
			</div>
		</div>
	</article>

	<article class="[ space-id ]">
		<div class="[ row ]">
			<?php
			$query_count = 1;
			$grupoTrabajo = new WP_Query(array(
				'post_type'      => 'grupo-de-trabajo',
				'posts_per_page' => -1,
				'orderby'  => 'post_title',
				'order'    => 'ASC'
			));

			if ( $grupoTrabajo->have_posts() ) :
				while ( $grupoTrabajo->have_posts() ) : $grupoTrabajo->the_post();
					$url_img = attachment_image_url($post->ID, 'thumbnail');?>
					<div class="[ col-xs-6 col-sm-3 col-md-2 ][ content-trabajo ][ text-center ][ margin-bottom ]">
						<a data-toggle="modal" data-target="#trabajador">
							<div class="[ content-trabajo__img ]">
								<img src="<?php echo $url_img; ?>">
							</div>
							<h3 class="nombre"><?php the_title(); ?></h3>
							<div class="biografia hidden"><?php the_content(); ?></div>
							<div class="cargo hidden"><?php echo get_post_meta( $post->ID, 'cargo_integrante', true ); ?></div>
						</a>
					</div>

					<?php
						if($query_count % 2 == 0) {echo '<div class="[ clear--xs ]"></div>';}
						if($query_count % 3 == 0) {echo '<div class="[ clear--xsm ]"></div>';}
						if($query_count % 4 == 0) {echo '<div class="[ clear--sm ]"></div>';}
						if($query_count % 6 == 0) {echo '<div class="[ clear--md ]"></div>';}
						?>
				<?php $query_count++; endwhile;
			endif;
			wp_reset_postdata();?>

		</div>

		<!-- Modal grupo de trabajo -->
		<div id="trabajador" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<a type="button" class="close modal-group-close" data-dismiss="modal" aria-label="Close"><img class="[ svg icon icon--iconed icon--thickness-1 icon--stroke ][ color-gray ]" src="<?php echo THEMEPATH; ?>icons/close.svg"></a>
					<div class="modal-body">
						<img src="" class="[ imagen-modal ][ img-responsive ][ margin-bottom--small ]">
						<h3 class="nombre-modal"></h3>
						<p class="cargo-modal"></p>
						<div class="biografia-modal"></div>
					</div><!-- modal-body -->
				</div>
			</div>
		</div>
	</article>
</section>

<section class="[ bg-gray--fondo section--bg ][ no-margin--bottom ][ space-id ]" id="sobre-plataforma">
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ col-sm-offset-1 col-sm-10 ]">

				<div class="[ content-sobre-la-plataforma ]">
					<h2>Sobre la plataforma</h2>
					<blockquote>
						<img src="<?php echo THEMEPATH; ?>images/graficos-07.png" alt="">
						<p>La CDMX tiene el índice de Desarrollo Humano más alto del país, es decir, cuenta con el grado de desarrollo más alto del país de acuerdo a este indicador.</p>
					</blockquote>
					<p>
						El capital más valioso de la ciudad es la diversidad de personas e ideas que la componen. Nuestra época nos concede una capacidad sin precedentes para comunicarnos, compartir y procesar información. Por ello, el Grupo de Trabajo está decidido a aprovechar la tecnología y otros formatos de participación para facilitar que todas las voces que quieran contribuir al Proyecto de Constitución sean escuchadas. Este es un derecho social otorgado y respaldado por la Ley para Hacer de la Ciudad de México una Ciudad Abierta.
						<br><br>
						ConstituciónCDMX es una plataforma abierta que pone a disposición de la ciudadanía distintas formas de participación para concentrar ideas, reflexiones, eventos y propuestas en torno a la elaboración del Proyecto de la Constitución Política de la Ciudad de México. La plataforma tiene dos componentes, este sitio y una activación en sitio en 350 quioscos móviles para quienes no tienen acceso a plataformas digitales.
					</p>
				</div>

				<div class="[ content-sobre-la-plataforma ]" >
					<blockquote>
						<img src="<?php echo THEMEPATH; ?>images/graficos-12.png" alt="">
						<p>El 59% del territorio que ocupa la CDMX es suelo de conservación..</p>
					</blockquote>
					<p>
						<br>
						El Grupo aprovechará las contribuciones que concentre esta plataforma para redactar el Proyecto de Constitución. Entre más nutrido sea el debate público y más ágil sea la creación colaborativa de propuestas, más consolidado será el proyecto que reciba, a nombre de todos, la Asamblea Constituyente.
						<br><br>
						Además, este sitio permanecerá como un legado histórico del proceso y contendrá un vasto repositorio de ideas, reflexiones y propuestas representativas del espíritu de la Ciudad.
						<br><br>
						Como cualquier proceso abierto, esta plataforma podrá transformarse y mejorarse con el tiempo para captar de cada vez mejor forma las voces ciudadanas.
					</p>
				</div>

			</div>
		</div>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<img src="<?php echo THEMEPATH; ?>images/04.jpg" alt="">
</div>

<section class="[ container ][ space-id ]" id="constitucion-wiki">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-offset-1 col-sm-10 ][ text-justify ]">
			<h2 class="[ margin-bottom ]">Constitución en wiki</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit in suscipit similique tempore ab quam voluptatibus, quos modi fuga iusto earum incidunt repellendus quis tempora? Perspiciatis officia accusantium temporibus esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus dolorum quam illo veniam id placeat nulla repellat vero debitis ratione consectetur eos praesentium, delectus doloremque dolor, ipsa deserunt eaque.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consequuntur error illum. Atque esse, et iure rerum fugiat consequuntur repellendus est dignissimos alias officia fugit culpa nam consequatur exercitationem quae!</p>
		</div>
	</div>
	<div class="[ text-center ][ margin-top--large ]">
		<a class="[ btn btn-primary btn-large ]" disabled>Próximamente</a>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<img src="<?php echo THEMEPATH; ?>images/05.jpg" alt="">
</div>

<section class="[ space-id ]" id="preguntas-frecuentes">
	<div class="[ container ]">
		<h2 class="[ margin-bottom ]">Preguntas frecuentes</h2>
		<?php $preguntas = new WP_Query(array(
				'post_type'      => 'preguntas-frecuentes',
				'posts_per_page' => -1,
			));

		if ( $preguntas->have_posts() ) :
			$count = 0;
			while ( $preguntas->have_posts() ) : $preguntas->the_post();
				if($count%2 == 0):
				    echo $count > 0 ? '</div>' : '';
				    echo '<div class="[ row ]">';
				endif; ?>

				<div class="[ col-xs-12 col-sm-6 ][ margin-bottom ]">
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</div>

				<?php $count++;
			endwhile;

		endif;
		wp_reset_postdata(); ?>
	</div>
</section>

<div class="[ descanso-visual ][ margin-bottom--large ]">
	<img src="<?php echo THEMEPATH; ?>images/06.jpg" alt="">
</div>


<section class="[ container ][ space-id ][ content-biblioteca ]" id="biblioteca">
	<h2 class="[ margin-bottom--large no-margin-top ]" id="biblioteca">Biblioteca</h2>
	<p class="[ margin-bottom--large ]">La búsqueda de una Reforma Política para la Ciudad de México es un proceso que ha tomado mucho tiempo en su conceptualización y cuya ejecución no es expedita. En esta biblioteca podrás descargar documentos relacionados a la historia de la configuración política del Distrito Federal y nuestra ciudad.</p>
	<a class="[ margin-top ]" href="http://www.juridicas.unam.mx/publica/librev/rev/rap/cont/61/pr/pr21.pdf" target="_blank"><p>La Ley Orgánica del Distrito y Territorios Federales de 1928</p></a>
	<a class="[ margin-top ]" href="http://www.juridicas.unam.mx/publica/librev/rev/rap/cont/61/pr/pr23.pdf" target="_blank"><p>La Ley Orgánica del Departamento del Distrito Federal de 1970</p></a>
	<a class="[ margin-top ]" href="http://info4.juridicas.unam.mx/adprojus/leg/10/350/" target="_blank"><p>Estatuto de Gobierno del Distrito Federal de 1994.</p></a>
	<a class="[ margin-top ]" href="http://sil.gobernacion.gob.mx/Archivos/Documentos/2002/09/asun_57128_20020905_844595.pdf" target="_blank"><p>Iniciativa de Reforma Política de Andrés Manuel López Obrador, 2001</p></a>
	<a class="[ margin-top ]" href="http://sil.gobernacion.gob.mx/Archivos/Documentos/2010/04/asun_2663420_20100429_1272578740.pdf" target="_blank"><p>Iniciativa de Reforma Política de Marcelo Ebrard Casaubón, 2010</p></a>
	<a class="[ margin-top ]" href="http://www.reformapolitica.cdmx.gob.mx/index.php/hacia-la-reforma-politica/140-el-proceso-de-la-reforma-politica/893-iniciativa-de-reforma-politica-de-la-ciudad-de-mexico-presentada-por-el-dr-miguel-angel-mancera-espinosa-jefe-de-gobierno-del-distrito-federal-13-de-agosto-2013" target="_blank"><p>Iniciativa de Reforma Política de Miguel Ángel Mancera, 2013</p></a>
	<a class="[ margin-top ]" href="http://www.dof.gob.mx/nota_detalle.php?codigo=5424043&fecha=29/01/2016" target="_blank"><p>Decreto de Reforma Política de la Ciudad de México 2016</p></a>
	<a class="[ margin-top ]" href="http://biblio.juridicas.unam.mx/libros/2/649/19.pdf" target="_blank"><p>El Distrito Federal Mexicano Gobierno y Democracia</p></a>
	<a class="[ margin-top ]" href="http://www.juridicas.unam.mx/publica/librev/rev/mexder/cont/9/cnt/cnt1.pdf" target="_blank"><p>El Distrito Federal Una Nueva Estructura Constitucional</p></a>
</section>

<?php get_footer(); ?>
