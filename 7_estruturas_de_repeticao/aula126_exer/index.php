<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula126</title>
</head>
<body>
    <?php
        for($x = 0; $x < 20; $x++){
            $array[$x] = random_int(0, 100);

            $cont = 0;
            echo "VALORES DESSA PASSADA: <br>";
            while($cont <= count($array)){
                if($array[$cont] % 2 !== 0){
                echo $array[$cont] . "<br>";
                }
                $cont += 1;
            }
        }
    ?>
</body>
</html>