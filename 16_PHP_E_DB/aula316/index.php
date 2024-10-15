<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new mysqli($host, $user, $pass, $db);

    $ano_ = 2000;

    $stmt = $conn -> prepare("DELETE FROM carros WHERE ano < ?");
    $stmt -> bind_param('i', $ano_);
    $stmt -> execute();

    $conn -> close();
?>