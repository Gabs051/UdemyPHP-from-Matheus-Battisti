<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula205</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $array = [
            'Gabriel' => 19,
            'Eduardo' => 18,
            'Lebron James' => 39,
            'Camila' => 20,
            'Harry Potter' => 35
        ];
    ?>
    <div align="center">
        <table>
            <tr>
                <th>NOME</th>
                <th>IDADE</th>
            </tr>
            <?php 
                foreach($array as $key => $valor){
            ?>
            <tr>
                <th>
                    <?php 
                        echo $key;
                    ?>
                </th>
                <th>
                    <?php 
                        echo $valor;
                    ?>
                </th>
            </tr>
            <?php 
                }
            ?>
        </table>
    </div>
</body>
</html>