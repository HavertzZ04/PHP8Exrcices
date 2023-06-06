<?php
    /*Ejercicio 1:
    Crea una clase base llamada "Figura" con un método "calcularArea()". Luego, crea dos clases derivadas de "Figura": "Rectangulo" y "Circulo". Cada una de estas clases debe tener su propio método "calcularArea()" que calcule y devuelva el área correspondiente.*/

class Figura{
    public function calcularArea(){}
}

class Rectangulo extends Figura{
    public $base;
    public $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        $resultado = ($this->base * $this->altura);
        echo "El área del rectángulo es $resultado <br>";
    }
}

class Circulo extends Figura{
    public $radio;

    public function __construct($radio){
        $this->radio = $radio;
    }

    public function calcularArea(){
        $resultado = (3.1416 * ($this->radio ** 2));
        echo "El área del círculo es: $resultado <br>";
    }
}

$circulo1 = new Circulo(42);
$circulo1->calcularArea();

$rectangulo1 = new Rectangulo(12, 48);
$rectangulo1->calcularArea();

?>