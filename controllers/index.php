<?php

$query ="select * from groceries";


$boodschappenlijst = $db->query($query)->fetchall();


function calculateAllSubTotals(&$boodschappenlijst){
    $i=0;
    $AllSubTotals = array();
    foreach($boodschappenlijst as &$boodschapItem){
        $boodschapItem["Subtotaal"] = $boodschapItem["price"]*$boodschapItem["quantity"];
        $AllSubTotals[$i] = $boodschapItem["Subtotaal"];
        $i++;
    }
    return $AllSubTotals;
}

function sumTwoNumbers($numberOne,$numberTwo){
    return $numberOne+$numberTwo;
}

$total = array_reduce(calculateAllSubTotals($boodschappenlijst),"sumTwoNumbers",0);

calculateAllSubTotals($boodschappenlijst);


require "views/index.view.php";

