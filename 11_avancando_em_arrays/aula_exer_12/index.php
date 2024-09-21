<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer12</title>
</head>
<body>
    <?php
        function ordenarNumeros($array){
            sort($array);
            var_dump($array);
        }

        $array = [54, 9, 56, 666, 8, 1];
        ordenarNumeros($array);
    ?>
</body>
</html>