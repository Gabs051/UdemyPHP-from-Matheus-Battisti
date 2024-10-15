<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'agenda';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

        //Ativar o omodo de erros
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

    } catch (PDOException $e) {
        # code...
        $error = $e ->getMessage();
        echo "Erro: " . $error;
    }
?>