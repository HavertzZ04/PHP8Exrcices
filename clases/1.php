<?php
    /*Ejercicio 1:
    Crea una clase llamada Person que tenga dos propiedades: name y age. Añade un método llamado introduce() que imprima "Hola, mi nombre es [nombre] y tengo [edad] años". */

    class Person{
        public $name;
        public $age;
        public function __construct($name, $age){
            $this -> name = $name;
            $this -> age = $age;
        }
        public function introduce(){ //Esto es un metodo de instancia
            echo "Hola, mi nombre es $this->name y tengo $this->age anos";
        }
    }

    $johan = new Person("Johan", 24);
    $johan -> introduce(); 
?>