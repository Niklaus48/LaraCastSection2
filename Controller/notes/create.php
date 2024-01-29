<?php

require 'Validator.php';
$config = require 'config.php';

$db = new DataBase($config['database']);

$heading = 'Create New Note';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];

    if(!Validator::string($_POST['body'],1,1000)){
        $errors['body'] = 'dash matnet bayad beyn 1 ta 1,000 bashe';
    }

    if(empty($errors)){
    $db->query('insert into notes (body,user_id) values (:body, :user_id)',[':body' => $_POST['body'],'user_id' => 1]);
    }
}


require 'view/notes/create.view.php';
