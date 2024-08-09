<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula121</title>
</head>
<body>
    <?php 
        $array = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
        $cont = 0;
        while($cont < count($array)){
            if($array[$cont] === 30 || $array[$cont] === 40){
                echo "PULOU A EXECUÇÃO: " . $array[$cont] . "<br>";
                $cont += 1;

                continue;
            }

            echo "NÃO PULO A EXECUÇÃO: " . $array[$cont] . "<br>";
            $cont += 1;
        }
    ?>
</body>
</html>