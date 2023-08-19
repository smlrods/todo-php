<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$tasks = $db->query('select * from tasks')->get();

view("tasks/index.view.php", [
  'tasks' => $tasks
]);