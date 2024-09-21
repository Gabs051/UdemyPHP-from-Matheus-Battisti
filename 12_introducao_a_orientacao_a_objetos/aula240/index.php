<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula240</title>
</head>
<body>
    <?php 
        class Pessoa {
            public $nome = "Gabriel";
        }

        if(class_exists("Pessoa")){
            echo "CLASSE TRUE<br>";
        }
        else{
            echo "CLASSE FALSE<br>";
        }

        var_dump(get_class_vars("Pessoa"));
    ?>
</body>
</html>