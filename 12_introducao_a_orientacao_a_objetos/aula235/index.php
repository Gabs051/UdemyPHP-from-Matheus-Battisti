<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula235</title>
</head>
<body>
    <?php 
        trait Apresentacao {
            public $nome = "Gabriel";
            public function apresentacaoDoNome(){
                echo $this -> nome;
            }
        }

        class CentralDeTraits {
            use Apresentacao;
        }

        $User = new CentralDeTraits;
        $User -> apresentacaoDoNome();
    ?>
</body>
</html>