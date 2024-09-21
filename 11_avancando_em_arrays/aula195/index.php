<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula195</title>
</head>
<body>
    <?php 
        $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

        $slice1 = array_slice($array, 0, 6);

        var_dump($slice1);
    ?>
</body>
</html>