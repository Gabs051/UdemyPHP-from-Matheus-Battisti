<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula093</title>
</head>
<body>
    <?php 
        if(5 > 2){
            echo "Condição IF sem NOT<br>";
        }
        if(!(5 > 2)){
            echo "Condição IF com NOT, mas sem retorno<br>";
        }
        if(!(5 > 20)){
            echo "Condição IF com NOT, retornando";
        }
    ?>
</body>
</html>