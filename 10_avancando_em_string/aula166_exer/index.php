<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula166</title>
</head>
<body>
    <?php 
        $string = "O rato roeu a roupa do rei de Roma";
        $qndA = 0;
        for($i = 0; $i < strlen($string); $i++){
            if($string[$i] === "a"){
                $qndA += 1;
            }
        }

        echo "Existem $qndA letras A na string: '$string'.";
    ?>
</body>
</html>