<!DOCTYPE html>
<html>
<head>
	<title>AppNotas</title>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link rel="stylesheet" href="assets/css/movil.css">
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	<link href="https://file.myfontastic.com/fhjgoJNzij4FGyAUWmsG4m/icons.css" rel="stylesheet">
</head>
<body>
    <nav class="menu fondo-black">
       <h5 class="click-menu">MENU</h5>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="faq.movil.php">FAQ</a></li>
        </ul>
    </nav>
    <div class="ed-container">
        <div class="ed-item total padding-top-30 fondowhite">
            <h2 class="text-center">Bienvenid@ AppNotas</h2>
            <br>
            <p class="text-justify">Esta herramienta esta hecha con el fin de calcular la nota actual, a si como el porcentaje evaluado y la nota que necesitas para ganar la materia en un 3 en el porcentaje faltante.</p>
            <form id="form" action="core/processor.php" method="post">
		    	<fieldset class="centrar-contenido ed-container no-padding border-bottom-black">
	    				<div class="ed-item">
    						<input type="number" step="any" name="nota[]" placeholder="Nota" class="izquierda"min="0" max="5" >
					    </div>
					    <div class="ed-item">
						    <input type="number" name="prom[]" placeholder="Promedio" class="izquierda" min="0" max="100">
					    </div>
                </fieldset>
            </form>
            <div class="ed-item total">
                <input type="number" disabled class="result">
            </div>
            <div class="ed-container">
                <div class="ed-item base-1-3 text-center">
                    <a href="#" class="fondogreen btnradius derecha add text-center"><i class="icon-plus"></i></a>
                </div>
                <div class="ed-item base-1-3 text-center">
                    <a hreft="#" class="fondored delete btnradius text-center margin-left-20"><i class="icon-minus"></i></a>
                </div>
                <div class="ed-item base-1-3 text-center">
                    <a href="#" class="fondoblue calculate btnradius text-center"><i class="icon-calculator"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>