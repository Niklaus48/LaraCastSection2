<?php

use Core\DataBase;
use Core\Response;

$config = require base_path('config.php');

$db = new DataBase($config['database']);

$heading = 'My Notes';

$id = $_GET['id'];

$note = $db -> query('select *from notes where id = :id',['id' => $id])->findOrFail();


$currentUserId = 1;

authoriz($note['user_id'] === $currentUserId,Response::FORBIDEN);

view('notes/show.view.php',[
    'heading' => 'Note',
    'note' => $note
]);
