<?php
    /*Ejercicio 6:
    Crea una clase llamada Circle con la propiedad radius. Añade métodos para calcular el área y la circunferencia del círculo.*/
    
    class Circule{
        public $radius;

        public function __construct($radius){
            $this->radius = $radius;
        }

        public function area(){
            $resultado = 3.1416 * ($this->radius ** 2);
            echo "El area del circulo es: $resultado <br>";
        }

        public function circunferencia(){
            $resultado = 2 * 3.1416 * $this->radius;
            echo "La circunferencia del circulo es: $resultado <br>";
        }
    }

    $circulo1 = new Circule(5);
    $circulo1->area();
    $circulo1->circunferencia();

?>