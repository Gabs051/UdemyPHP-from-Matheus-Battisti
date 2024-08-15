<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula192</title>
</head>
<body>
    <?php
        $contador = 0;
        $array = [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12]
        ];

        foreach($array as $linha){
            $contador += 1;
            echo "$contador º array<br>";
            foreach($linha as $coluna){
                echo "|  $coluna   ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>