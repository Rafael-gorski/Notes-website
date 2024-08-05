<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

if ((new Authenticator)->attempt($attributes['email'], $attributes['password'])) {
    redirect('/');
}

$form->error('email', 'No matching account was found.');


Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('/login');