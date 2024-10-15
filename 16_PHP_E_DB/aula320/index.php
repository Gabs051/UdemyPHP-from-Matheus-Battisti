<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'curso_php';

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $marca_ = 'Ferrari';
    $modelo_ = 'La Ferrari';
    $id_ = 9;

    $stmt = $conn -> prepare("UPDATE carros SET marca = :marca, modelo = :modelo WHERE id_carro = :id");

    $stmt -> bindParam(':id', $id_);
    $stmt -> bindParam(':marca', $marca_);
    $stmt -> bindParam(':modelo', $modelo_);

    $stmt -> execute();
?>