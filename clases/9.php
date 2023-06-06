<?php
    /*Ejercicio 9:
    Crea una clase llamada Stack que simule una pila. Debe tener métodos para agregar un elemento a la pila (push()), quitar un elemento de la pila (pop()) y obtener el elemento en la parte superior de la pila sin eliminarlo (peek()). */


    class Stack{
        public $pila = [];

        public function __construct(){
            $this-> pila = $pila = [];
        }

        public function agregar($elemento){
            array_push($this->pila, $elemento);
            echo "El elemento $elemento fue agregado a la pila. <br>";
        }

        public function quitar(){
            $quitado = array_pop($this->pila);
            echo "El elemento $quitado fue eliminado de la pila.<br>";
        }

        public function obtener(){
            $tomado = end($this->pila);
            echo "El elemento $tomado esta en el top de la pila<br>";
        }
    };


    $obejeto1 = new Stack();
    $obejeto1 ->agregar("comida");
    $obejeto1 ->agregar("salsa");
    $obejeto1 ->agregar("helados");
    $obejeto1 ->agregar("perros");
    $obejeto1 ->quitar();
    $obejeto1 ->obtener();

?>