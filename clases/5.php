<?php
    /*Ejercicio 5:
    Crea una clase llamada Rectangle con las propiedades width y height. Añade métodos para calcular el área y el perímetro del rectángulo.*/

    class Rectangle{
        public $width;
        public $height;

        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }

        public function area(){
            $resultado = $this->width * $this->height;
            echo "El area del rectangulo es: $resultado <br>";
        }

        public function perimetro(){
            $resultado = 2 * ($this->width + $this->height);
            echo "El perimetro del rectangulo es: $resultado <br>";
        }
    }

    $rectangulo1 = new Rectangle(5, 20);
    $rectangulo1 -> perimetro();
    $rectangulo1 -> area();

?>