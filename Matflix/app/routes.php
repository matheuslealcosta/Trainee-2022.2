<?php

use App\Controllers\PostController;
use App\Core\Router;

//-----------Rotas do Usuário(não admin)-------------//
$router->get('cadastro', 'UserController@');
$router->get('landing-page', 'PostController@landingPage');
$router->get('visualizar-posts', 'PostController@listPosts');
$router->get('login', 'UserController@login');


//-----------Rotas do Usuário(admin)-------------//
$router->get('dashboard', 'UserController@dashboard');
$router->get('lista-usuarios', "UserController@listUserAdm");
// $router->get('lista-usuarios', 'UserController@');
$router->get('lista-posts', 'PostController@index');
$router->post('lista-posts/create', 'PostController@store');
$router->post('lista-usuarios/delete', 'UserController@delete');
$router->post('lista-usuarios/create', 'UserController@store');
$router->post('lista-usuarios/edit', 'UserController@editar');
$router->post('login/create', 'UserController@newacc');
$router->get('login', 'UserController@login');




