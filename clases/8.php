<?php
    /*Ejercicio 8:
    Crea una clase llamada Email con las propiedades sender, recipient y subject. Añade un método para enviar el correo electrónico, que simplemente imprima los detalles del mensaje.*/
    
    class Email{
        public $sender;
        public $recipient;
        public $subject;

        public function __construct($sender, $recipient, $subject){
            $this->sender = $sender;
            $this->recipient = $recipient;
            $this->subject = $subject;
        }

        public function correo(){
            $respuesta = "Sender: $this->sender <br> Recipient: $this->recipient <br> Subject: $this->subject <br>";
            echo $respuesta;
        }
    }

    $correo1 = new Email("Johan", "Gadir", "Buenos dias mi brotha");
    $correo1 -> correo();

?>