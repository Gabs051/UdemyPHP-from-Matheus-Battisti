<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula238</title>
</head>
<body>
    <?php 
        class Carros {
            public $marca;
            public $motor;
            public $cor;

            public function __construct($marca, $motor, $cor)
            {
                $this -> marca = $marca;
                $this -> motor = $motor;
                $this -> cor = $cor;
            }

            public function fichaTecnica(){
                echo "MODELO: " . $this -> marca . "<br>";
                echo "MOTOR: " . $this -> motor . "<br>";
                echo "COR: " . $this -> cor;
            }
        }

        $carro1 = new Carros("Honda", "2jz", "Roxo");
        $carro1 -> fichaTecnica();

    ?>
</body>
</html>