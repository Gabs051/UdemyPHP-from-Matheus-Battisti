<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula206</title>
</head>
<body>
    <?php 
        $array = [10, 45, 6, 59, 8, 88, 23, 6];

        function soma($a, $b){
            return $a + $b;
        }

        $resultado = array_reduce($array, "soma");
        echo $resultado;
    ?>
</body>
</html>