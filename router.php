<?php

$uri = $_SERVER['REQUEST_URI'];


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];

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

routeToController($uri, $routes);