<?php
    /*Ejercicio 2:
    Extiende la clase Person y crea una clase llamada Student. Añade una propiedad adicional llamada grade y sobrescribe el método introduce() para que también imprima el grado del estudiante. */

    class Person{
        public $name;
        public $age;
        public $grade;
        public function __construct($name, $age, $grade){ //Aqui creamos constructor y metodos de instansia
            $this -> name = $name;
            $this -> age = $age;
            $this -> grade = $grade;
        }
        public function introduce(){ //Esto es un metodo de instancia
            echo "Mi nombre es $this->name, tengo $this->age anos y mi grado es $this->grade";
        }
    }
    $johan = new Person("Johan", 24, "Sputnik");
    $johan -> introduce();





?>