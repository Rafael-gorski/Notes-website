<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the corresponding note
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize that the current user can edit
authorize($note['user_id'] === $currentUserId);

// validate the form
$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Body of no more than 1,000 characters is required.';
}

// if no validation errors, update the note
if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('UPDATE notes SET body = :body, title = :title WHERE id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
    'title' => $_POST['title']
]);

// redirerct the user
header('location: /notes');
die();