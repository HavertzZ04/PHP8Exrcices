<?php

/*Ejercicio 2:
Crea una clase base llamada "Vehiculo" con las propiedades "marca" y "modelo". Luego, crea dos clases derivadas de "Vehiculo": "Automovil" y "Motocicleta". Cada una de estas clases debe tener su propio método "imprimirInformacion()" que imprima la marca y el modelo del vehículo correspondiente. */

    class Vehiculo{
        public $marca;
        public $modelo;

        public function __construct($marca, $modelo){
            $this-> marca = $marca;
            $this-> modelo = $modelo;
        }

        public function imprimirInformacion(){}
    }

    class Automovil extends Vehiculo{
        public function __construct($marca, $modelo){
            parent::__construct($marca, $modelo);
        }

        public function imprimirInformacion(){
            echo "El automovil es $this->marca y es modelo: $this->modelo <br>";
        }
    }

    class Motocicleta extends Vehiculo{
        public function __construct($marca, $modelo){
            parent::__construct($marca, $modelo);
        }

        public function imprimirInformacion(){
            echo "La moticicleta es $this->marca y es modelo: $this->modelo <br>";
        }
    }

    $auto1 = new Automovil("Chevrolet", 1992);
    $auto1 -> imprimirInformacion();

    $moto1 = new Motocicleta("Suzuki", 2008);
    $moto1 -> imprimirInformacion();
?>