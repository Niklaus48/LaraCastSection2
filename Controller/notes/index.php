<?php


use Core\DataBase;

$config = require base_path('config.php');

$db = new DataBase($config['database']);


$notes = $db -> query('select *from notes where user_id = 1')->Get();

view('notes/index.view.php',[
    'heading' => 'My Notes',
    'notes' => $notes
]);
