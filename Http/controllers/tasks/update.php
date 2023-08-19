<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

// find the corresponding task
$task = $db->query('select * from tasks where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// validate the form
$errors = [];

if (! Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = 'A title of no more than 100 characters is required.';
}

if (! Validator::string($_POST['description'], 1, 1000)) {
    $errors['description'] = 'A description of no more than 1,000 characters is required.';
}

// if no validation errors, update the record in the notes database table.
if (count($errors)) {
    return view('tasks/edit.view.php', [
        'errors' => $errors,
        'task' => $task
    ]);
}

$db->query('update tasks set title = :title, description = :description, status = :status where id = :id', [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'status' => $_POST['status']
]);

// redirect the user
header('location: /tasks');
die();