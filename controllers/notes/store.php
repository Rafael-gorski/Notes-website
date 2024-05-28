<?php

use Core\Validator;
use Core\Database;
use Core\App;

require base_path("Core/Validator.php");

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['title'], 1, 300)) {
    $errors['title'] = 'Title is invalid. No more than 300 characters';
}

if (!Validator::string($_POST['body'], 1, 5000)) {
    $errors['body'] = 'Body is invalid. No more than 5000 characters';
}

if (! empty($erros)){
    return view("notes/create.view.php", [
        'heading' => 'Create note',
        'erros' => $erros
    ]);
}

$db->query('INSERT INTO notes(title, body, user_id) VALUES(:title,:body,:user_id)', [
    ':title' => $_POST['title'],
    ':body' => $_POST['body'],
    ':user_id' => 1
]);

header('Location: /notes');
die();