<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt = $conn -> prepare("SELECT * FROM carros");

    $stmt -> execute();
    $result = $stmt -> fetchAll();

    foreach($result as $item) {
        echo "MARCA: " . $item['marca'] . "<br>";
        echo "MODELO: " . $item['modelo'] . "<br>";
        echo "ANO: " . $item['ano'] . "<br>";
        echo "PREÇO: R$" . $item['preco'] . "<br>";
        echo "<br>";
    }
?>