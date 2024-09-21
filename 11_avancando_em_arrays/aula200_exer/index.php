<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula200</title>
</head>
<body>
    <?php 
        $array = ["batata", "maçã", "feijão", "arroz"];
        print_r($array);
        echo "<br>";

        $removido = array_splice($array, 3, 3);

        print_r($array);
        echo "<br>";

        print_r($removido);
    ?>
</body>
</html>