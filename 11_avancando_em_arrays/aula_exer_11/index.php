<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer11</title>
</head>
<body>
    <?php 
        function encontrarPares($array){
            foreach($array as $valor){
                if($valor % 2 === 0){
                    $array_par[] = $valor;
                }
            }

            return $array_par;
        }

        $array = range(0, 10);

        $array_par = encontrarPares($array);
        var_dump($array_par);
    ?>
</body>
</html>