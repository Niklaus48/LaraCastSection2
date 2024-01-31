<?php


use Core\App;
use Core\DataBase;
use Core\Response;
use Core\Validator;

$db = App::resolve(DataBase::class);

$note = $db -> query('select *from notes where id = :id',['id' => $_POST['id']])->findOrFail();

$currentUserId = 1;

authoriz($note['user_id'] === $currentUserId,Response::FORBIDEN);

$errors = [];

if(!Validator::string($_POST['body'],1,1000)){
    $errors['body'] = 'dash matnet bayad beyn 1 ta 1,000 bashe';
}

if(!empty($errors)){

    return view('notes/create.view.php',[
        'heading' => 'Edit Note',
        'errors' => $errors
    ]);

}

if(empty($errors)){
    $db -> query('update notes set body = :body where id = :id',['id' => $_POST['id'],'body' => $_POST['body']]);
    header('location: /notes');
    die();
}