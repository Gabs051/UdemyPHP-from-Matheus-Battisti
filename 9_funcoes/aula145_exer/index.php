<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula145</title>
</head>
<body>
    <?php 
        function VerificarCadastro($nome, $idade){
            echo "Olá " . $nome . " sua idade é de " . $idade . " anos.";
        }

        VerificarCadastro("Gabs", 19);
    ?>
</body>
</html>