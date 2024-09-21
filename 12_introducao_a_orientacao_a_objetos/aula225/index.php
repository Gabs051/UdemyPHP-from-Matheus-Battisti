<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Car {
            public $rodas;
            public $aro = 20;
            public $cor =  "Roxo";

            function ligar(){
                echo "Vrummm <br>";
            }
        }

        $ferrari = new Car;
        $ferrari -> rodas = 4;

        echo $ferrari -> aro . "<br>";
        echo $ferrari -> rodas . "<br>";

        $ferrari -> cor = "Ciano";

        echo $ferrari -> cor . "<br>";

        $ferrari -> ligar();
    ?>
</body>
</html>