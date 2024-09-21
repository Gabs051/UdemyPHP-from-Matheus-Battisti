<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula250</title>
</head>
<body>
    <?php 
        $dataA = new DateTime();
        $dataB = new DateTime();

        $dataA -> setDate(2005, 05, 06);

        $diff = $dataB -> diff($dataA);

        print_r($diff);
    ?>
</body>
</html>