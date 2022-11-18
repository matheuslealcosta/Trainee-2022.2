<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class addadminuserstable
{
    public static function up()
    {
        Capsule::schema()->table("users", function (Blueprint $table) {
            $table->boolean("admin")->after("id")->default(0);
        });
    }

    public static function down() {
        Capsule::schema()->dropColumns("users", "admin");
    }
}