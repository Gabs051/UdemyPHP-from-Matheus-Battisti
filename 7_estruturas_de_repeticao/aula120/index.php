<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula120</title>
</head>
<body>
    <?php 
        $a = 10;

        while($a > 0){
            if($a === 5 || $a === 7){
                echo "Pulou a execução $a <br>";

                $a -= 1;
            }

            echo "nào pulou $a <br>";
            $a -= 1;
        }
    ?>
</body>
</html>