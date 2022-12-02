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

        return view('site/lista_de_posts', compact("posts"));
    }

    public function store()
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $content = $_POST['content'];

        $arquivo = $_FILES['image'];
        $pasta = '../../../public/img/';

        $image =  $pasta . $arquivo['name'];

        $created = date("Y-m-d", null);
        $post = new Post();
        $post->title =$title;
        $post->content = $content;
        $post->image = $image;
        $post->created = $created;
        
        App::get('database')->insert('posts', compact('title', 'content', 'image', 'created'));
        return redirect('lista-posts-admin');
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
        $arquivo = $_POST['image'];

        $pasta = '../../../public/img/';

        $image =  $pasta . $arquivo;

        App::get('database')->update('posts', compact('id', 'title', 'content', 'image'));
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

        return view('site/lista_de_posts', compact('posts'));
    }

}