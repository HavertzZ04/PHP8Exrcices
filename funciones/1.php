<?php
    /*Ejercicio 1:
    Escribe una función llamada "esPar" que tome un número entero como argumento y devuelva true si es par, y false si es impar.*/

    $esPar = function($n){
        return ($n % 2 == 0) ? true : false;
    };

    var_dump($esPar(8));

?>