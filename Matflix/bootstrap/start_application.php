<?php

namespace bootstrap;

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$config = [
    "driver" => "mysql",
    "host" => "127.0.0.1",
    "database" => "", // coloca o nome do banco aqui
    "username" => "root",
    "password" => "",

    "charset" => "utf8",
    "collation" => "utf8_general_ci",
];

$capsule->addConnection($config);
$capsule->setAsGlobal();
$capsule->bootEloquent();

