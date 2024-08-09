<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula154</title>
</head>
<body>
    <?php 
        function listaMercado($array){
            return implode(", ", $array);
        }

        $array = ["maça", "banana", "vinho", "goiaba"];
        echo listaMercado($array);
    ?>
</body>
</html>