<?php

$errors =[];
require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (! Validator::checkstring($_POST["Productnaam"], 1, 100)){
    $errors["string"] = "Productnaam moet minimaal 1 en maximaal 100 letters hebben";
    }

    if (! Validator::checkinteger($_POST["Aantal"], 1, 100)){
    $errors["integer"] = "Aantal producten mag minimaal 1 en maximaal 100 zijn.";
    }

    if(! Validator::checkdecimal($_POST["Prijs"], 0.01, 100)){
    $errors["decimal"] = "Prijs moet minimaal 0.01 en maximaal 100 euro liggen.";
    }

    if(empty($errors)){
        $db->query('INSERT INTO groceries(name, quantity, price) VALUES(:name, :quantity, :price)', [
            'name' => $_POST['Productnaam'],
            'quantity' => $_POST['Aantal'],
            'price' => $_POST['Prijs']
        ]);
    }
}



require "views/create.view.php";

//var_dump($_POST["Productnaam"]);