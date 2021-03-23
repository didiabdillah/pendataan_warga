<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('user_id', 64)->primary()->unique();
            $table->string('user_name', 255);
            $table->string('user_email', 255)->unique();
            $table->string('user_password', 255);
            $table->string('user_phone', 16)->unique();
            $table->enum('user_role', ['admin']);
            $table->string('user_image', 255);
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
