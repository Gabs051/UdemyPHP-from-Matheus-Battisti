<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula116</title>
</head>
<body>
    <?php
        $x = 0;

        $array = ["mousepad", 4, "Gabriel", true, 5.45, "Marcos", 9999, "HAHAHA", "Pandora", 5.5555, false, "magic", "cerveja"];

        while($x < count($array)){
            if(is_string($array[$x])){
                echo "STRINGS: $array[$x]<br>";
            }

            $x += 1;
        }
    ?>
</body>
</html>