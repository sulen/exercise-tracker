<?php

use App\Core\App;
use App\Core\CSRF;

CSRF::validate();

$database = App::get('database');

try {
    $statement = $database->connection->prepare("insert into exercise values(default, ?, ?, ?, ?)");
    $statement->execute([
        htmlspecialchars($_POST['exercise']),
        htmlspecialchars($_POST['length']),
        htmlspecialchars($_POST['date']),
        $_SESSION['id'],
    ]);
    header('Location: exercises');
//    require '../app/views/added-exercise.view.php';
} catch (Exception $exception) {
    die($exception->getMessage());
}
