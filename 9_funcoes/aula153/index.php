<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula153</title>
</head>
<body>
    <?php 
        function soma($a, $b){
            print_r(func_get_args());
            echo "<br>";
            print_r(func_num_args());
            
            return $a + $b;
        }

        soma(5, 9);
    ?>
</body>
</html>