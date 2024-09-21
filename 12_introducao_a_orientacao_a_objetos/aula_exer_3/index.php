<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer3</title>
</head>
<body>
    <?php 
        class Contact {
            public $name;
            public $email;
            public $phone;

            function __construct($name, $email, $phone)
            {
                $this -> name = $name;
                $this -> email = $email;
                $this -> phone = $phone;
            }

            public function getName(){
                return $this -> name;
            }

            public function getEmail(){
                return $this -> email;
            }

            public function getPhone(){
                return $this -> phone;
            }

            public function setEmail($email){
                $this -> email = $email;
            }

            public function setPhone($phone){
                $this -> phone = $phone;
            }
        }

        $user = new Contact("Gabriel de Oliveira Machado", "teste@123test.com", "45 9 5465-4512");

        echo "NOME:     " . $user -> getName() . "<br>";
        echo "EMAIL:    " . $user -> getEmail() . "<br>";
        echo "PHONE:    " . $user -> getPhone() . "<br>";
        echo "<br>";

        $user -> setEmail("gabsOli@php.com");
        $user -> setPhone("(49) 9 9951-4512");

        echo "NOME:     " . $user -> getName() . "<br>";
        echo "EMAIL:    " . $user -> getEmail() . "<br>";
        echo "PHONE:    " . $user -> getPhone() . "<br>";
    ?>
</body>
</html>