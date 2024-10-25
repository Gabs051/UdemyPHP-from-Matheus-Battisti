<?php 
    require_once("templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="post">
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                    <input type="submit" class="btn card-btn" value="Entrar">
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar Conta</h2>
                <form action="<?= $BASE_URL ?>/auth_process.php" method="post">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmação de senha:</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirme sua senha" required>
                    </div>
                    <input type="submit" class="btn card-btn" value="register">
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    require_once("templates/footer.php");
?>