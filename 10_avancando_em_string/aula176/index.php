<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula176</title>
</head>
<body>
    <?php 
        $string = "testando a função explode";

        $array = explode(" ", $string);
        print_r($array);
        echo "<br>";

        $string2 = "Lista de compras: banana, maça, café, chá, colchão";

        $array2 = explode(",", $string2);
        print_r($array2);
    ?>
</body>
</html>