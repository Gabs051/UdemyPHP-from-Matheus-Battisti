<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula118</title>
</head>
<body>
    <?php 
        $contador = 4;
        while($contador <= 30){
            echo $contador . "<br>";

            if($contador === 24){
                break;
            }

            $contador += 2;
        }
    ?>
</body>
</html>