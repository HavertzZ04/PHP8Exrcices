<?php
    /*Ejercicio de ejemplo:
    Crear una clase base llamada "Animal" con las siguientes propiedades y métodos:

    Propiedades: "nombre" y "edad".
    Método: "hacerSonido()", que imprime "El animal hace un sonido".

    Luego, crea dos clases derivadas de "Animal": "Perro" y "Gato". Cada una de estas clases debe tener su propio método "hacerSonido()", que imprima el sonido característico del perro y del gato, respectivamente. */

    class Animal{
        public $nombre;
        public $edad;

        public function __construct($nombre, $edad){
            $this-> nombre = $nombre;
            $this-> edad = $edad;
        }

        public function hacerSonido(){
            echo "El animal hace un sonido <br>";
        }
    }

    class Perro extends Animal{
        public function hacerSonido(){
            echo "El perro $this->nombre ladra <br>";
        }
    }

    class Gato extends Animal {
        public function hacerSonido(){
            echo "El gato $this->nombre mauya <br>";
        }
    }

    $animal = new Animal("Animalito", 3);
    $animal -> hacerSonido();

    $perro1 = new Perro("Firulais", 2);
    $perro1 -> hacerSonido();

    $gato1 = new Gato("Pacha", 2);
    $gato1 -> hacerSonido();





?>