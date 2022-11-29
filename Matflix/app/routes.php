<?php

use App\Controllers\PostController;
use App\Core\Router;

//-----------Rotas do Usuário(não admin)-------------//
//$router->get('cadastro', 'UserController@');
//$router->get('lista-usuarios', 'UserController@index');
//$router->get('landing-page', 'PostController@');
$router->get('lista-posts', 'PostController@index');
$router->post('post-individual', 'PostController@show');
$router->get('visualizar-post', 'PostController@');
$router->post('lista-usuarios/create', 'UserController@store');

//-----------Rotas do Usuário(admin)-------------//
$router->get('dashboard', 'UserController@');
// $router->get('lista-usuarios', 'UserController@');
$router->get('lista-posts-admin', 'PostController@index');
$router->post('lista-posts-admin/create', 'PostController@store');
$router->post('lista-posts-admin/delete', 'PostController@delete');
$router->post('lista-posts-admin/update', 'PostController@update');



