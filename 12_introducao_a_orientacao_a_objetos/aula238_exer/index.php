<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula238</title>
</head>
<body>
    <?php 
        class FichaAnimal {
            public $raca;
            public $nome;
            public $cor;
            public $idade;

            public function __construct($raca, $nome, $cor, $idade)
            {
                $this -> raca = $raca;
                $this -> nome = $nome;
                $this -> cor = $cor;
                $this -> idade = $idade;
            }

            public function MostrarFichaAnimal(){
                echo "NOME DO ANIMAL: " . $this -> nome . "<br>";
                echo "RAÇA:           " . $this -> raca . "<br>";
                echo "COR DO PELO:    " . $this -> cor . "<br>";
                echo "IDADE:          " . $this -> idade . "<br>";
            }
        }

        $pet = new FichaAnimal("Border Collie", "Kaiser", "Preto e branco", 1);
        $pet -> MostrarFichaAnimal();

        $pet2 = new FichaAnimal("Pitbull", "Spyke", "Marrom", 5);
        $pet2 -> MostrarFichaAnimal();
    ?>
</body>
</html>