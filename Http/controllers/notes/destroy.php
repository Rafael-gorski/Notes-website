<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['user_id'];

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// from was submitted. Delighted the current note.
$db->query('DELETE FROM notes WHERE id = :id', [
    ':id' => $_POST['id']
]);

header('Location: /notes');
exit();