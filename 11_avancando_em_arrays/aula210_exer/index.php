<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $array = [
            "Gabs" => 1955,
            "Edu" => 2011,
            "Thui" => 1542,
            "Lai" => 1999,
            "Line" => 2012,
            "Vava" => 1654,
            "Jack" => 1269,
            "Gio" => 1854,
            "Well" => 1954
        ];

        $contador = 1;

        arsort($array);
        ?>
        
        <div align="center">
            <table>
                <tr>
                    <th>Nº</th>
                    <th>NOME</th>
                    <th>PONTUAÇÃO</th>
                </tr>
                <?php 
                    foreach($array as $key => $item){
                ?>
                        <tr>
                            <th><?php echo $contador . "º"?></th>
                            <th><?php echo $key?></th>
                            <th><?php echo $item?></th>
                        </tr>
                        <?php
                        $contador += 1;
                    }
                ?>
            </table>
        </div>
</body>
</html>