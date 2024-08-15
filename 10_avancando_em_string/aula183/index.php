<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula183</title>
</head>
<body>
    <?php 
        $url = "https://www.google.com";

        $arrayUrl = parse_url($url);

        print_r($arrayUrl);
        echo "<br>";

        $url2 = "https://www.example.com:8080/path/to/page?name=JohnDoe&age=25#section2";

        $arrayurl2 = parse_url($url2);
        print_r($arrayurl2);
    ?>
</body>
</html>