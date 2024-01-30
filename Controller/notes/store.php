<?php


use Core\App;
use Core\Validator;
use Core\DataBase;

require base_path('Core/Validator.php');

$db = App::resolve(DataBase::class);
$errors = [];

if(!Validator::string($_POST['body'],1,1000)){
    $errors['body'] = 'dash matnet bayad beyn 1 ta 1,000 bashe';
}

if(!empty($errors)){

    return view('notes/create.view.php',[
        'heading' => 'Create New Note',
        'errors' => $errors
    ]);

}

if(empty($errors)){
    $db->query('insert into notes (body,user_id) values (:body, :user_id)',[':body' => $_POST['body'],'user_id' => 1]);
    header('location: /notes');
    die();
}