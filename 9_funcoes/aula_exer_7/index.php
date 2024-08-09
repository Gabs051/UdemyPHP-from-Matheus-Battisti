<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer7</title>
</head>
<body>
    <?php 
        function isPrime($valor){
            if($valor < 2){
                return false;
            }
            else{
                for($i = 2; $i <= sqrt($valor); $i++){
                    if($valor % $i == 0){
                        return false;
                    }
                }
                return true;
            }

        }

        $valor = isPrime(5);
        if($valor){
            echo "o valor é primo.";
        }
        else{
            echo "o valor não é primo.";
        }
    ?>
</body>
</html>