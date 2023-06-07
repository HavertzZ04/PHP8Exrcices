<?php
    /* Ejercicio 6: Sistema de gestión de empleados

    En este ejercicio, vamos a crear un sistema de gestión de empleados utilizando clases, herencia y polimorfismo. El sistema debe ser capaz de manejar diferentes tipos de empleados, como "Gerente", "Desarrollador" y "Vendedor". Cada tipo de empleado tiene características y comportamientos específicos. Aquí están los requisitos:

    Crea una clase base llamada "Empleado" que tenga las siguientes propiedades:

    Nombre
    Edad
    Salario
    Crea clases derivadas para cada tipo de empleado:

    "Gerente":

    Tiene un bono adicional del 10% sobre el salario base.
    Implementa un método llamado "calcularSalarioTotal()" que calcula y muestra el salario total teniendo en cuenta el bono adicional.
    "Desarrollador":

    Tiene un bono adicional del 20% sobre el salario base.
    Implementa un método llamado "calcularSalarioTotal()" que calcula y muestra el salario total teniendo en cuenta el bono adicional.
    "Vendedor":

    Tiene una comisión del 5% sobre el salario base.
    Implementa un método llamado "calcularSalarioTotal()" que calcula y muestra el salario total teniendo en cuenta la comisión.
    Crea una clase llamada "GestionEmpleados" que tenga un método estático llamado "mostrarSalarioTotal()" que reciba un array de empleados y muestre el salario total de cada empleado.

    Crea al menos tres instancias de empleados (un gerente, un desarrollador y un vendedor), establece sus propiedades y utiliza el método "mostrarSalarioTotal()" para mostrar el salario total de cada empleado.*/



    class Empleado{
        public $nombre;
        public $edad;
        public $salario;

        public function __construct($nombre, $edad, $salario){
            $this-> nombre = $nombre;
            $this-> edad = $edad;
            $this-> salario = $salario;
        }

        public function calcularSalarioTotal($bono){
            $this-> salario += ($bono * $this-> salario);
            echo "$this->nombre, de $this->edad anios tendra un salario total este mes de $this->salario <br>";
        }
    }

    class Gerente extends Empleado{
        public function __construct($nombre,$edad ,$salario){
            parent::__construct($nombre, $edad, $salario);
        }

        public function calcularSalarioTotal($bono = 0.10){
            parent::calcularSalarioTotal($bono);
        }
    }

    class Desarrollador extends Empleado{
        public function __construct($nombre,$edad ,$salario){
            parent::__construct($nombre, $edad, $salario);
        }

        public function calcularSalarioTotal($bono = 0.20){
            parent::calcularSalarioTotal($bono);
        }
    }

    class Vendedor extends Empleado{
        public function __construct($nombre,$edad ,$salario){
            parent::__construct($nombre, $edad, $salario);
        }

        public function calcularSalarioTotal($bono = 0.05){
            parent::calcularSalarioTotal($bono);
        }

    }

    class GestionEmpleados{
         static function mostrarSalarioTotal($empleados){
            foreach ($empleados as $empleado){
                $empleado-> calcularSalarioTotal();
            }

         }
    }

    $empleados = [
        new Desarrollador("Johan", 24, 4125),
        new Gerente("Gadir", 20, 4895),
        new Vendedor("Angel", 18, 2125)

    ];

    GestionEmpleados::mostrarSalarioTotal($empleados);
?>