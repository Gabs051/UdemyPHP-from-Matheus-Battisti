<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula109</title>
</head>
<body>
    <?php 
        $nome = "Gabs";
        $valor = 6;

        if(is_int($nome) || is_float($nome)){
            $nome *= 2;
            if($nome > 100){
                echo "Este valor $nome é maior que 100<br>";
            }
            else{
                echo "O valor $valor não é maior que 100";
            }
        }
        else{
            echo "Não é um número<br>";
        }

        if(is_int($valor) || is_float($valor)){
            $valor *= 2;
            if($valor > 100){
                echo "Este valor $valor é maior que 100<br>";
            }
            else{
                echo "O valor $valor não é maior que 100";
            }
        }
        else{
            echo "Não é um número<br>";
        }
    ?>
</body>
</html>