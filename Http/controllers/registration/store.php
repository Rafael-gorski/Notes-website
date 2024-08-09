<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$name = $_POST['username'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email address.';
}

if (!Validator::string($password, 4, 30)) {
    $errors['password'] = 'Please enter a password of at least 4 characters.';
}

if (!Validator::string($name, 2, 30)) {
    $errors['password'] = 'Please enter a password of at least 4 characters.';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
// check if the account already exists.
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users (email, password, name) VALUES (:email, :password, :name)', [
        'email' => $email,
        'name' => $name,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    (new Authenticator)->login(['email' => $email]);

    header('location: /');
    exit();
}

