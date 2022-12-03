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

        $page =1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);
            if($page < 0) redirect('lista-usuarios');
        }

        $total_pages = ceil(User::count()/10);
    
        // if($page>1)
        //     $users = User::skip($limit*($page-1))->take($limit)->get();
        // else
        //     $users = User::limit(10)->get();

        $users = User::forPage($page,10)->get();
        return view('admin/listaUsuarios', compact('users','page' ,'total_pages'));
    }

    public function store(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        // $password = password_hash($password, PASSWORD_DEFAULT);
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

    public function editar(){
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($password, PASSWORD_DEFAULT);

        App::get('database')->update('users', compact('name', 'email', 'password','id'));

        return redirect('lista-usuarios');
    }
    public function login(){

        return view('site/login');
    }

    public function newacc(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $user = new User();
        $user->name =$name;
        $user->email = $email;
        $user->password = $password;
        App::get('database')->insert('users', compact('name', 'email', 'password'));
        return redirect('login');
    }

    public function verify(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        $email = App::get('database')->verify('users', $name, $password);
        $_SESSION['logado'] = $email;
        if (User::get()->where('email','=', $email)->first() != null) {
            $message = "Logado com sucesso";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return redirect('landing-page');
        }
        else{
            $message = "Confira o usuário e senha digitados ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            var_dump($email);
            return redirect('login');
        }

    }
}
