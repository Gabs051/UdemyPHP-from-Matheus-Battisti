<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula214</title>
</head>
<body>
    <?php 
        $array = [1, 2, 3];
        $array2 = [6, 9, 8];
        $arrayal = ["Gabs", 45, 5.5, true, [4, 5, 6]];

        $arrayjunto = array_merge($array, $array2, $arrayal);
        var_dump($arrayjunto);

        echo "<br>";

        $arrayjunto2 = array_merge($array, $array2, $arrayal[4]);
        var_dump($arrayjunto2);
    ?>
</body>
</html>