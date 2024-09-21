<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula215</title>
</head>
<body>
    <?php 
        $array = [4, 5, 6, 5, 2];
        $array2 = [2, 6, 9, 5, 1];

        $diff = array_diff($array, $array2);
        var_dump($diff);
    ?>
</body>
</html>