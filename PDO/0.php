<?php

    $servidor = "localhost";
    $usuario = "campus";
    $contrasena = "campus2023";
    $db = "pruebas";

    try {
        $conectar = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $contrasena);

        $conectar -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $conectar-> query("SELECT * FROM `cero`");

        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultados as $e){
            echo "ID " . $e['id'] . ", Nombre: " . $e['nombre'] . "<br>";
        }

    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    $conectar = null;









?>