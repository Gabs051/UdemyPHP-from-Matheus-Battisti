<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula248</title>
</head>
<body>
    <?php 
        $data = new DateTime();
        echo $data -> format('d/m/Y') . "<br>";

        $data -> modify('+10 years');

        echo $data -> format('d/m/Y') . "<br>";
    ?>
</body>
</html>