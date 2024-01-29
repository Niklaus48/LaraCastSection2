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