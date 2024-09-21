<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer2</title>
</head>
<body>
    <?php 
        class Task {
            public $title;
            public $description;
            public $completed;

            public function __construct($titulo, $descricao, $situacao)
            {
                $this -> title = $titulo;
                $this -> description = $descricao;
                $this -> completed = $situacao;
            }

            public function markAsCompleted(){
                 return $this -> completed = "Concluída";
            }

            public function markAsIncomplete(){
                 return $this -> completed = "Não concluída";
            }

            public function getTitle(){
                return $this -> title;
            }

            public function getDescription(){
                return $this -> description;
            }

            public function isCompleted(){
                if($this -> completed === true){
                     return $this -> markAsCompleted();
                }
                else{
                     return $this -> markAsIncomplete();
                }
            }
        }

        $tarefa1 = new Task("Reunião sobre venda de processadores.", "Vamos ter que revender todos nossos computadores ou achar outra solução.", true);

        echo "TASK: " . $tarefa1 -> getTitle() . "<br>";
        echo "DESCRIPTION :" . $tarefa1 -> getDescription() . "<br>";
        echo "COMPLETED :" . $tarefa1 -> isCompleted() . "<br>";

    ?>
</body>
</html>