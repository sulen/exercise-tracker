<?php

return [
    'GET' => [
        '' => 'views/index.view.php',
        'index' => 'views/index.view.php',
        'new' => 'views/add-exercise.view.php',
        'update' => 'views/update-exercise.view.php',
        'login' => 'views/login.view.php',
        'register' => 'views/register.view.php',
        'exercises' => 'views/exercises.view.php',
    ],
    'POST' => [
        'new' => 'controllers/post-exercise.php',
        'update' => 'controllers/update-exercise.php',
        'login' => 'controllers/login.php',
        'register' => 'controllers/register.php',
        'remove' => 'controllers/remove-exercise.php',
        'logout' => 'controllers/logout.php',
    ]
];