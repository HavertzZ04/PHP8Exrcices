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
    }





?>