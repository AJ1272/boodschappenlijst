<?php



function routeToController($uri){
    $routemap = require('routes.php');
    if (array_key_exists($uri, $routemap)){
        return $routemap["$uri"];
    } else {
        abort();
    }
}

function abort(){
    require "views/404.php";
    die();
}

