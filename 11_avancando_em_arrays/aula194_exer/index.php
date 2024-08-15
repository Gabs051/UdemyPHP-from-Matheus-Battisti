<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula194</title>
</head>
<body>
    <?php 
        $array_carro = ["jaguar", "3.0", "azul", "2018", "teto solar", "automático"];

        list($marca, $motor, $cor, $ano, $crt1, $crt2) = $array_carro;

        echo "-------------------------------------------------------<br>";
        echo "----------------FICHA TÉCNICA----------------<br>";
        echo "MARCA: $marca<br>";
        echo "MOTOR: $motor<br>";
        echo "COR: $cor<br>";
        echo "ANO: $ano<br>";
        echo "CARACTERISTICAS: $crt1, $crt2<br>";
        echo "-------------------------------------------------------<br>";
    ?>
</body>
</html>