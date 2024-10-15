<?php 
    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDao = new CarDao($conn);

    $cars = $carDao -> findAll();
?>

<h1>Insira um carro:</h1>
<div class="form">
    <form action="process.php" method="post">
        <div class="brand">
            <label for="brand">Marca do carro:</label>
            <input type="text" name="brand" placeholder="Insira a marca">
        </div>
        <div class="km">
            <label for="km">Kilometragem:</label>
            <input type="text" name="km" placeholder="Insira a kilometragem">
        </div>
        <div class="color">
            <label for="color">Cor do carro:</label>
            <input type="text" name="color" placeholder="Insira a cor">
        </div>
        <div class="submit-button">
            <input type="submit" value="Salvar">
        </div>
    </form>
</div>

<div class="list-cars">
    <ul class="list">
        <?php foreach($cars as $car) {?>
            <li class="car"><?= $car -> getBrand() ?> - <?= $car -> getKm() ?> - <?= $car -> getColor() ?></li>
        <?php }?>
    </ul>
</div>