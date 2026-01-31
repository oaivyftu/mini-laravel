<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

if ((new Authenticator)->attempt($attributes['email'], $attributes['password'])) {
    redirect('/');
}

$form->error('email', 'No matching account found for that email address and password.');


