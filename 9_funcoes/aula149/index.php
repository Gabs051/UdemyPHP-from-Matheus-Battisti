<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula149</title>
</head>
<body>
    <?php 
        $a = 10;

        function testeEscopo(){
            $a = 5;

            echo "ESCOPO LOCAL DE A: $a. <br>";
        }

        testeEscopo();
        echo "ESCOPO GLOBAL DE A: $a. <br>";
    ?>
</body>
</html>