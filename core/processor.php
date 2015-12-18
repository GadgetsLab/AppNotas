<?php
if ($_POST) {
    include 'calculate.php';
    $notas = $_POST['nota'];
    $promedios = $_POST['prom'];
    $total_prom = Calculate::totalProm($promedios);
    header('Content-type: application/json; charset=utf-8');
    /*
        Validar que no sea superior al 100% del porcentaje
     */

    if($total_prom > 100){
        $response = ['class'=>'error','message'=>'Acaba de superar el 100%'];
    }else{
        $nota = Calculate::notaActual($notas, $promedios);

        if ($total_prom == 100) {

        /*
            Calcular 100% de la matería
         */
            $response = ['class'=>'success','message'=>'Nota definitiva(100%): '.$nota];
        }else{

        /*
            Calcular el promedio cuando no es igual a 100%
        */

            $necesaria = Calculate::notaNecesaria($nota, $total_prom);
            $necesaria = round($necesaria, 2);
            $prom_not_eval = 100 - $total_prom;
            if ($necesaria < 0) {
                $necesaria = 0;
            }
            $response = ['class'=>'partial', 'message'=>'Nota parcial('.$total_prom.'%): '.$nota.', Nota necesaria('.$prom_not_eval.'): '.$necesaria];


        }
    }
            echo json_encode($response, JSON_FORCE_OBJECT);
}

