<?php

use Core\App;
use Core\Database;

$currentUserId = $_SESSION['user']['user_id'];

$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM notes WHERE user_id = :user;', [
    'user' => $currentUserId
])->get();

view("notes/index.view.php", [
        'heading' => 'My notes',
        'notes' => $notes
    ]
);