<?php
    /*Ejercicio 8:
    Escribe una función llamada "eliminarDuplicados" que tome un array como argumento y devuelva un nuevo array con los elementos únicos, sin duplicados.*/

    function eliminarDuplicados($texto){
        $array = str_split($texto); //Hace que una cadena de texto se vuelva un array
        $resultado = array_unique($array); //Elimina los caracteres repetidos
        return $resultado = join("", $resultado); //Convierte un array a texto
    }

    var_dump(eliminarDuplicados("Hola, mejor amigo mio Joel."));
?>