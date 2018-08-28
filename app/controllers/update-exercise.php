<?php
use App\Core\App;
use App\Core\CSRF;

CSRF::validate();

$database = App::get('database');
try {
    $statement = $database->connection->prepare(
        "update exercise set exercise = ?, length = ?, date = ? where id = ?"
    );

    $statement->execute([
        htmlspecialchars($_POST['exercise']),
        htmlspecialchars($_POST['length']),
        htmlspecialchars($_POST['date']),
        htmlspecialchars($_GET['id'])
    ]);
    header('Location: exercises');
} catch (Exception $exception) {
    die($exception->getMessage());
}
