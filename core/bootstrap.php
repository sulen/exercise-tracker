<?php

use App\Core\App;
use Core\Database;

App::bind('database', new Database());
$database = App::get('database')->connection;

session_start();

require_once 'global.php';
