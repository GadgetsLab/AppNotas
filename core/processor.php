<?php
if ($_POST) {
    include 'calculate.php';
    $notas = $_POST['nota'];
    $promedios = $_POST['prom'];
    $total_prom = Calculate::totalProm($promedios);
    /*
    Validar que no sea superior al 100% del porcentaje
     */

    if($total_prom > 100){
        header("location: index.php");
    }else{
        $nota = Calculate::notaActual($notas, $promedios);
        if ($total_prom == 100) {
        /*
        Calcular 100% de la matería
         */
            echo $nota . '<br>';
            echo $total_prom . '<br>';
        }else{
            $necesaria = Calculate::notaNecesaria($nota, $total_prom);
        /*
        Calcular el promedio cuando no es igual a 100%
        */
            echo $nota . '<br>';

            echo $total_prom . '<br>';

            echo $necesaria;

        }
    }
}

