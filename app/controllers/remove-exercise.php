<?php
use App\Core\App;

$database = App::get('database');
$id = $_POST['id'];

try {
    $statement = $database->connection->prepare(
        "delete from exercise where id = ?"
    );

    $statement->execute([$id]);
    header('Location: '.$_SERVER['HTTP_REFERER']);
} catch (Exception $exception) {
    die($exception->getMessage());
}
