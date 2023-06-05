<?php
    /*Ejercicio 4:
    Crea una clase llamada BankAccount con las propiedades balance y owner. Añade métodos para depositar y retirar dinero de la cuenta. Asegúrate de que el saldo no pueda ser negativo.*/

    class BankAccount{
        private $balance;
        private $owner;

        public function __construct($owner, $balanceInicial = 0){
            $this->owner = $owner;
            $this->balance = max(0, $balanceInicial);
        }

        public function depositar($dinero){
            if($dinero > 0){
                $this->balance += $dinero;
                echo "Depositaste: $dinero <br>";
            }
        }

        public function retirar($dinero){
            if($dinero > 0 && $dinero <= $this->balance){
                $this->balance -= $dinero;
                echo "Retiraste: $dinero <br>";
            }
        }

        public function getOwner(){
            echo "Tu cuenta es: $this->owner account <br>";
        }

        public function getBalance(){
            echo "Tu balance es: $this->balance <br>";
        }

    }

    $johan = new BankAccount("Johan", 450);
    $johan -> depositar(20);
    $johan -> retirar(245);
    $johan -> getOwner();
    $johan -> getBalance();
?>