<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula150</title>
</head>
<body>
    <?php

        $array = [4, 5, 99, 8, 5.5, 6, 7, 88];

        function passaMaior($array){
            foreach($array as $passa){
                if($passa > 7){
                    $novo_array[] = $passa;
                }
            }

            return $novo_array;
        }

        $novoArray = passaMaior($array);
        print_r($novoArray);
    ?>
</body>
</html>