<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula199</title>
</head>
<body>
    <?php 
        $array = [1, 2, 3, 4, 5];
        print_r($array);
        echo "<br>";
        $removidos = array_splice($array, 0, 2);

        print_r($array);
        echo "<br>";
        print_r($removidos);
    ?>
</body>
</html>