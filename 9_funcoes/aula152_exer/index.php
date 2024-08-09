<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula152</title>
</head>
<body>
    <?php 
        function defineCorCarro($cor = "vermelho"){
            echo "A cor do carro é $cor.<br>";
        }

        defineCorCarro();
        defineCorCarro("azul");
        
    ?>
</body>
</html>