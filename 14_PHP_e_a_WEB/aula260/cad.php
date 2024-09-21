<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    ?>

    <div>
        <h3>Olá seja bem-vindo <?php echo $nome;?></h3>
    </div>
    <div>
        <h3>Sua idade é <?php echo $idade;?></h3>
    </div>

</body>
</html>