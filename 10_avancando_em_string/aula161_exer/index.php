<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>aula161</title>
</head>
<body>
    <?php 
        function lista($array){
            $itensPlus = [];
            foreach($array as $itens => $preco){
                if($preco > 10){
                    array_push($itensPlus, $itens);
                }
            }

            return $itensPlus;
        }

        $array = [
            'Sofá' => 2500.45,
            'Geladeira' => 2000.00,
            'Papel' => 1.00,
            'Computador' => 4500
        ];

        $itensPlusTen = lista($array);
        print_r($itensPlusTen);
    ?> 
</body>
</html>