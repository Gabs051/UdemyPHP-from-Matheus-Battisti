<?php 
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $base_url ?>config/process.php" method="post">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contacts["id"]?>">
        <div class="form-grup">
            <label for="name">Nome do contato:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do contato" value="<?= $contacts["name"]; ?>" required>
            <label for="phone">Telefone:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?= $contacts["phone"]; ?>" placeholder="Digite o telefone do contato" required>
            <label for="observation">Observações:</label>
            <textarea type="text" class="form-control" name="observation" id="observation" placeholder="Insira as observações" rows="3"><?= $contacts["observation"];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php 
    include_once("templates/footer.php");
?>