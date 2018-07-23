<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_code')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('pseudo')->unique();
            $table->string('code_parrain');
            $table->string('code_activation')->unique();
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('position_parrain');
            $table->string('last_level_codes')->default('!');
            $table->string('type_fieuil')->default('DIRECT');
            $table->boolean('sup_admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
