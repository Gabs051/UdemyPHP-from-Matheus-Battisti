<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula125</title>
</head>
<body>
    <?php
        $array = [];
        for($x = 0; $x < 10; $x++){
            $array[$x] = random_int(0, 9);

        }

        print_r($array);
    ?>
</body>
</html>