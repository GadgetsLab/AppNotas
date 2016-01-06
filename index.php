	<?php

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>AppNotas</title>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	<link href="https://file.myfontastic.com/fhjgoJNzij4FGyAUWmsG4m/icons.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="ed-container fondo-form">
		<section class="ed-item base-100">
			<hgroup>
				<h2>AppNotas</h2>
				<h3>Bienvenid@ a AppNotas.
				Esta herramienta esta hecha con el fin de calcular la nota actual, a si como el porcentaje evaluado y la nota que necesitas para ganar la materia en un 3 en el porcentaje faltante.</h3>
				<h4>Actualmente nos encontramos en una fase beta. nos gustaría que nos evaluaras en los siguientes puntos
				<br>
				<br>
				<ul>
					<li>1-  Calidad del funcionamiento.</li>
					<li>2- Facilidad del manejo.</li>
					<li>3- Diseño.</li>
				</ul>
				<br>
				También agradeceríamos si tienes alguna idea para añadir a la aplicación, nos lo contaras <a class="abrirmodal fontblue">AQUI</a>.</h4>
			</hgroup>
			<br />
		</section>
			
		<div class="ed-item fontwhite base-100" id="response"></div>
		<section class="ed-item base-100" style="text-align: center;">
			<div class="ed-container">
				<div class="ed-item base-100 centrar-contenido">
					<a href="#" class="fondogreen btnradius derecha add"><i class="icon-plus"></i></a>
				</div>
			</div>
			<form id="form" action="core/processor.php" method="post">
				<fieldset class="centrar-contenido">
					<div class="ed-container">
						<div class="ed-item tablet-45">
							<input type="number" step="any" name="nota[]" placeholder="Nota" class="izquierda"min="0" max="5" >
						</div>
						<div class="ed-item tablet-45">
							<input type="number" name="prom[]" placeholder="Promedio" class="izquierda" min="0" max="100">
						</div>
						<div class="ed-item tablet-5">
							<a hreft="#" class="fondored delete btnradius"><i class="icon-minus"></i></a>
						</div>
					</div>
				</fieldset>
				<button class="btn fondoblue">Calcular</button>
			</form>
		</section>
		<hr>
	</div>
	<!--<footer class="absolute-bottom">Todos los derechos reservados</footer>-->
</div>
<!--Cuerpo de la modal de contacto-->
<div class="velo">	
				<section id="modal" class="fondowhite">
						<a class="cerrarmodal">x</a>	
						<form id="modalform" action="core/email.php">
							<input type="text" placeholder="Nombre" class="margin-bottom-10" required>
							<input type="email" placeholder="Correo" class="margin-bottom-10" required>
                            <select name="asunto" id="" class="margin-bottom-10">
                            	<option value="">Tipo de mensaje</option>
                            	<option value="1">Sugerencia</option>
                            	<option value="2">Errores</option>		
                            </select>
                            <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Comenta"></textarea>	
                            <button class="btn">Enviar</button>					
                       </form>
				</section>
			</div>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>