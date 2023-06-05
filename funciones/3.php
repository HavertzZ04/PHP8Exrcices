<?php 
    /*Ejercicio 3:
    Escribe una función llamada "contarVocales" que tome una cadena como argumento y devuelva la cantidad de vocales que contiene. Considera las vocales tanto en mayúsculas como en minúsculas.*/
    function contarVocales($cadena){
        
        $indice = 0;
        $contador = 0;
        $vocales = ['a','e','i','o','u','A','E','I','O','U'];
        
        do{ //in_array ayudar a saber si un dato esta dentro de otro
            if(in_array($cadena[$indice], $vocales)){ 
                $contador++;
            }       
            $indice++;
        } while ($indice < strlen($cadena));

        $mensaje = ($contador > 0) ? "Hay $contador vocales" : "No hay vocales";
        return $mensaje;
    };

    $cadena = 'HolaMundo';
    echo contarVocales($cadena);
?>