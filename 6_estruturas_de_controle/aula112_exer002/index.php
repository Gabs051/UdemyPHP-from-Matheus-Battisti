<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula112002</title>
</head>
<body>
    <?php 
        function verificarAcesso($idade, $acess){
            if($idade >= 18 && $acess === true){
                echo "Acesso autorizado.";
            }
            else if($idade < 18){
                echo "Acesso negado. Idade mínima requerida: 18 anos.";
            }
            else if($idade >= 18 && $acess !== true){
                echo "Acesso negado. Autorização necessária.";
            }
        }

        $idade = 19;
        $acess = false;

        verificarAcesso($idade, $acess);
    ?>
</body>
</html>