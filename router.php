<?php

require 'routes.php';

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($statusCode = 404) {
    http_response_code(404);
    
    require "views/{$statusCode}.php";

    die();
}


$uri = $_SERVER['REQUEST_URI'];
routeToController($uri, $routes);