<?php

use App\Controllers\PostController;
use App\Core\Router;

//-----------Rotas do Usuário(não admin)-------------//
$router->get('cadastro', 'UserController@');
$router->get('login', 'UserController@index');
$router->get('landing-page', 'PostController@');
$router->get('visualizar-post', 'PostController@');

//-----------Rotas do Usuário(admin)-------------//
$router->get('dashboard', 'UserController@');
$router->get('lista-usuarios', 'UserController@');
$router->get('lista-de-posts', 'PostController@index');



