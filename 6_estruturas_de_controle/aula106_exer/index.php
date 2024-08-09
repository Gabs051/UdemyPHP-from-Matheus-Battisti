<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula106</title>
</head>
<body>
    <?php 
        $idade = 19;
        $nome = "Gabriel de Oliveira Machado";
        $dinheiro = 5.54;
        $array = [5, 6, 8, "Rs"];

        if(is_int($idade)){
            echo "a variavel idade é do tipo int<br>";
        }
        else{
            echo "a variavel idade não é do tipo int<br>";
        }

        if(is_int($nome)){
            echo "a variavel nome é do tipo int<br>";
        }
        else{
            echo "a variavel nome não é do tipo int<br>";
        }

        if(is_int($dinheiro)){
            echo "a variavel dinheiro é do tipo int<br>";
        }
        else{
            echo "a variavel dinheiro não é do tipo int<br>";
        }

        if(is_int($array)){
            echo "a variavel array é do tipo int<br>";
        }
        else{
            echo "a variavel array não é do tipo int<br>";
        }
    ?>
</body>
</html>