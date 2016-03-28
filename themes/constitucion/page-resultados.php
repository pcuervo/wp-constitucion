<?php get_header(); ?>
<script src="<?php echo THEMEPATH; ?>js/zingchart/zingchart.min.js"></script>
<script src="<?php echo THEMEPATH; ?>js/zingchart/modules/zingchart-treemap.min.js"></script>
<?php  $survey = Sondeo_CDMX_Survey::get(); ?>

<div class="[ container ][ margin-top--large ]">

	<section class="[ row ][ margin-bottom ]">

		<?php
			// pregunta #8
			$palabras_que_piensas = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_PIENSAS_CDMX );
			$palabras_que_piensas_json_encoded = json_encode($palabras_que_piensas);
		?>

		<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
			<h2>¿Cuáles son las tres primeras palabras que te llegan a la mente cuando piensas en la Ciudad de México?</h2>
			<div id ='pregunta-8'></div>
		</div>

		<script>
		  var configPregunta8 = {
			"graphset":[
				{
					"globals":{
						"fontFamily":"Alegreya Sans",
						"fontColor": "#e0e0e0"
					},
					"type":"treemap",
					"plotarea":{
						"margin":"0 0 30 0"
					},
					"options":{
						"aspect-type":"transition",
						"color-start":"#457390",
						"color-end":"#363636",
						"box":{
							"borderWidth": 1,
							"borderColor": "#e0e0e0"
						},
						"tooltip-box":{
							"background-color":"#ec2383",
							"border-color":"#000",
							"text":"%text: %value",
							"border-color":"#fff",
							"border-width":"1px",
							"font-color":"#fff"
						}
					},
					"series": <?php echo $palabras_que_piensas_json_encoded; ?>
				}
			]
		};


		zingchart.render({
			id : 'pregunta-8',
			data : configPregunta8,
			height: "300px",
			width: "100%",
			hideprogresslogo: true,
		});
		</script>

	</section>

	<section class="[ row ][ margin-bottom ]">


		<?php
			// pregunta #9
			$palabras_grandes_retos = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_GRANDES_RETOS );
			$palabras_grandes_retos_json_encoded = json_encode($palabras_grandes_retos);
		?>

		<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
			<h2>Si pensaras en los grandes retos de esta Ciudad, ¿cuáles son los primeros cuatro que te llegan a la mente?</h2>
			<div id ='pregunta-9'></div>
		</div>

		<script>
		  var configPregunta9 = {
			"graphset":[
				{
					"globals":{
						"fontFamily":"Alegreya Sans",
						"fontColor": "#e0e0e0"
					},
					"type":"treemap",
					"plotarea":{
						"margin":"0 0 30 0"
					},
					"options":{
						"aspect-type":"transition",
						"color-start":"#4F5AD0",
						"color-end":"#1A1D43",
						"box":{
							"borderWidth": 1,
							"borderColor": "#e0e0e0"
						},
						"tooltip-box":{
							"background-color":"#ec2383",
							"border-color":"#000",
							"text":"%text: %value",
							"border-color":"#fff",
							"border-width":"1px",
							"font-color":"#fff"
						}
					},
					"series": <?php echo $palabras_grandes_retos_json_encoded; ?>
				}
			]
		};


		zingchart.render({
			id : 'pregunta-9',
			data : configPregunta9,
			height: "300px",
			width: "100%",
			hideprogresslogo: true,
		});
		</script>

	</section>

	<section class="[ row ][ margin-bottom ]">

		<?php
			// pregunta #10
			$num_respuestas = 3;
			$ultimas_respuestas = $survey->get_latest_answers( $num_respuestas, Sondeo_CDMX_Survey::Q_CDMX_IDEAL );
		?>

		<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
			<h2>¿Cómo te imaginas la CDMX ideal, en 20 años?</h2>

			<div class="[ row ]">
				<?php foreach ($ultimas_respuestas as $key => $ultima_respuesta) { ?>
					<div class="[ card ][ col-xs-12 ][ margin-bottom ]">
						<h3 class="[ no-margin ]"><?php echo $ultima_respuesta; ?></h3>
					</div>
				<?php } ?>
			</div>
		</div>

	</section>
	<section class="[ row ][ margin-bottom ]">

		<?php
			// pregunta #11
			$palabras_obstaculos_principales = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_OBSTACULOS_PRINCIPALES );
			$palabras_obstaculos_principales_json_encoded = json_encode($palabras_obstaculos_principales);
		?>

		<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
			<h2>Pensando en esta CDMX ideal, ¿cuáles pensarías que son los tres obstáculos principales para que se haga realidad?</h2>
			<div id ='pregunta-11'></div>
		</div>

		<script>
		  var configPregunta11 = {
			"graphset":[
				{
					"globals":{
						"fontFamily":"Alegreya Sans",
						"fontColor": "#e0e0e0"
					},
					"type":"treemap",
					"plotarea":{
						"margin":"0 0 30 0"
					},
					"options":{
						"aspect-type":"transition",
						"color-start":"#40A956",
						"color-end":"#235D2F",
						"box":{
							"borderWidth": 1,
							"borderColor": "#e0e0e0"
						},
						"tooltip-box":{
							"background-color":"#ec2383",
							"border-color":"#000",
							"text":"%text: %value",
							"border-color":"#fff",
							"border-width":"1px",
							"font-color":"#fff"
						}
					},
					"series": <?php echo $palabras_obstaculos_principales_json_encoded; ?>
				}
			]
		};


		zingchart.render({
			id : 'pregunta-11',
			data : configPregunta11,
			height: "300px",
			width: "100%",
			hideprogresslogo: true,
		});
		</script>

	</section>
	<section class="[ row ][ margin-bottom ]">

		<?php
			// pregunta #14
			$palabras_cosas_valiosas = $survey->get_word_occurrences_by_question( Sondeo_CDMX_Survey::Q_COSAS_VALIOSAS );
			$palabras_cosas_valiosas_json_encoded = json_encode($palabras_cosas_valiosas);
		?>

		<div class="[ col-xs-12 padding--sides--xsm col-sm-offset-2 col-sm-8 ]">
			<h2>Si pensaras en las tres cosas más valiosas de la CDMX que deben ser protegidas o potenciadas ¿Qué palabras te vienen a la mente?</h2>
			<div id ='pregunta-14'></div>
		</div>

		<script>
		  var configPregunta14 = {
			"graphset":[
				{
					"globals":{
						"fontFamily":"Alegreya Sans",
						"fontColor": "#e0e0e0"
					},
					"type":"treemap",
					"plotarea":{
						"margin":"0 0 30 0"
					},
					"options":{
						"aspect-type":"transition",
						"color-start":"#E95959",
						"color-end":"#5D2323",
						"box":{
							"borderWidth": 1,
							"borderColor": "#e0e0e0"
						},
						"tooltip-box":{
							"background-color":"#ec2383",
							"border-color":"#000",
							"text":"%text: %value",
							"border-color":"#fff",
							"border-width":"1px",
							"font-color":"#fff"
						}
					},
					"series": <?php echo $palabras_cosas_valiosas_json_encoded; ?>
				}
			]
		};


		zingchart.render({
			id : 'pregunta-14',
			data : configPregunta14,
			height: "300px",
			width: "100%",
			hideprogresslogo: true,
		});
		</script>

	</section>
</div>

<?php get_footer(); ?>