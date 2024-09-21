<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $arrayProf = ['Desenvolvedor',
        'Analista',
        'Cybersecurity',
        'Artista Visual'];
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <select name="profissao" id="profissao">
                <?php foreach($arrayProf as $valor){?>
                    <option value="<?php echo $valor?>"><?php echo $valor?></option><?php }?>
            </select>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <div>
        <?php
            $profissaoEscolhida = $_POST['profissao'];
            echo "A profissão escolhida foi $profissaoEscolhida";
        ?>
    </div>
</body>
</html>