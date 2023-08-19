<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = 'A title of no more than 100 characters is required.';
}

if (! Validator::string($_POST['description'], 1, 1000)) {
    $errors['description'] = 'A description of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("tasks/create.view.php", [
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO tasks(title, description, status) VALUES(:title, :description, :status)', [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'status' => $_POST['status'],
]);

header('location: /tasks');
die();