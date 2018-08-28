<?php

$count = $database->connection->prepare("select count(exercise) from exercise where userid=?");
$count->execute([$_SESSION['id']]);
$count = ceil($count->fetch()[0] / 5);
$page = 1;
$isLast = 0;
if (isset($_GET['page']) && (!ctype_digit($_GET['page']) || $_GET['page'] < 1 || $_GET['page'] > $count)) {
    require '../app/views/not-found-view.php';
    die();
}
if (isset($_GET['page']) && ctype_digit($_GET['page'])) {
    $page = (int)$_GET['page'];
}
if ($page == $count) {
    $isLast = 1;
}

