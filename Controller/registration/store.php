<?php

use Core\App;
use Core\DataBase;
use \Core\Validator;


$db = App::resolve(DataBase::class);

$email = $_POST['email'];
$password = $_POST['password'];

$error = [];

if(!Validator::email($email)){
    $error['email'] = 'Email is not valid';
}

if(!Validator::string($password, 7,255)) {
    $error['password'] = 'Password must be at least 7 characters';
}

if(!empty($error)) {
    return view('registration/create.view.php',[
        'error' => $error
    ]);
}


$user = $db -> query('select *from users where email = :email',[':email' => $email])->find();

if($user){
    header('Location: /');
    exit();
}

$db -> query('insert into users (email, password) values (:email, :password)', [':email' => $email, ':password' => $password]);

$_SESSION['user'] = [
    'email' => $email
];

header('Location: /');
exit();

