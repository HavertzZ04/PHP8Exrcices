<?php
    /*Ejercicio 5:
    Escribe una función llamada "calcularPromedio" que tome un array de números como argumento y devuelva el promedio de esos números.*/

    $array = [4, 2, 5, 10, 12, 5];
    function calcularPromedio($array){
        $elementos = count($array);
        $total = 0;
        for($i = 0 ; $i < $elementos; $i++){
            $total += $array[$i];
        }
        return $total / $elementos;
    }

    echo calcularPromedio($array);

?>