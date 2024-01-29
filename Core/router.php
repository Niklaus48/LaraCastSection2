<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = require base_path('routes.php');

function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    }
    else{
        abord();
    }
}

function abord($code = 404): void
{
    require base_path("view/{$code}.php");

    die();
}

routeToController($uri , $routes);