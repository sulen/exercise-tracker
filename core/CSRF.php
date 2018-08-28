<?php
namespace App\Core;

class CSRF
{
    public static function createToken()
    {
        $token = md5(uniqid(rand(), true));
        $_SESSION['csrf_token'] = $token;
        $_SESSION['csrf_token_time'] = time();
        return $token;
    }

    public static function destroyToken()
    {
        $_SESSION['csrf_token'] = null;
        $_SESSION['csrf_token_time'] = null;
        return true;
    }

    public static function generateHTML()
    {
        $token = static::createToken();
        return "<input type=\"hidden\" name=\"csrf_token\" value=\"{$token}\">\n";
    }

    public static function isValid()
    {
        if (isset($_POST['csrf_token'])) {
            return $_POST['csrf_token'] === $_SESSION['csrf_token'];
        }
        return false;
    }

    public static function isExpired()
    {
        $maxTime = 60 * 15;
        if (!isset($_SESSION['csrf_token_time'])) {
            return true;
        }
        $tokenTime = $_SESSION['csrf_token_time'];
        if (($tokenTime + $maxTime) < time()) {
            static::destroyToken();
            return true;
        }
        return false;
    }

    public static function validate()
    {
        if (!static::isValid() || static::isExpired()) {
            echo 'Form expired, try again.';
            die();
        }
    }
}