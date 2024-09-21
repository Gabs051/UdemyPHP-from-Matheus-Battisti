<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer09</title>
</head>
<body>
    <?php 
        function somaElementos($array){
            return array_sum($array);
        }

        $array = [99, 5, 2, 65, 6.6, 8, 59, 4];
        
        echo somaElementos($array);
    ?>
</body>
</html>