<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula080</title>
</head>
<body>
    <?php 
        $valor1 = 10;
        $valor2 = 3.5;

        $nome = "Gabriel";
        $nome2 = 'Gabriel';

        if($valor1 > $valor2){
            echo "Resultado Verdadeiro no if<br>";
        }

        if($nome != $nome2){
            echo "Resultado falso no if";
        }
        else{
            echo "Resultado verdadeiro no else";
        }
    ?>
</body>
</html>