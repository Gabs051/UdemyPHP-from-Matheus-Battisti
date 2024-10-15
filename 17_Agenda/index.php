<?php 
    include_once("templates/header.php");
?>

<div class="container">
    <?php 
        if(isset($printMsg) && $printMsg != ''){
            echo "<div class='alert alert-primary' role='alert'>$printMsg</div>";
        }
    ?>
    <h1 class="main-title">Minha Agenda</h1>
    <?php if(count($contacts) > 0){ ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact) { ?>
                <tr>
                    <td scope="row" class="col-id"><?= $contact['id'] ?></td>
                    <td scope="row"><?= $contact['name'] ?></td>
                    <td scope="row"><?= $contact['phone'] ?></td>
                    <td class="actions">
                        <a href="<?= $base_url ?>show.php?id=<?= $contact['id'] ?>"><i class="fas fa-eye check-icon"></i></a>
                        <a href="<?= $base_url ?>edit.php?id=<?= $contact['id'] ?>"><i class="far fa-edit edit-icon"></i></a>
                        <form class="delete-form" action="<?= $base_url ?>/config/process.php" method="POST">
                            <input type="hidden" name="type" value="delete">
                            <input type="hidden" name="id" value="<?= $contact["id"]?>">
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="empty-list-text">Ainda não há contatos na sua agenda! <a href="<?= $base_url ?>create.php">Clique aqui para adicionar</a>.</p>
    <?php } ?>
</div>

<?php 
    include_once("templates/footer.php");
?>