<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula146</title>
</head>
<body>
    <?php 
        function verificarNumber($numero){
            if($numero % 2 === 0){
                echo "O valor é par.<br>";
            }
            else{
                echo "O valor é impar.<br>";
            }
        }

        verificarNumber(7);
        verificarNumber(45);

    ?>
</body>
</html>