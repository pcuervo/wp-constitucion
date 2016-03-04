<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Certificate</title>
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,500,400,700" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo CSSPATH; ?>styles-pdf.css" type="text/css"/>
	</head>
	<style>
		.text-center{text-align: center;}
		.img-logo{ width: 120px; }
		.color-primary{ color: #e80e8a; }
		.color-gray--strong{ color:#222; }
		.color-gray{ color: #555; }
		.col{
			float: left;
			padding-right: 15px;padding-right: 15px;
		}
		.col-1{ width: 30%;}
		.col-2{ width: 65%;}
		.text-uppercase{ text-transform: uppercase; }
		.fz--small{ font-size: 12px; }
		.margin-top{ margin-top: 60px; }
		.margin-top--large{ margin-top: 100px; }
		.border-primary{
			border: 1px solid #e80e8a;
			width: 600px;
			height: 350px;
			padding: 10px;
			position: relative;
		}
		.border--1{ top: 10px; }
		.border--2{ top: -20px; }
		.border--3{ top: 10px; }
		.border--black{
			border: 1px solid #000;
			width: 640px;
			height: 390px;
			padding: 20px;
		}
		.padding{ padding: 20px; }

	</style>
	<body class="[ border--black ]">
		<div class="[ border-primary border--1 ]">
			<div class="[ border-primary border--2 ]">
				<div class="[ border-primary border--3 ]">
					<div class="[ padding ]">
						<div class="[ col col-1 ]">
							<img class="[ img-logo ]" src="<?php echo THEMEPATH; ?>images/consti_vertical.png">
							<p class="[ color-gray ][ margin-top--large ]">Con el folio núm. <span class="[ color-primary ][ fz--small ]">000000</span><br>
							podrás darle seguimiento <br>
							a tu participación</p>
						</div>
						<div class="[ col col-2 ]">
							<h3 class="[ text-uppercase ][ margin-top ][ color-gray ]">Diego emilio cuesy edgar</h3>
							<p class="[ color-gray--strong ]">El grupo de trabajo redactor del proyecto de constitución Política de la Ciudad de México otorga la presente constancia por haber contribuido con ideas, reflexiones y propuestas.</p>
							<p class="[ color-gray--strong ]">La Ciudad de México somos todas y todos. Gracias por ser parte de este proceso histórico.</p>
							<p class="[ text-uppercase ][ color-gray ][ fz--small ]">Ciudad de México a 2 de marzo de 2016</p>
						</div>
					</div>

				</div>
			</div>
		</div>

	</body>
</html>