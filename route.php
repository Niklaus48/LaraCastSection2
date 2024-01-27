<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'Controller/index.php',
    '/about' => 'Controller/about.php',
];

function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }
    else{
        abord();
    }
}

function abord($code = 404): void
{
    require "view/{$code}.php";

    die();
}

routeToController($uri , $routes);