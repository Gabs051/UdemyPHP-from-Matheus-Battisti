<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula241</title>
</head>
<body>
    <?php 
        class Human {
            public function teste(){
                echo "Ola";
            }
        }

        class Teste extends Human{

        }
        $teste = new Teste;
        if(is_object($teste)){
            echo "OBJETO TRUE<br>";
        }
        else{
            echo "OBJETO FALSE<br>";
        }

        if(is_object($teste)){
            echo "OBJETO TRUE<br>";
        }
        else{
            echo "OBJETO FALSE<br>";
        }

        var_dump(get_class($teste));
    ?>
</body>
</html>