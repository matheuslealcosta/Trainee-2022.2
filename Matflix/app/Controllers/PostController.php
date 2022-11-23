<?php

namespace App\Controllers;

class PostController extends Controller
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
        // $id = $_SESSION['id'];
        return view('admin/listadeposts_admin');
    }

    

}