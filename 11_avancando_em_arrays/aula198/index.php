<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula198</title>
</head>
<body>
    <?php 
        $array = [
            'nome' => 'Gabriel',
            'idade' => 19,
            'solteiro' => false,
            'dinheiro' => 2651
        ];

        echo array_key_exists('nome', $array) . "<br>";
        if(array_key_exists('sexo', $array)){
            echo "Existe";
        }
        else{
            echo "Não existe" . "<br>";
        }

        if(isset($array[19])){
            echo "Existe";
        }
    ?>
</body>
</html>