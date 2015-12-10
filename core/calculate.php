<?php

    class Calculate
    {

        public static function totalProm(array $prom){
            $prom_evaluado = 0;
            foreach ($prom as $p) {
                $prom_evaluado = $prom_evaluado + $p;
            }
            return $prom_evaluado;
        }

        public static function notaActual(array $notas, array $promedios){
            $nota = 0;
            for($a = 0; $a < count($notas); $a++){
                $nota = $notas[$a]*($promedios[$a]/100) + $nota;
            }
            return $nota;
        }

        public static function notaNecesaria($nota, $prom){
            $a = 3 - $nota;
            $p = (100 - $prom)/100;
            $x = $a/$p;
            return $x;
        }
    }

?>