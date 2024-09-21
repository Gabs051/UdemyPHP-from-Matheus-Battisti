<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula202</title>
</head>
<body>
    <?php 
        $nome = "Gabriel";
        $idade = 19;
        $solteiro = true;

        $array = compact("nome", "idade", "solteiro");
        var_dump($array);
    ?>
</body>
</html>