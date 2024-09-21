<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula226</title>
</head>
<body>
    <?php 
        class Pessoa {
            public $nome;
            public $idade;

            function andar($qntdMetros){
                echo "A pessoa andou $qntdMetros metros.<br>";
            }
        }

        $gabriel = new Pessoa;
        $gabriel -> nome = "Gabriel";
        $gabriel -> idade = 19;

        echo $gabriel -> nome . "<br>";
        echo $gabriel -> idade . "<br>";
        echo $gabriel -> andar(45);
    ?>
</body>
</html>