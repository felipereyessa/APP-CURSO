<?php
    $servidor = "localhost"; // 127.0.0.1
    $baseDeDatos = "app"; // Nombre de la base de datos
    $usuario = "root";
    $clave = "";

    //Generar conexion
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $clave);
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>