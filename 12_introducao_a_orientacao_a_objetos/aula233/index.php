<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula233</title>
</head>
<body>
    <?php 
        class Jogo {
        }

        $GodOfWar = new Jogo;

        if($GodOfWar instanceof Jogo){
            echo "GodOfWar é da heranca.";
        }
        else{
            echo "GodOfWar não é da heranca.";
        }
    ?>
</body>
</html>