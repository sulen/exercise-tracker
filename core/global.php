<?php

use App\Core\CSRF;

function csrf() {
    return CSRF::generateHTML();
}

function logged_in() {
    return isset($_SESSION['logged_in']);
}