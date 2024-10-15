<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);

    $q = "SELECT * FROM clientes";

    $result = $conn->query($q);

    $itens = $result -> fetch_assoc();
    var_dump($itens);
?>