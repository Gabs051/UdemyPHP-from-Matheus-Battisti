<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula224</title>
</head>
<body>
    <?php 
        class Cachorro {
            function latir(){
                echo "Auauau<br>";
            }

            function andar(){
                echo "passo >= passo<br>";
            }
        }

        $pastorAlemao = new Cachorro;
        $pastorAlemao -> latir();
        $pastorAlemao -> andar();

        $viraLata = new Cachorro;
        $viraLata -> latir();
        $viraLata -> andar();
    ?>
</body>
</html>