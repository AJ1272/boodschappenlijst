<?php
require "views/partials/header.php";
require "views/partials/nav.php";
?>

    <table id="Boodschappentabel">
        <tr>
            <th>Product</th>
            <th>Aantal</th>
            <th>Prijs</th>
            <th>Subtotaal</th>
        </tr>


<?php

foreach($boodschappenlijst as $boodschappenlijstItems){
    echo "<tr>";
    foreach($boodschappenlijstItems as $key=>$value){
        echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
}

if (isset($errors['productnaam'])){
    echo "<p>" . $errors['productnaam'] . "</p>";
}

?>

        <tr>
            <td>Totaal</td>
            <td></td>
            <td></td>
            <td id="totalCost" class="valuta"><?=$total?></td>
        </tr>
    </table>

    <script src="script.js"></script>

<?php
require "views/partials/footer.php";
?>