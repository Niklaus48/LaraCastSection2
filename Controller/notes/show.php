<?php

$config = require 'config.php';

$db = new DataBase($config['database']);

$heading = 'My Notes';

$id = $_GET['id'];

$note = $db -> query('select *from notes where id = :id',['id' => $id])->findOrFail();


$currentUserId = 1;

authoriz($note['user_id'] === $currentUserId,Response::FORBIDEN);

require 'view/notes/show.view.php';
