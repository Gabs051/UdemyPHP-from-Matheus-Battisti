<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula112003</title>
</head>
<body>
    <?php 
        function calcularDesconto($valor, $categoria){
            if($categoria === "eletrônicos"){
                $valor *= 0.90;
                echo "O seu produdo ganhou 10% de desconto<br> e vai custar R$$valor";
            }
            else if($categoria === "vestuário"){
                $valor *= 0.80;
                echo "O seu produdo ganhou 20% de desconto<br> e vai custar R$$valor";
            }
            else if($categoria === "alimentos"){
                $valor *= 0.95;
                echo "O seu produdo ganhou 5% de desconto<br> e vai custar R$valor";
            }
            else{
                echo "O seu produto não se encaixa para receber desconto.";
            }
        }

        $valor = 235.45;
        $categoria = "alimentos";
        calcularDesconto($valor, $categoria);
    ?>
</body>
</html>