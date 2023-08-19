<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$task = $db->query('select * from tasks where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

$db->query('delete from tasks where id = :id', [
    'id' => $_POST['id']
]);

header('location: /tasks');
exit();