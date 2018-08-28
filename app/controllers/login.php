<?php
use App\Core\App;
use App\Core\CSRF;
use App\Core\Session;

CSRF::validate();

$database = App::get('database');
try {
    $statement = $database->connection->prepare(
        "select password, id from user where login = ?"
    );
    $statement->execute([
        $_POST['login'],
    ]);
    $row = $statement->fetch();
    if (!password_verify($_POST['password'], $row['password'])) {
        echo 'wrong password';
    } else {
        Session::login();
        $_SESSION['id'] = htmlspecialchars($row['id']);
        header('Location: exercises');
    }
} catch (Exception $exception) {
    die($exception->getMessage());
}
