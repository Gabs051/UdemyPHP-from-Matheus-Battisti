<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula112004</title>
</head>
<body>
    <?php 
        function verificarCategoria($categoria){
            if($categoria === "eletrônicos"){
                echo "Essa categoria é de produtos eletrônicos.";
            }
            else if($categoria === "vestuário"){
                echo "Essa categoria é de produtos de vestuário.";
            }
            else if($categoria === "alimentos"){
                echo "Essa categoria é de produtos alimenticios.";
            }
            else{
                echo "Categoria desconhecida.";
            }
        }

        $categoria = "carros";
        verificarCategoria($categoria);
    ?>
</body>
</html>