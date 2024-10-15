<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "curso_php";

    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn -> connect_error){
        echo "Erro na conexão! <br>";
        echo "Erro: " . $conn -> connect_error;
    }
?>