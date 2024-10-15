<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new mysqli($host, $user, $pass, $db);

    $marca = "Subaru";
    $modelo = "WRX 1992";
    $ano = 1992;
    $preco = 1300000.00;

    $stmt = $conn->prepare("INSERT INTO carros (marca, modelo, ano, preco) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("sssd", $marca, $modelo, $ano, $preco);
    $stmt->execute();
?>