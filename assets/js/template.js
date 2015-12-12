$(".add").on("click", function(e){
	e.preventDefault();
	var $cont = $("#form input").length/2;
	$("fieldset").append('<input type="number" step="any" name="nota[]" placeholder="Nota" class="izquierda"min="0" max="5">' +
						'<input type="number" name="prom[]" placeholder="Promedio" class="izquierda" min="0" max="100">' +
						'<a hreft="#" class="fondored delete btnradius derecha"><i class="icon-minus"></i></a>');
});
$("#form").on('click','.delete', function(t){
    t.preventDefault();
    var $cont = $("#form input").length;
    if($cont > 2){
        $(this).prev().prev().remove();
        $(this).prev().remove();
        $(this).remove();
    }
});
$("#form").submit(function(a){
    a.preventDefault();
    var $data = $(this).serialize();
    $.ajax({
        type: "post",
        url: "core/processor.php",
        data: $data,
        contentType: "application/x-www-form-urlencoded"

    })
    .done(function(m){
        $("#response")
        .fadeIn()
        .removeClass("success").removeClass("partial").removeClass("error")
        .addClass(m['class']).html(m['message']);
    })
});
