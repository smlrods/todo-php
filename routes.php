<?php

// get home [x]
$router->get('/', 'index.php');

// get all todos [x]
$router->get('/tasks', 'tasks/index.php')->only('auth'); 

// get a todo [x]
$router->get('/task', 'tasks/show.php')->only('auth');

// delete a todo [x]
$router->delete('/task', 'tasks/destroy.php')->only('auth');

// edit a todo  [x]
$router->get('/task/edit', 'tasks/edit.php')->only('auth');
$router->patch('/task', 'tasks/update.php')->only('auth');

// create a todo [x]
$router->get('/tasks/create', 'tasks/create.php')->only('auth');
$router->post('/tasks', 'tasks/store.php')->only('auth');

// create a user [x]
$router->get('/register', 'registration/create.php');
$router->post('/register', 'registration/store.php');

// create a session [x]
$router->get('/login', 'session/create.php');
$router->post('/session', 'session/store.php');
$router->delete('/session', 'session/destroy.php');