<?php 
    session_start();

    include_once("database.php");
    include_once("url.php");

    $data = $_POST;
    //Modificações no banco
    if(!empty($data)) {

        //Crair Contato
        if($data["type"] === "create") {
            $name = $data["name"];
            $phone = $data["phone"];
            $observation = $data["observation"];

            $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)";

            $stmt = $conn -> prepare($query);

            $stmt -> bindParam(":name", $name);
            $stmt -> bindParam(":phone", $phone);
            $stmt -> bindParam(":observation", $observation); // Fix typo in parameter name

            try {
                
                $stmt -> execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
        
            } catch (PDOException $e) {
                # code...
                $error = $e ->getMessage();
                echo "Erro: " . $error;
            }

        } elseif ($data["type"] === "edit") {
            $name = $data["name"];
            $phone = $data["phone"];
            $observation = $data["observation"];
            $id = $data["id"];

            $query = "UPDATE contacts SET name = :name, phone = :phone, observation = :observation WHERE id = :id";

            $stmt = $conn -> prepare($query);
            $stmt -> bindParam(":name", $name);
            $stmt -> bindParam(":phone", $phone);
            $stmt -> bindParam(":observation", $observation);
            $stmt -> bindParam(":id", $id);

            try {
                
                $stmt -> execute();
                $_SESSION["msg"] = "Contato editado com sucesso!";
        
            } catch (PDOException $e) {
                # code...
                $error = $e ->getMessage();
                echo "Erro: " . $error;
            }
        } elseif ($data["type"] === "delete") {
            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn -> prepare($query);
            $stmt -> bindParam(":id", $id);

            try {
                
                $stmt -> execute();
                $_SESSION["msg"] = "Contato deletado com sucesso!";
        
            } catch (PDOException $e) {
                # code...
                $error = $e ->getMessage();
                echo "Erro: " . $error;
            }
        }
        //Redirect HOME
        header("Location: " . $base_url . "../index.php");
    } else { //Seleção de dados

        if(!empty($_GET)) {
            $id = $_GET["id"];
        }

        //Retorna o dado de um contato
        if(!empty($id)) {
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $conn -> prepare($query);
            $stmt -> bindParam(":id", $id);
            $stmt -> execute();
            $contacts = $stmt -> fetch();
        } else {
            //Retorna todos os contatos
            $contacts = [];

            $query = "SELECT * FROM contacts";

            $stmt = $conn -> prepare($query);

            $stmt -> execute();
            $contacts = $stmt -> fetchAll();
        }
    }

    //Fechar conexão
    $conn = null;
?>