<?php
    /*Implementa un sistema de gestión de empleados en una empresa. Cada empleado tiene un nombre, un salario y un departamento al que pertenece. Los departamentos pueden ser "Ventas", "Finanzas" y "Recursos Humanos". Los empleados de ventas reciben un bono adicional del 10% sobre su salario, los empleados de finanzas reciben un bono adicional del 5% y los empleados de recursos humanos reciben un bono adicional del 8%.

    Debes implementar las siguientes clases:

    Empleado: Representa a un empleado de la empresa. Debe tener atributos para el nombre, salario y departamento. Además, debe tener un método calcularSalarioTotal que calcule el salario total del empleado teniendo en cuenta el bono adicional según el departamento.

    Ventas: Clase que hereda de Empleado y representa a un empleado del departamento de ventas.

    Finanzas: Clase que hereda de Empleado y representa a un empleado del departamento de finanzas.

    RecursosHumanos: Clase que hereda de Empleado y representa a un empleado del departamento de recursos humanos.

    GestionEmpleados: Clase que contiene un método estático llamado mostrarSalarioTotalPorDepartamento que recibe un arreglo de empleados y muestra el salario total de cada empleado, separados por departamento.

    Asegúrate de crear instancias de los empleados en diferentes departamentos y utilizar el método estático de la clase GestionEmpleados para mostrar los salarios totales por departamento.*/

    class Empleado{

        public $nombre;
        public $salario;

        public function __construct($nombre, $salario){
            $this-> nombre = $nombre;
            $this-> salario = $salario;
        }

        public function calcularSalarioTotal($bono, $departamento){
            $this->salario += ($this->salario * $bono / 100); 
            echo "El salario de $this->nombre del departamento $departamento es $this->salario <br>";
        }
    }

    class Ventas extends Empleado{
        public function calcularSalarioTotal($bono = 10, $departamento = "Ventas"){
            parent:: calcularSalarioTotal($bono, $departamento);
        }
    }

    class Finanzas extends Empleado{
        public function calcularSalarioTotal($bono = 5, $departamento = "Finanzas"){
            parent:: calcularSalarioTotal($bono, $departamento);
        }
    }

    class Recursoshumanos extends Empleado{
        public function calcularSalarioTotal($bono = 8, $departamento = "RecursosHumanos"){
            parent:: calcularSalarioTotal($bono, $departamento);
        }
    }

    class GestionEmpleados{
        static function mostrarSalarioTotalPorDepartamento($empleados){
            foreach($empleados as $empleado){
                $empleado-> calcularSalarioTotal();
            }
        }
    }

    $empleados = [
        new Finanzas("Johan", 45873),
        new Finanzas("Angel", 58773),
        new Finanzas("Johan", 45873),

        new Ventas("Johan", 45873),
        new Ventas("Angel", 58773),
        new Ventas("Johan", 45873),

        new Recursoshumanos("Johan", 45873),
        new Recursoshumanos("Angel", 58773),
        new Recursoshumanos("Johan", 45873)

    ];

    GestionEmpleados::mostrarSalarioTotalPorDepartamento($empleados);

?>