<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula268</title>
    <?php 
        setcookie("nome", "Gabs", time() + 3600);

        if(isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
        }
    ?>
</head>
<body>
    <h1>Olá Mundo</h1>
    <?php
        if($nome == null){
            ?><h5>Sem nome no cookie</h5><?php
        }
        else{
            ?><h5>Seja bem-vindo <?php echo $nome;?></h5><?php
        }
    ?>
</body>
</html>