<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula141</title>
</head>
<body>
    <?php
        function tribut($array){
            echo implode(", ", $array);
        }

        $array = ["Gabriel", "Lucas", "Eduardo", "Leonardo"];
        tribut($array);

    ?>
</body>
</html>