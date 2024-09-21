<!DOCTYPE html>
<html lang=pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula209</title>
</head>
<body>
    <?php 
        $array = [
            "Matheus" => 15,
            "Laisa" => 14,
            "Gabriel" => 19
        ];

        asort($array);
        var_dump($array);
        echo "<br>";

        arsort($array);
        var_dump($array);
        echo "<br>";

        ksort($array);
        var_dump($array);
        echo "<br>";
    ?>
</body>
</html>