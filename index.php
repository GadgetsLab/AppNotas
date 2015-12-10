<?php

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>AppNotas</title>
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700,300' rel='stylesheet' type='text/css'>
	<link href="https://file.myfontastic.com/fhjgoJNzij4FGyAUWmsG4m/icons.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="ed-container fondo-form">
		<section class="ed-item base-100">
			<hgroup>
				<h2>AppNotas</h2>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</h3>
			</hgroup>
			<br />
		</section>
		<section class="ed-item base-100" style="text-align: center;">
			<a href="#" class="fondogreen btnradius derecha add"><i class="icon-plus"></i></a>
			<form id="form" action="core/processor.php" method="post">
				<fieldset class="centrar-contenido">
					<legend>
						Notas y Promedios
					</legend>
					<!--<label for="nota">Nota</label>-->
					<input type="number" step="any" name="nota[]" placeholder="Nota" class="izquierda"min="0" max="5" >

					<!--<label for="prom">Promedio</label>-->
					<input type="number" name="prom[]" placeholder="Promedio" class="izquierda" min="0" max="100">
					<a hreft="#" class="fondored delete btnradius derecha"><i class="icon-minus"></i></a>
				</fieldset>
				<button class="btn fondoblue">Calcular</button>
			</form>
		</section>
		<hr>
	</div>
	<!--<footer class="absolute-bottom">Todos los derechos reservados</footer>-->
</div>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>