<?php

namespace App\Controllers;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        // if(!isset($_SESSION['logado'])) {
        //     return redirect('login');
        //     exit();
        // }
    }


    public function index(){
        $id = $_SESSION['id'];
        return view('site/landing_page',$id);
    }

    
}