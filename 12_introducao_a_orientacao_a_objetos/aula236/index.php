<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula236</title>
</head>
<body>
    <?php 
        abstract class Manobra{
            public static function ManobraRadical($nomeDaManobra){
                echo "UAUUUUU QUE MANOBRA MAIS LEGALLLL!!<br>";
                echo "MANOBRA FEITA: $nomeDaManobra";
            }

        }

        Manobra::ManobraRadical("FLIP REVERSE");
    ?>
</body>
</html>