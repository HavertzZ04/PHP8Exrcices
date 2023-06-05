<?php 
    /*Ejercicio 6:
    Escribe una función llamada "esPalindromo" que tome una cadena como argumento y devuelva true si es un palíndromo (es decir, se lee igual de izquierda a derecha que de derecha a izquierda), y false si no lo es.*/

    function esPalindromo($palabra){
        $reverse = strrev($palabra);
        $respuesta = ($reverse == $palabra) ? true : false;
        return $respuesta;
    }
    var_dump(esPalindromo("hooh"));








?>