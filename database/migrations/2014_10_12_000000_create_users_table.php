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
            $table->string('provider');
            $table->string('provider_id');
            $table->string('email');
            $table->string('name');
            $table->string('avatar');
            $table->date('birthday');
            $table->tinyInteger('friend_see');
            $table->tinyInteger('friend_by_friend_see');
            $table->tinyInteger('stranger_see');
            $table->rememberToken();
            $table->timestamps();
            $table->index('provider');
            $table->unique(['provider', 'email']);
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
