<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula251</title>
</head>
<body>
    <?php 
        $data = new DateTime();
        $dataDois = new DateTime();

        $dataDois -> setDate(2005, 05, 06);
        $dataDois -> setTime(19, 12, 00);

        if($data > $dataDois){
            echo "DATA1 É MAIOR.";
        }
        else{
            echo "DATA2 É MAIOR.";
        }
    ?>
</body>
</html>