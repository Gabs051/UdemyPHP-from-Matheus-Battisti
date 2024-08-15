<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula189</title>
</head>
<body>
    <?php 
        $array = range(10, 45);

        for($i = 0; $i < count($array); $i++){
            echo $array[$i] + 6 . "<br>";
            if($array[$i] + 6 > 30){
                echo "O NÚMERO É MTO ALTO<br>";
            }
        }
    ?>
</body>
</html>