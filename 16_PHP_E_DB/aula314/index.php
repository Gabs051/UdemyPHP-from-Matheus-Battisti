<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 4;

    $stmt = $conn->prepare("SELECT * FROM carros WHERE id_carro = ?");
    $stmt->bind_param('i', $id);

    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_row();
    print_r($item);

    $conn->close();
?>