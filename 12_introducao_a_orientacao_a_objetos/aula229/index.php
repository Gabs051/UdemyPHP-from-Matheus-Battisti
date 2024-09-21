<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula229</title>
</head>
<body>
    <?php 
        class Humano {
            public const OLHOS = 2;
            public const ALTURA = 1.71;
            public const PESO = 84;
        }

        $pessoa1 = new Humano;
        echo $pessoa1::PESO . "<br>";
    ?>
</body>
</html>