<?php
    /*Ejercicio: Crear un sistema de reservas de vuelos.

    Especificaciones:

    Crea una clase Vuelo con las siguientes propiedades: origen, destino, fecha, hora, asientos_disponibles.
    Crea una clase Pasajero con las siguientes propiedades: nombre, apellido, edad, documento.
    Crea una clase Reserva con las siguientes propiedades: vuelo, pasajero.
    La clase Reserva debe tener un método realizarReserva() que verifique si hay asientos disponibles en el vuelo y realice la reserva para el pasajero. Debe restar uno al número de asientos disponibles y mostrar un mensaje indicando si la reserva fue exitosa o no.
    Crea una clase GestorVuelos con una propiedad vuelos que almacene los vuelos disponibles y un método mostrarVuelosDisponibles() que muestre los vuelos con sus respectivas fechas, horas y asientos disponibles.
    Crea una clase GestorReservas con una propiedad reservas que almacene las reservas realizadas y un método mostrarReservas() que muestre las reservas realizadas con los datos del pasajero y el vuelo correspondiente.
    Recuerda instanciar los objetos y realizar algunas reservas para probar el sistema.*/


    class Vuelo{
        public $origen;
        public $destino;
        public $fecha;
        public $hora;
        public $asientos_disponibles;

        public function __construct($origen, $destino, $fecha, $hora, $asientos_disponibles){
            $this-> origen = $origen;
            $this-> destino = $destino;
            $this-> fecha = $fecha;
            $this-> hora = $hora;
            $this-> asientos_disponibles = $asientos_disponibles;
        }
    }

    class Pasajero{
        public $nombre;
        public $apellido;
        public $edad;
        private $documento;

        public function __construct($nombre, $apellido, $edad, $documento){
            $this-> nombre = $nombre;
            $this-> apellido = $apellido;
            $this-> edad = $edad;
            $this-> documento = $documento;
        }
    }

    class Reserva{
        public $vuelo;
        public $pasajero;

        public function __construct($vuelo, $pasajero){
            $this-> vuelo = $vuelo;
            $this-> pasajero = $pasajero;
        }

        public function realizarReserva(){

        }
    }

    class GestorVuelos{
        public $vuelos = [];

        public function __construct($vuelos){
            $this-> vuelos = $vuelos = [];
        }

        public function mostrarVuelosDisponible(){

        }

    }

    class GestorReservas{
        public $reservas = [];

        public function __construct($reservas){
            $this-> reservas = $reservas = [];
        }

        public function mostrarReservas(){

        }
    }


?>