<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer6</title>
</head>
<body>
    <?php 
        function countVowels($palavra){
            $resultado = 0;
            for($i = 0; $i < strlen($palavra); $i++){
                if($palavra[$i] === "a" || $palavra[$i] === "e" || $palavra[$i] === "i" || $palavra[$i] === "o" || $palavra[$i] === "u"){
                    $resultado += 1;
                }
            }

            return $resultado;

        }

        $resultado = countVowels("Abooboorara");
        echo "Total de vogais nessa string: " . $resultado;
    ?>
</body>
</html>