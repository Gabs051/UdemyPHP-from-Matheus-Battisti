<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula228</title>
</head>
<body>
    <?php 
        class Carro {
            public $velocidadeMax;

            function setVelocidadeMaxima($velocidadeMax){
                $this -> velocidadeMax = $velocidadeMax;
            }

            function getVelocidadeMaxima($velocidadeMax){
                return $this -> velocidadeMax;
            }
        }

        $mazerati = new Carro;
        $mazerati -> setVelocidadeMaxima(259.45);

        echo $mazerati -> getVelocidadeMaxima($mazerati);
    ?>
</body>
</html>