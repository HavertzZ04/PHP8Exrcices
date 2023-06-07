<?php

    /*Crea un sistema de gestión de productos en una tienda. Deberás implementar las siguientes clases:

    La clase Producto con los siguientes atributos:

    id: Identificador único del producto.
    nombre: Nombre del producto.
    precio: Precio del producto.
    stock: Cantidad disponible en el inventario.
    La clase Categoria con los siguientes atributos:

    id: Identificador único de la categoría.
    nombre: Nombre de la categoría.
    La clase Tienda con los siguientes atributos:

    productos: Un arreglo de objetos Producto.
    categorias: Un arreglo de objetos Categoria.
    La clase Tienda debe tener los siguientes métodos:

    agregarProducto($producto): Agrega un objeto Producto al arreglo de productos de la tienda.
    agregarCategoria($categoria): Agrega un objeto Categoria al arreglo de categorías de la tienda.
    buscarProductoPorNombre($nombre): Busca un producto por su nombre y devuelve el objeto Producto correspondiente, o null si no se encuentra.*/

    class Producto{
        public $id;
        public $nombre;
        public $precio;
        public $stock;

        public function __construct($id, $nombre, $precio, $stock){
            $this-> id = $id;
            $this-> nombre = $nombre;
            $this-> precio = $precio;
            $this-> stock = $stock;
        }
    }

    class Categoria{
        public $id;
        public $nombre;

        public function __construct($id, $nombre){
            $this-> id = $id;
            $this-> nombre = $nombre;
        }
    }

    class Tienda{
        public $productos = [];
        public $categorias = [];

        public function agregarProducto($producto){
            $this-> productos[] = $producto;
        }

        public function agregarCategoria($categoria){
            $this-> categorias[] = $categoria;
        }

        public function buscarProductoPorNombre($nombre){
            foreach($this->productos as $producto){
                if($producto->nombre === $nombre){
                    $respuesta = "El producto $nombre con id $producto->id, tiene un precio de $ $producto->precio y tenemos $producto->stock unidades en stock";
                    return $respuesta;
                }
            }
            return "El producto no existe";
        }    
    }

    $tienda = new Tienda();


    $tomates = new Producto(1, "Tomate", 2200, 4);
    $papas = new Producto(2, "Papa", 1700, 21);
    $zanahorias = new Producto(3, "Zanahoria", 2900, 12);
    $remolachas = new Producto(4, "Remolacha", 1800, 7);
    $frijols = new Producto(5, "Frijol", 4100, 11);
    $cebollas = new Producto(6, "Cebolla", 2500, 34);


    $tienda -> agregarProducto($tomates);
    $tienda -> agregarProducto($papas);
    $tienda -> agregarProducto($zanahorias); 
    $tienda -> agregarProducto($remolachas);
    $tienda -> agregarProducto($frijoles);
    $tienda -> agregarProducto($cebollas);

    echo $tienda -> buscarProductoPorNombre("Zanahoria");
?>