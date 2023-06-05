<?php

    /*Ejercicio 7:
    Crea una clase llamada Car con las propiedades brand y model. Añade métodos para encender y apagar el carro, así como para acelerar y frenar. Lleva un registro de la velocidad actual del carro.*/

    class Car{
        private string $brand;
        private string $model;
        private bool $isOn;
        private int $speed;

        public function __construct(string $brand, string $model){
            $this -> brand = $brand;
            $this -> model = $model;
            $this -> isOn = false;
            $this -> speed = 0;
        }

        public function encender(){
            $this -> isOn = true;
            echo "El carro esta encendido <br>";
        }

        public function apagar(){
            if($this -> isOn === true){
                $this -> isOn = false;
                $this -> speed = 0;
                echo "El carro se ha apagado <br>";
            } else {
                echo "El carro ya estaba apagado <br>";
            }
        }

        public function acelerar(int $velocidad){
            if($this -> isOn === true){
                $resultado = $this -> speed += $velocidad;
                echo "El carro esta andando a $resultado KM/H <br>";
            } else {
                echo "Por favor encender el carro <br>";
            }
        }


        public function brake(int $amount) {
            if ($this->isOn) {
                $this->speed = max(0, $this->speed - $amount);
                echo "El carro ha frenado a " . $this->speed . " km/h.<br>";
            } else {
                echo "Enciende el carro para frenar.<br>";
            }
        }

        public function getSpeed(){
            echo "La velocidad actual es: $this->speed";
        }
    }

    $carro1 = new Car("Chevrolet", "Camaro");
    $carro1->encender();
    $carro1->acelerar(85);
    $carro1->brake(20);
    $carro1->apagar();


?>