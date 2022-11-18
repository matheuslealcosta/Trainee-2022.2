<?php

namespace App\Controllers;
require "bootstrap/start_application.php";

abstract class Controller {

    public function __construct()
    {
        session_start();
    }

}