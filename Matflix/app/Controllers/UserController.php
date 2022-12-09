<?php

namespace App\Controllers;

use App\Core\Database\QueryBuilder as DatabaseQueryBuilder;
use App\Models\User;
use App\Core\App;
use App\Core\Request;

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

    public function paginate($limit){
        $page =1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);
            if($page < 0) redirect('lista-usuarios');
        }

        $total_pages = ceil(User::count()/$limit);

        $users = User::forPage($page,$limit)->get();
        return compact('users','page','total_pages');
    }

    public function listUserAdm(){
        $paginate = $this->paginate(10);
        $users = $paginate['users'];
        $page = $paginate['page'];
        $total_pages = $paginate['total_pages'];

        return view('admin/listaUsuarios', compact('users','page' ,'total_pages'));
    }


    public function store(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($name) || empty($email) || empty($password) ){
            $error = "Preencha todos os campos";

            $paginate = $this->paginate(10);
            $users = $paginate['users'];
            $page = $paginate['page'];
            $total_pages = $paginate['total_pages'];
            
            return view('admin/listaUsuarios', compact('error','users','page' ,'total_pages'));
        }

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

    public function editar(){
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($name) || empty($email) || empty($password) ){
            $error = "Preencha todos os campos!";

            $paginate = $this->paginate(10);
            $users = $paginate['users'];
            $page = $paginate['page'];
            $total_pages = $paginate['total_pages'];
            
            return view('admin/listaUsuarios', compact('error','users','page' ,'total_pages'));
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        App::get('database')->updateUsers('users', compact('name', 'email', 'password','id'));

        return redirect('lista-usuarios');
    }
    public function login(){

        return view('site/login');
    }
    public function dashboard(){

        return view('admin/dashboard');
    }

    public function verify(){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        $verificado = App::get('database')->verify('users', $email, $password);
        
        if ($verificado) {
            $message = "Logado com sucesso";
            $user = User::where('email', $email)->first();
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='/dashboard'</script>";
            return view('admin/dashboard', compact('user'));
        }
        else{
            $message = "Confira o usuário e senha digitados ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
            return redirect('login');
        }

    }
}
