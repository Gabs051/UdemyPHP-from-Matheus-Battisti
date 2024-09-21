<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula232</title>
</head>
<body>
    <?php 
        class Humano {
            public $nome = "Augusto";
            public $idade = 45;
            private $cpf = "123492451-45";

            public function mostrarCPF(){
                echo "CPF: " . $this -> cpf. "<br>";
            }

            protected $materiaAula = "Fisica";
        }

        class Professor extends Humano {
            private $salario = 4500;

            public function mostrarSalario(){
                echo "SALÁRIO: " . $this -> salario . "<br>";
            }

            public function acessarMateria(){
                echo "SUA MATÉRIA DE HJ É: " . $this -> materiaAula . "<br>";
            }
        }

        $xair = new Professor;
        $gabs = new Humano;

        echo "NOME: " . $xair -> nome . "<br>";
        echo "IDADE: " . $xair -> idade . "<br>";
        $xair -> mostrarCPF();
        $xair -> mostrarSalario();
        $xair -> acessarMateria();

        echo "<br>";

        echo "NOME: " . $gabs -> nome . "<br>";
        echo "IDADE: " . $gabs -> idade . "<br>";
        $gabs -> mostrarCPF();

    ?>
</body>
</html>