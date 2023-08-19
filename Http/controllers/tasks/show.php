<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$task = $db->query('select * from tasks where id = :id', [
  'id' => $_GET['id']
])->findOrFail();

view("tasks/show.view.php", [
  'task' => $task
]);