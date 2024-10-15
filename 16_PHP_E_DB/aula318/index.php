<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'curso_php';

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
?>