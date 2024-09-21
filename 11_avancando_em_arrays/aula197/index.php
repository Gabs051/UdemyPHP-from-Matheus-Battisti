<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula197</title>
</head>
<body>
    <?php 
        $carro = [
            'marca' => 'AUDI',
            'ano' => 2014,
            'motor' => '12V'
        ];

        $chave = array_keys($carro);
        print_r($chave);
        echo "<br>";

        $valor = array_values($carro);
        print_r($valor);
    ?>
</body>
</html>