<?php
use App\Core\App;
use App\Core\Auth;
use App\Core\CSRF;

CSRF::validate();

$database = App::get('database');

Auth::validateRegistration();
//if ($error) {
//    require '../app/views/register.view.php';
//    exit;
//}

try {
    $statement = $database->connection->prepare(
        "insert into user values(default, ?, ?, ?)"
    );
    $statement->execute([
        $_POST['login'],
        $_POST['email'],
        password_hash($_POST['password'], PASSWORD_BCRYPT)
    ]);
    require '../app/views/created-user.view.php';
} catch (Exception $exception) {
    die($exception->getMessage());
}
