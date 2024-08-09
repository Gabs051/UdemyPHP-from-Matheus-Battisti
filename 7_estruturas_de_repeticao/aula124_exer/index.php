<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula124</title>
</head>
<body>
    <?php
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

        for($x=0; $x<count($array); $x++){

            if($array[$x] % 2 === 0){
                echo "VALOR É PAR: ". $array[$x] . "<br>";
            }
        }
    ?>
</body>
</html>