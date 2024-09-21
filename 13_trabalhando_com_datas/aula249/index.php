<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula249</title>
</head>
<body>
    <?php 
        $data = new DateTime();

        print_r($data);
        echo "<br>";

        $data -> setDate(2005, 05, 06);
        $data -> setTime(19, 12, 00);

        print_r($data);
        echo "<br>";
    ?>
</body>
</html>