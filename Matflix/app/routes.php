<?php

use App\Controllers\PostController;
use App\Core\Router;

//-----------Rotas do Usuário(não admin)-------------//
$router->get('cadastro', 'UserController@');
$router->get('landing-page', 'PostController@landingPage');
$router->get('lista-posts', 'PostController@listPosts');
$router->get('login', 'UserController@login');

$router->post('lista-posts/post-individual', 'PostController@show');
$router->get('visualizar-post', 'PostController@');
$router->post('lista-posts/search', 'PostController@showCategorias');
$router->post('lista-usuarios/create', 'UserController@store');

//-----------Rotas do Usuário(admin)-------------//
$router->get('dashboard', 'UserController@dashboard');
$router->get('lista-usuarios', "UserController@listUserAdm");
// $router->get('lista-usuarios', 'UserController@');
$router->post('lista-usuarios/delete', 'UserController@delete');
$router->post('lista-usuarios/create', 'UserController@store');
$router->post('lista-usuarios/edit', 'UserController@editar');
$router->post('login/create', 'UserController@newacc');
$router->get('login', 'UserController@login');

$router->get('lista-posts-admin', 'PostController@index');
$router->post('lista-posts-admin/create', 'PostController@store');
$router->post('lista-posts-admin/delete', 'PostController@delete');
$router->post('lista-posts-admin/update', 'PostController@update');



