<?php
    /*Ejercicio 7, sistema de gestion de biblioteca:
    
    Crea una clase llamada Libro que tenga los siguientes atributos:
    titulo (string): el título del libro.
    autor (string): el autor del libro.
    disponible (bool): indica si el libro está disponible para préstamo o no.
    La clase Libro debe tener los siguientes métodos:

    __construct($titulo, $autor): constructor que recibe el título y autor del libro y establece los valores correspondientes.
    prestar(): marca el libro como no disponible.
    devolver(): marca el libro como disponible.
    Crea una clase llamada Usuario que represente a un usuario de la biblioteca. La clase debe tener los siguientes atributos:

    nombre (string): el nombre del usuario.
    librosPrestados (array): un array que almacenará los libros prestados al usuario.
    La clase Usuario debe tener los siguientes métodos:

    __construct($nombre): constructor que recibe el nombre del usuario y establece el valor correspondiente.
    prestarLibro($libro): recibe un objeto de la clase Libro y lo agrega al array librosPrestados.
    devolverLibro($libro): recibe un objeto de la clase Libro y lo elimina del array librosPrestados.
    Crea una clase llamada Biblioteca que tenga los siguientes atributos:

    libros (array): un array que almacenará los objetos de la clase Libro.
    usuarios (array): un array que almacenará los objetos de la clase Usuario.
    La clase Biblioteca debe tener los siguientes métodos:

    agregarLibro($libro): recibe un objeto de la clase Libro y lo agrega al array libros.
    agregarUsuario($usuario): recibe un objeto de la clase Usuario y lo agrega al array usuarios.
    prestarLibro($libro, $usuario): recibe un objeto de la clase Libro y un objeto de la clase Usuario, y realiza las siguientes acciones:
    Verifica si el libro está disponible. Si no lo está, muestra un mensaje indicando que el libro no está disponible.
    Si el libro está disponible, marca el libro como no disponible, agrega el libro al array librosPrestados del usuario y muestra un mensaje indicando que el libro ha sido prestado exitosamente.
    devolverLibro($libro, $usuario): recibe un objeto de la clase Libro y un objeto de la clase Usuario, y realiza las siguientes acciones:
    Verifica si el libro está prestado al usuario. Si no lo está, muestra un mensaje indicando que el usuario no tiene ese libro prestado.
    Si el libro está prestado al usuario, marca el libro como disponible, elimina el libro del array librosPrestados*/

    class Libro{
        public string $titulo;
        public string $autor;
        public bool $disponible;

        public function __construct($titulo, $autor, $disponible = true){
            $this-> titulo = $titulo;
            $this-> autor = $autor;
            $this -> disponible = $disponible;
        }

        public function prestar(){
            $this-> disponible = false;
        }

        public function devolver(){
            $this->disponible = true;
        }
    }

    class Usuario{
        public string $nombre;
        public array $librosPrestados = [];


        public function __construct($nombre){
            $this->nombre = $nombre;
        }

        public function prestarLibro($libro){
            if($libro->disponible){
                $libro->prestar();
                $this->librosPrestados[] = $libro;
                echo "El libro $libro->titulo ha sido prestado a $this->nombre <br>";
            } else {
                echo "El libro $libro->titulo no está disponible en este momento <br>";
            }
        }

        public function devolverLibro($libro){
            $index = array_search($libro, $this->librosPrestados);
            if($index == true){
                $libro->devolver();
                unset($this->librosPrestados[$index]);
                echo "El libro $libro->titulo ha sido devuelto por $this->nombre <br>";
            } else {
                echo "No tienes prestado el libro $libro->titulo <br>";
            }

        }
    }

    class Biblioteca{

        public array $libros = [];
        public array $usuarios = [];

        public function agregarLibro($libro){
            $this->libros[] = $libro;

        }

        public function agregarUsuario($usuario){
            $this->usuarios[] = $usuario;

        }

        public function prestarLibro($libro, $usuario){
            if (in_array($libro, $this->libros)) {
                $usuario->prestarLibro($libro);
            } else {
                echo "El libro $libro->titulo no está disponible en la biblioteca. <br>";
            }
        }

        public function devolverLibro($libro, $usuario){
            if (in_array($libro, $this->libros)) {
                $usuario->devolverLibro($libro);
            } else {
                echo "El libro $libro->titulo no está disponible en la biblioteca <br>";
            }
        }
        
    }

    $libro1 = new Libro("Piratas del Caribe", "Johan Carvajal");
    $usuario1 = new Usuario("Juan");
    $biblioteca = new Biblioteca();

    $biblioteca->agregarLibro($libro1);
    $biblioteca->agregarUsuario($usuario1);

    $biblioteca->prestarLibro($libro1, $usuario1);
    $biblioteca->prestarLibro($libro1, $usuario1); 

    $biblioteca->devolverLibro($libro1, $usuario1);
    $biblioteca->devolverLibro($libro1, $usuario1);
?>