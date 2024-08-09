<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula112001</title>
</head>
<body>
    <?php 
        function compararNumeros($valor1, $valor2){

            if($valor1 > $valor2){
                echo "O número $valor1 é maior.";
            }
            else if($valor2 > $valor1){
                echo "O número $valor2 é maior.";
            }
            else{
                echo 'Os valores são iguais.';
            }
        }

        $valor1 = 9;
        $valor2 = 9;
        compararNumeros($valor1, $valor2);
    ?>
</body>
</html>