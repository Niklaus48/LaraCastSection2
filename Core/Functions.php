<?php

function UrlIs (string $value) : bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authoriz($condition,$status)
{
    if(!$condition){
        abord($status);
    }
}

function dd($input)
{
    echo '<pre>';
    var_dump($input);
    echo '</pre>';
    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path,$attributes)
{
    extract($attributes);

    require base_path('view/'. $path);
}