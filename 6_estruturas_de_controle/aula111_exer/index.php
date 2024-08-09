<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula111</title>
</head>
<body>
    <?php 
        $velocidade = 39;

        if($velocidade < 40){
            echo "Você está na velocidade correta.";
        }
        else if($velocidade == 40){
            echo "Tome cuidado motorista!";
        }
        else{
            echo "Você tomou uma multa por estár acima do limite.";
        }
    ?>
</body>
</html>