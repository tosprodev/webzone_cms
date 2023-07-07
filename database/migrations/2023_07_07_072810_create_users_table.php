<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('ccode');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('emp_id')->unique();
            $table->string('usertype');
            $table->string('team');
            $table->string('designation');
            $table->string('status');
            $table->string('password');
            $table->string('user_dp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
