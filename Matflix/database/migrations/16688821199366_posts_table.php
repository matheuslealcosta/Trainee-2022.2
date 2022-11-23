<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class poststable
{
    public static function up()
    {
        Capsule::schema()->create("posts", function (Blueprint $table) {
            $table->increments("id")->primary();
            $table->string("title");
            $table->string("content");
            // $table->integer("author");
            $table->string("image");
            //sintaxe que simplifica a criação de chave estrangeira em uma só linha
            $table->foreignId("user_id")->constrained("users");
            $table->date("created");
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("posts");
    }
}