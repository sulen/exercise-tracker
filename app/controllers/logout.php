<?php

use App\Core\Session;

if (isset($_POST['logout'])) {
    Session::logout();
}
