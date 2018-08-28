<?php

namespace App\Core;

class Auth
{
    public static function validateRegistration()
    {
        if (Auth::alreadyExists('login', $_POST['login'])) {
            $error = 'User name already in use';
        } elseif (Auth::alreadyExists('email', $_POST['email'])) {
            $error = 'Email already in use';
        } else {
            $error = false;
        }

        if ($error) {
            require '../app/views/register.view.php';
            exit;
        }
//        return false;
    }

    public static function alreadyExists($column, $value)
    {
        $database = App::get('database');
        $statement = $database->connection->prepare(
            "select login from user where {$column}=?"
        );
        $statement->execute([
            $value
        ]);
        return $statement->fetch();
    }
}
