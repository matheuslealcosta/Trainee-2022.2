<?php

use App\Core\Router;

//-----------Rotas do Front-------------//
$router->get('landing_page', 'UserController@index');
$router->get('lista_de_posts','UserController@show');


