<?php
namespace App\Core;
class Session
{
    public static function protectedPage()
    {
        if (!self::isLoggedIn() || !self::isValid()) {
            self::end();
            header('Location: /login');
            exit;
        }
    }

    public static function login()
    {
        session_regenerate_id();

        $_SESSION['logged_in'] = true;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    }

    public static function logout()
    {
        $_SESSION['logged_in'] = false;
        self::end();
    }

    protected static function end()
    {
        session_unset();
        session_destroy();
    }

    protected static function isValid()
    {
        return self::propertyMaches('user_agent', 'HTTP_USER_AGENT') &&
            self::propertyMaches('ip', 'REMOTE_ADDR');
    }

    protected static function isLoggedIn()
    {
        return (isset($_SESSION['logged_in']) && $_SESSION['logged_in']);
    }

    protected static function propertyMaches($sessionProp, $serverProp)
    {
        if (!isset($_SESSION[$sessionProp]) || !isset($_SERVER[$serverProp])) {
            return false;
        }

        return $_SESSION[$sessionProp] === $_SERVER[$serverProp];
    }
}