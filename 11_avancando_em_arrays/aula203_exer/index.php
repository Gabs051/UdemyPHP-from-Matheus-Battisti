<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula203</title>
</head>
<body>
    <?php 
        $nome = "Cachorro";
        $tamanho = "Pequeno";
        $idade = 2;
        $cor = "branco e preto";
        $raca = "vira-lata";

        $array = compact("nome", "tamanho", "idade", "cor", "raca");

        foreach($array as $key => $valor){
            echo "ITEM ATUAL: $key<br>";
            echo "VALOR ATUAL: $valor<br>";
            echo "-----------------------<br>";
        }
    ?>
</body>
</html>