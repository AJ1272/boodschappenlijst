<?php

require "views/partials/header.php";
require "views/partials/nav.php";
?>

<h1>Nieuw boodschapsitem</h1>
<form action="" method="POST">
    <label for="Productnaam">Productnaam:</label>
    <div>
        <input type="text" name="Productnaam" value="<?= $_POST["Productnaam"] ?? '' ?>"> <br>
    </div>
    <label for="Aantal">Aantal:</label>
    <div>
        <input type="number" name="Aantal" value="<?= $_POST["Aantal"] ?? '1' ?>"> <br>
    </div>
    <label for="Prijs">Prijs:</label>
    <div>
        <input type="number" name="Prijs" step="0.01" value="<?= $_POST["Prijs"] ?? '0.00' ?>"> 
    </div>
    <input type="submit" value="Voeg Boodschap toe">
</form>

<?php
foreach ($errors as $errormessage){
    echo $errormessage . " <br>";
}


?>

<?php
require "views/partials/footer.php";
?>