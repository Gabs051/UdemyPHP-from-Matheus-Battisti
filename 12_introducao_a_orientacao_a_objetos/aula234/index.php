<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula234</title>
</head>
<body>
    <?php 
        interface Caracteristicas {
            public function falar();

            const nome = "Gabriel";
        }

        class Humano implements Caracteristicas {
            public $idade = 29;

            public function falar()
            {
                echo "Hello World!<br>";
                echo "Bem-vindo " . self::nome;
            }
        }

        $gabs = new Humano;
        $gabs -> falar();
    ?>
</body>
</html>