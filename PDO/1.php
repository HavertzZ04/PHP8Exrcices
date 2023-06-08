<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = "localhost";
    $user = "campus";
    $pw = "campus2023";
    $db = "pruebas";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pw);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn-> query("SELECT * FROM uno");
    
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row["id"] . "<br>";
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Apellido: " . $row["apellido"] . "<br>";
            echo "Edad: " . $row["edad"] . "<br><br>";
        }

    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $conn = null;








?>