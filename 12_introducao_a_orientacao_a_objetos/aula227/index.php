<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula227</title>
</head>
<body>
    <?php 
        class Animal {

            public $nome;
            function escolherNome($nome){
                $this -> nome = $nome;
            }
        }

        $frida = new Animal;

        echo "O nome do animal é: " . $frida -> nome . "<br>";

        $frida -> escolherNome("Frida");

        echo "O nome do animal é: " . $frida -> nome . "<br>";
    ?>
</body>
</html>