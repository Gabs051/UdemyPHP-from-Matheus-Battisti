<?php
    class Pessoa{
        function falar(){
            echo "Olá pessoa!";
        }
    }

    $gabriel = new Pessoa();
    $gabriel-> nome = "Gabriel";
    echo $gabriel-> nome;
    echo "<br>";
    $gabriel->falar();
?>