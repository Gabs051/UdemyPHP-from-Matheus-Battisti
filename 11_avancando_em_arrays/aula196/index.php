<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula196</title>
</head>
<body>
    <?php 
        $array = ["Gabs", 19, false, "Edu", 5.5, true];

        var_dump(array_chunk($array, 3));
    ?>
</body>
</html>