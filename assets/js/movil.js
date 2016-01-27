$(".addmovil").on("click", function(e){
    e.preventDefault();

    $("form").append('<fieldset class="centrar-contenido ed-container no-padding border-bottom-black">'+
                        '<div class="ed-item">'+
                        '<input type="number" step="any" name="nota[]" placeholder="Nota" class="izquierda " min="0" max="5" ></div>'+
                        '<div class="ed-item">'+
                        '<input type="number" name="prom[]" placeholder="Promedio" class="izquierda" min="0" max="100"></div>'+
                        '</fieldset>');
});
//---------------------------------------

$(".deletemovil").on("click", function(e){
    e.preventDefault();
    var $cont = $("form fieldset").length;
    if($cont > 1)
    {
        $("form fieldset:last-child").remove();
    }
});
//----------------------------------------------------

$(".calculate").on("click", function(a){
    var control = true;
    a.preventDefault();
    var $data = $("form").serialize();
    $("#form input").each(function(){
        if($(this).val() == ''){
            $(this).addClass('input-error');
            control = false;
        }else{
            $(this).addClass('input-succes');
        }
    });
    alert(control);
    if(control == true){
        $.ajax({
            type: "post",
            url: "core/processor.php",
            data: $data,
            contentType: "application/x-www-form-urlencoded"
        })
            .done(function(m){
                console.log(m);
                $("#response")
                    .fadeIn()
                    .removeClass("success").removeClass("partial").removeClass("error")
                    .addClass(m['class']).html(m['message']);
            });
    }else{
        $("#response")
            .removeClass("success").removeClass("partial").removeClass("error")
            .html('Completa todos los campos').addClass('error');
    }
});

