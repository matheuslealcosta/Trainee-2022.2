<?php

namespace App\Controllers;

use App\Core\Database\QueryBuilder as DatabaseQueryBuilder;
use App\Models\Post;
use App\Core\App;
use DateTime;

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

    public function index()
    {
        $paginate = $this->paginate(10,0,'lista-posts-admin');
        $posts = $paginate['posts'];
        $page = $paginate['page'];
        $total_pages = $paginate['total_pages'];

        foreach($posts as $post)
        {
            $dateFormat = new DateTime($post->created);
            $post->created = $dateFormat->format("d/m/Y");
        }

        return view('admin/listadeposts_admin', compact("posts", "page", "total_pages"));
    }

    public function store()
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $content = $_POST['content'];

        $arquivo = $_FILES['image'];

        if((empty($title)) || (empty($content))|| ($arquivo['size'] == 0)){
            $error = "Preencha todos os campos!";

            $paginate = $this->paginate(10,0,'lista-posts-admin');
            $posts = $paginate['posts'];
            $page = $paginate['page'];
            $total_pages = $paginate['total_pages'];

            return view('/admin/listadeposts_admin',compact("posts", "page", "total_pages", "error"));
        }

        $pasta = 'public/img/';

        $image =  $pasta . $arquivo['name'];
        $image_temp = $arquivo['tmp_name'];
        move_uploaded_file($image_temp, $image);

        $created = date("Y-m-d", null);
        $post = new Post();
        $post->title =$title;
        $post->content = $content;
        $post->image = $image;
        $post->created = $created;

        App::get('database')->insert('posts', compact('title', 'content', 'image', 'created'));
        return redirect('lista-posts-admin');
    }

    public function landingPage()
    {
        $page =1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);
            if($page < 0) redirect('landing-page');
        }

        $total_pages = ceil(Post::count()/5); 

        $posts = Post::orderBy('id', 'desc')->forPage($page,5)->get();
        $post_carousel = Post::all();

        $min_arr = array(sizeof($post_carousel));
        
        for ($i=0; $i < sizeof($post_carousel); $i++) { 
            $min_arr[$i] = $post_carousel[$i]->id;
        }
    
        $min = min($min_arr);
        return view('site/landing_page', compact("posts",'post_carousel', "page", "total_pages", "min"));
    }

    private function paginate($limit, $count = 0,$redirect){
        $page =1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);
            if($page < 0) redirect($redirect);
        }

        $count!=0 ? $total_pages = ceil($count/$limit) : $total_pages = ceil(Post::count()/$limit); 

        $posts = Post::forPage($page,$limit)->get();
        return compact('posts', 'page', 'total_pages');
    }

    public function listPosts()
    {
       
        $paginate = $this->paginate(5,0,'lista-posts');
        $posts = $paginate['posts'];
        $page = $paginate['page'];
        $total_pages = $paginate['total_pages'];

        foreach($posts as $post)
        {
            $dateFormat = new DateTime($post->created);
            $post->created = $dateFormat->format("d/m/Y");
        }

        return view('site/lista_de_posts', compact("posts", "page", "total_pages"));
    }
    
    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);
        return redirect('lista-posts-admin');
    }

    public function update()
    {
        $id = $_POST['id'];
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $content = $_POST['content'];
        $arquivo = $_FILES['image'];

        if((empty($title)) || (empty($content))|| ($arquivo['size'] == 0)){
            $error = "Preencha todos os campos!";

            $paginate = $this->paginate(10,0,'lista-posts-admin');
            $posts = $paginate['posts'];
            $page = $paginate['page'];
            $total_pages = $paginate['total_pages'];

            return view('admin/listadeposts_admin', compact("posts", "page", "total_pages", "error"));
        }

        $pasta = 'public/img/';

        $image =  $pasta . $arquivo['name'];
        $image_temp = $arquivo['tmp_name'];
        move_uploaded_file($image_temp, $image);

        App::get('database')->updatePosts('posts', compact('id', 'title', 'content', 'image'));
        return redirect('lista-posts-admin');
    }  

    public function show()
    {
        $id = $_POST['id'];


        $post = App::get('database')->postIndividual($id);

        $dateFormat = new DateTime($post['created']);
        $post['created'] = $dateFormat->format("d/m/Y");
        
        return view('site/individual_visu', compact("post"));
    }

    public function showCategorias()
    {
        $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS);

        $posts = App::get('database')->pesquisaCategoria($search);
        
        // $count = count($posts);
        // $paginate = $this->paginate(5,$count,'lista-posts');
        // $page = $paginate['page'];
        // $total_pages = $paginate['total_pages'];
        return view('/site/lista_de_posts', compact('posts'));
    }

}