<?php



use Core\App;
use Core\DataBase;
use Core\Response;

$db = App::resolve(DataBase::class);

$id = $_GET['id'];

$note = $db -> query('select *from notes where id = :id',['id' => $id])->findOrFail();

$currentUserId = 1;

authoriz($note['user_id'] === $currentUserId,Response::FORBIDEN);

view('notes/edit.view.php',[
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);