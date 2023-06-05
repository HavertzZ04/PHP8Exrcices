<?php
    /*Ejercicio 2:
    Escribe una función llamada "invertirCadena" que tome una cadena como argumento y devuelva la cadena invertida. Por ejemplo, si se le pasa la cadena "Hola", debe devolver "aloH".*/

    function invertirCadena($cadena){
         return strrev($cadena);
    };

    echo invertirCadena("Hola Mundo");

?>