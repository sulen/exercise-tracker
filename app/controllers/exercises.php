<?php
use App\Core\App;

$database = App::get('database');
require_once '../app/controllers/pagination.php';
$offset = $page * 5 - 5;
try {
    $exercises = $database->connection->prepare("select * from exercise where userid=? order by date desc limit ?, 5");
    $exercises->execute([$_SESSION['id'], $offset]);
} catch (Exception $exception) {
    require '../app/views/not-found-view.php';
    die();
}

