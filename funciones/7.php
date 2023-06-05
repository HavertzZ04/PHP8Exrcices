<?php
    /*Ejercicio 7:
    Escribe una función llamada "invertirArray" que tome un array como argumento y devuelva un nuevo array con los elementos en orden inverso.*/

    $array = [true, 'Johan', 45, false, '12', null];
    function invertirArray($array){
        $nuevoArray = [];
        $cantidad = count($array);
        for($i = 0; $i < $cantidad; $i++){
            array_unshift($nuevoArray, $array[$i]);
        }
        return json_encode($nuevoArray);
    }

    echo invertirArray($array);






?>