<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div><input type="checkbox" name="ingredientes[]" value="Tomate">Tomate</div>
        <div><input type="checkbox" name="ingredientes[]" value="Feijão">Feijão</div>
        <div><input type="checkbox" name="ingredientes[]" value="Arroz">Arroz</div>
        <div><input type="checkbox" name="ingredientes[]" value="Manga">Manga</div>
        <div><input type="checkbox" name="ingredientes[]" value="Cebola">Cebola</div>
        <div><input type="submit" value="Enviar"></div>
    </form>

    <?php 
        if(isset($_POST(['ingredientes']))){
            $arrayIngredientes = $_POST['ingredientes'];
            print_r($arrayIngredientes);
        }
    ?>
</body>
</html>