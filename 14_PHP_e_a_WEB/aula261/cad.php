<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
    ?>

    <div>
        <h4>Olá <?php echo $nome;?>, seja bem-vindo</h4>
    </div>
    <div>
        <h4>Sua idade é de <?php echo $idade;?></h4>
    </div>
</body>
</html>