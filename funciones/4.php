<?php 
    /*Ejercicio 4:
    Escribe una función llamada "obtenerPrimos" que tome un número entero como argumento y devuelva un array con todos los números primos menores o iguales a ese número.*/

    function obtenerPrimos($numero){
        $array = [];

        for($i=2;$i <= $numero; $i++){
            $esPrimo = true;

            for($j = 2; $j <= $i / 2; $j++){
                if ($i % $j === 0) {
                    $esPrimo = false;
                    break;
                }
            }
            ($esPrimo) ? $array[] = $i : false;
        }
        return $array;
    }

    $primos = obtenerPrimos(11);

    foreach($primos as $p){
        echo $p . '<br>';
    }

?>