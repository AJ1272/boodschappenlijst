<?php
function urlIs($url, $currentpage){
    if($currentpage===$url){
        return true;
    } else{
        return false;
    }
}

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}