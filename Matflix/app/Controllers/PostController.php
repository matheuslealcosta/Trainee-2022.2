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
        $posts = Post::all();

        foreach($posts as $post)
        {
            $dateFormat = new DateTime($post->created);
            $post->created = $dateFormat->format("d/m/Y");
        }

        return view('admin/listadeposts_admin', compact("posts"));
    }

    public function store()
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $content = $_POST['content'];
        $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_SPECIAL_CHARS);
        $created = date("Y-m-d", null);
        $post = new Post();
        $post->title =$title;
        $post->content = $content;
        $post->image = $image;
        $post->created = $created;
        
        App::get('database')->insert('posts', compact('title', 'content', 'image', 'created'));
        return redirect('lista-posts');
    }

    public function landingPage()
    {
   
        return view('site/landing_page');
    }

    public function listPosts()
    {
        $posts = Post::all();

        foreach($posts as $post)
        {
            $dateFormat = new DateTime($post->created);
            $post->created = $dateFormat->format("d/m/Y");
        }

        return view('site/lista_de_posts', compact("posts"));
    }
    

}