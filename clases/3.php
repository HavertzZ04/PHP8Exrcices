<?php

    /*Ejercicio 3:
    Crea una clase llamada Calculator que tenga dos métodos estáticos: add() y subtract(). Estos métodos deben recibir dos números como parámetros y devolver el resultado de la operación correspondiente. */

    class Calculator{ 
        public static function add($a, $b){
            return $$a + $b;
        }

        public static function subtract($a, $b){
            return $a - $b;
        }
    }
    //En este ejercicio creo metodos estaticos
    $suma = Calculator::add(5, 7);
    echo "El resultado de la suma es: $suma";

    $resta = Calculator::subtract(50, 12);
    echo "El resultado de la resta es: $resta";
?>