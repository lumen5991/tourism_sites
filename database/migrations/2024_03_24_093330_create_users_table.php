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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('picture')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('password');
            $table->enum('status', ['pending', 'active'])->default('active');
            $table->timestamp('email_verified_at')->nullable(); 
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
