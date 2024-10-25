<?php 
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");
    require_once 'globals.php';
    require_once 'db.php';

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    //Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");
    
    //Verificação do tipo de formulário
    if ($type === "register") {
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
        
        //Verificação de dados mínimos
        if (!empty($name) && !empty($lastname) && !empty($email) && !empty($password)) {
            
            if($password === $confirmpassword) {

                //verificar se o email já existe
                if ($userDao -> findByEmail($email) === false) {
                    
                    $user = new User();

                    //Criação de token e senha
                    $userToken = $user -> generateToken();
                    $finalPassword = $user -> generatePassword($password);

                    $user -> name = $name;
                    $user -> lastname = $lastname;
                    $user -> email = $email;
                    $user -> password = $finalPassword;
                    $user -> token = $userToken;

                    $auth = true;

                    $userDao -> create($user, $auth);

                } else {
                    //Enviar uma msg de error/senha não batem
                    $message->setMessage("Usuário já cadastrado, tente outro email", "error", "back");
                }

            } else {
                //Enviar uma msg de error/senha não batem
                $message->setMessage("As senhas não são iguais", "error", "back");
            }

        } else {
            //Enviar uma msg de error/dado faltando
            $message->setMessage("Dados faltando", "error", "back");
        }
    } elseif ($type === "login") {

    }
?>