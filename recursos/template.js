$(".add").on("click", function(e){
	e.preventDefault();
	var $cont = $("#form input").length/2;
	$("fieldset").append('<input type="number" step="any" name="item['+ $cont +'][nota]" placeholder="Nota" class="izquierda"min="0" max="5">' +
						'<input type="number" name="item['+ $cont +'][prom]" placeholder="Promedio" class="izquierda" min="0" max="100">' + 
						'<a hreft="#" class="fondored btnradius derecha"><i class="icon-cerrar"></i></a>');
});