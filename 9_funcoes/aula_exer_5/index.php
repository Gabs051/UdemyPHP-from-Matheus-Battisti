<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula_exer_5</title>
</head>
<body>
    <?php 
        function sumEvenNumbers($valorInteiro){
            $contador = 1;
            $soma = 0;
            while($contador <= $valorInteiro){
                if($contador % 2 === 0){
                    $soma += $contador;
                }
                $contador += 1;
            }

            return $soma;
        }

        $x = 45;
        $soma = sumEvenNumbers($x);
        echo "A soma dos valores pares de 1 até $x é $soma";
    ?>
</body>
</html>