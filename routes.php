<?php


$router->get('/','Controller/index.php');
$router->get('/about','Controller/about.php');

$router->get('/notes','Controller/notes/index.php');

$router->get('/note/create','Controller/notes/create.php');
$router->post('/note/create','Controller/notes/store.php');

$router->get('/note','Controller/notes/show.php');
$router->delete('/note','Controller/notes/destroy.php');