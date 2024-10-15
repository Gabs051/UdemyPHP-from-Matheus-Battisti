<?php 
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title">Criar Contato</h1>
    <form id="create-form" action="<?= $base_url ?>config/process.php" method="post">
        <input type="hidden" name="type" value="create">
        <div class="form-grup">
            <label for="name">Nome do contato:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do contato" required>
            <label for="phone">Telefone:</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone do contato" required>
            <label for="observation">Observações:</label>
            <textarea type="text" class="form-control" name="observation" id="observation" placeholder="Insira as observações" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php 
    include_once("templates/footer.php");
?>