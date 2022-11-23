<?php

use App\Controllers\PostController;
use App\Core\Router;

//-----------Rotas do Usuário(não admin)-------------//
$router->get('cadastro', 'UserController@');
$router->get('lista-usuarios', 'UserController@index');
$router->get('landing-page', 'PostController@');
$router->get('visualizar-post', 'PostController@');


//-----------Rotas do Usuário(admin)-------------//
$router->get('dashboard', 'UserController@');
// $router->get('lista-usuarios', 'UserController@');
$router->get('lista-posts', 'PostController@index');
$router->post('lista-posts/create', 'PostController@store');
$router->post('lista-usuarios/delete', 'UserController@delete');
$router->post('lista-usuarios/create', 'UserController@store');



