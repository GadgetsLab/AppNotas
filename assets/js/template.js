$(".add").on("click", function(e){
	e.preventDefault();
	var $cont = $("#form input").length/2;
	$("fieldset").append('<div class="ed-container">'+
                            '<div class="ed-item tablet-45">'+
                            '<input type="number" step="any" name="nota[]" placeholder="Nota" class="    izquierda"min="0" max="5" ></div>'+
                            '<div class="ed-item tablet-45">'+
                            '<input type="number" name="prom[]" placeholder="Promedio"'+
                            'class="izquierda" min="0" max="100"></div>'+
                            '<div class="ed-item tablet-5">'+
                            '<a hreft="#" class="fondored delete btnradius"><i class="icon-minus"></i></a>'+ '</div></div>');
});
$("#form").on('click','.delete', function(t){
    t.preventDefault();
    var $cont = $("#form input").length;
    if($cont > 2){
        $(this).parent().prev().prev().remove();
        $(this).parent().prev().remove();
        $(this).parent().remove();
    }
});
$("#form").submit(function(a){
    var control = true;
    a.preventDefault();
    var $data = $(this).serialize();
    $("#form input").each(function(){
        if($(this).val() == ''){
            $(this).addClass('input-error');
            control = false;
        }else{
            $(this).addClass('input-succes');
        }
    });
    if(control){
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
        });
    }else{
        $("#response").html('Completa todos los campos').addClass('error');
    }
});
$(".velo, .cerrarmodal").on("click", function(){
    $(".velo").add("#modal").fadeOut();
});

$(".abrirmodal").on("click", function(){
    $(".velo").add("#modal").fadeIn();
});

$("#modalform").submit(function(a){
    var control = true;
    a.preventDefault();
    var $datamodal = $(this).serialize();
    $("#modalform input, #modalform textarea").each(function(){
        if($(this).val() == ''){
            $(this).addClass('input-error');
            control = false;
        }else{
            $(this).addClass('input-success');
        }
    });
    if(control){
        $.ajax({
            type: "post",
            url: "core/email.php",
            data: $datamodal,
            contentType: "application/x-www-form-urlencoded"
        })
        .done(function(o){
            //var cualquiera = (o).toArray();
            //console.log(cualquiera);
            $(".result").html(o);
            //.fadeIn()
            //.removeClass("success").removeClass("error")
            //.addClass(o['class']).html(o['message']);
        });
    }else{
        $(".result").html('Completa todos los campos').addClass('error');
    }
});