<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>aula231</title>
</head>
<body>
    <?php 
        class Aluno {
            public $nota1 = 9.9;
            public $nota2 = 6.5;

            public function mostrarNota($nota){
                echo "SUA NOTA É DE: $nota" . "<br>";
            }

            private function notaFinal($nota1, $nota2){
                echo "Sua nota final é de: " . ($nota1+$nota2)/2 . "<br>";
            }

            public function acessoNotaFinal($nota1, $nota2){
                $this -> notaFinal($nota1, $nota2);
            }
        }

        class AlunoUP extends Aluno {

        }

        $gabs = new Aluno;
        $gabs -> mostrarNota($gabs -> nota1);
        $gabs -> mostrarNota($gabs -> nota2);
        $gabs -> acessoNotaFinal($gabs -> nota1, $gabs -> nota2);

        echo "<br>";

        $ZE = new AlunoUP;
        $ZE -> mostrarNota($ZE -> nota1);
        $ZE -> mostrarNota($ZE -> nota2);
        $ZE -> acessoNotaFinal($ZE -> nota1, $ZE -> nota2);
    ?>
</body>
</html>