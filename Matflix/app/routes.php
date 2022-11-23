<?php

use App\Controllers\PostController;
use App\Core\Router;

//-----------Rotas do Usuário(não admin)-------------//
$router->get('cadastro', 'UserController@');
$router->get('lista-usuarios', 'UserController@index');
$router->get('landing-page', 'PostController@');
$router->get('visualizar-post', 'PostController@');
$router->post('lista-usuarios/create', 'UserController@store');

//-----------Rotas do Usuário(admin)-------------//
$router->get('dashboard', 'UserController@');
// $router->get('lista-usuarios', 'UserController@');
$router->get('lista-de-posts', 'PostController@index');



