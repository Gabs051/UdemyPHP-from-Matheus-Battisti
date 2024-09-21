<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula201</title>
</head>
<body>
    <?php 
        $array = [
            'cor' => 'roxo',
            'animal' => 'canguru',
            'forma' => 'circulo'
        ];

        extract($array);

        echo "$cor <br>";
        echo "$animal <br>";
        echo "$forma <br>";
    ?>
</body>
</html>