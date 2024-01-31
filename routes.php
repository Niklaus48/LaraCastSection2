<?php


$router->get('/','Controller/index.php');
$router->get('/about','Controller/about.php');

$router->get('/notes','Controller/notes/index.php');

$router->get('/note/create','Controller/notes/create.php');
$router->post('/note','Controller/notes/store.php');

$router->get('/note','Controller/notes/show.php');
$router->delete('/note','Controller/notes/destroy.php');

$router->get('/note/edit','Controller/notes/edit.php');
$router->patch('/note','Controller/notes/update.php');