<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new mysqli($host, $user, $pass, $db);
    $id = 7;

    $marca_ = 'Bugatti';
    $modelo_ = 'Veyron';
    $ano_ = 2019;
    $preco_ = 1500000;

    $stmt = $conn -> prepare("UPDATE carros SET marca = ?, modelo = ?, ano = ?, preco = ? WHERE id_carro = ?");
    $stmt -> bind_param('ssidi', $marca_, $modelo_, $ano_, $preco_, $id);

    $stmt -> execute();

    $conn -> close();

?>