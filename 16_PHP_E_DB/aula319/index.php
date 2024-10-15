<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt = $conn -> prepare("INSERT INTO carros (marca, modelo, ano, preco) VALUES (:marca, :modelo, :ano, :preco)");

    $marca = 'Lamborghini';
    $modelo = 'Aventador SVJ';
    $ano = 2015;
    $preco = 5000000;

    $stmt -> bindParam(':marca', $marca);
    $stmt -> bindParam(':modelo', $modelo);
    $stmt -> bindParam(':ano', $ano);
    $stmt -> bindParam(':preco', $preco);

    $stmt -> execute();
?>