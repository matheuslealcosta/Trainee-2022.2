<?php

namespace App\Controllers;

class controller_name extends Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['logado'])) {
            return redirect('login');
            exit();
        }
    }

}