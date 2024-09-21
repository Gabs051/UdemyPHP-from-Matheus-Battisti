<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula239</title>
</head>
<body>
    <?php 
        $classPessoa = new class(){
            public $nome = "Gabs";

            public function mostrarNome(){
                echo "SEU NOME É: " . $this -> nome;
            }
        };

        $classPessoa -> mostrarNome();

    ?>
</body>
</html>