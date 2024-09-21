<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer4</title>
</head>
<body>
    <?php 
        class Passenger {
            public $name;
            public $age;
            public $seatNumber;

            function __construct($name, $age, $seatNumber)
            {
                $this -> name = $name;
                $this -> age = $age;
                $this -> seatNumber = $seatNumber;
            }

            public function getName(){
                return $this -> name;
            }

            public function getAge(){
                return $this -> age;
            }

            public function getSeatNumber(){
                return $this -> seatNumber;
            }

            public function setSeatNumber($seatNumber){
                $this -> seatNumber = $seatNumber;
            }
        }

        $gabs = new Passenger("Gabriel de Oliveira", 19, "451236");

        echo "NOME DO PASSAGEIRO: " . $gabs -> getName() . "<br>";
        echo "IDADE:              " . $gabs -> getAge() . "<br>";
        echo "Nº DO TICKET:       " . $gabs -> getSeatNumber() . "<br>";
        echo "<br>";

        $gabs -> setSeatNumber("000954");

        echo "NOME DO PASSAGEIRO: " . $gabs -> getName() . "<br>";
        echo "IDADE:              " . $gabs -> getAge() . "<br>";
        echo "Nº DO TICKET:       " . $gabs -> getSeatNumber() . "<br>";
    ?>
</body>
</html>