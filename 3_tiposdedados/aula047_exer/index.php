<?php 
    $caracter_pessoa = [
        'Nome' => 'Gabriel de Oliveira',
        'Idade' => 15,
        'Cor da pele' => 'pardo'
    ];

    if ($caracter_pessoa['Idade'] >= 18) {
        echo "Olá ". $caracter_pessoa['Nome'] .", você é maior de idade.<br>";
    }
    else{
        echo "Olá ". $caracter_pessoa['Nome'] .", você não é maior de idade. Você tem apenas ". $caracter_pessoa['Idade'] ." anos.";
    }
?>