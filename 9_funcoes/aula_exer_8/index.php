<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer8</title>
</head>
<body>
    <?php 
        function sumDigits($valor){
            $soma = 0;
            for($i = 0; $i < strlen($valor); $i++){
                $soma += intval($valor[$i]);
            }

            return $soma;
        }

        $soma = sumDigits("45600");
        echo $soma;
    ?>
</body>
</html>