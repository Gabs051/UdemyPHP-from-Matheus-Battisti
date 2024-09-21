<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer1</title>
</head>
<body>
    <?php 
        class Calculadora{

            public function somar($valor1, $valor2){
                return $valor1 + $valor2;
            }

            public function subtrair($valor1, $valor2){
                return $valor1 - $valor2;
            }

            public function multiplicar($valor1, $valor2){
                return $valor1 * $valor2;
            }

            public function dividir($valor1, $valor2){
                return $valor1 / $valor2;
            }
        }

        $calculo1 = new Calculadora;
        echo $calculo1 -> somar(10, 5) . "<br>";
        echo $calculo1 -> subtrair(10, 5) . "<br>";
        echo $calculo1 -> multiplicar(10, 5) . "<br>";
        echo $calculo1 -> dividir(10, 5) . "<br>";
    ?>
</body>
</html>