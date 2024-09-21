<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer10</title>
</head>
<body>
    <?php 
        function maiorElemento($array){
            $maior = 0;
           for($i = 0; $i < count($array); $i++){
            if($array[$i] > $maior){
                $maior = $array[$i];
            }
           }
           return $maior;
        }

        $array = [5, 9, 8, 4, 2, 15, 6, 55, 4156];
        $maior = maiorElemento($array);

        echo $maior;
    ?>
</body>
</html>