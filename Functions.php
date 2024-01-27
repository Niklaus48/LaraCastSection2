<?php

function UrlIs (string $value) : bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}