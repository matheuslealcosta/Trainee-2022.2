<?php

namespace App\Controllers;

use App\Core\Database\QueryBuilder as DatabaseQueryBuilder;
use App\Models\User;
use App\Core\App;

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
        $users = User::all();
        return view('admin/listaUsuarios', compact('users'));
    }

    public function store(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $user = new User();
        $user->name =$name;
        $user->email = $email;
        $user->password = $password;
        App::get('database')->insert('users', compact('name', 'email', 'password'));
        return redirect('lista-usuarios');
    }

    public function delete(){
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        App::get('database')->delete('users', $id);
        return redirect('lista-usuarios');
    }
}