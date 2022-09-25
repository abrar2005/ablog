<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('gender'); 
            $table->string('username')->unique();
            $table->string('profile_pic');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('location')->nullable();
            $table->longText('bio')->nullable();
            $table->string('personal_job');
            $table->json('followers')->nullable();
            $table->json('saved')->nullable();
            $table->json('liked_content')->nullable();
            $table->json('followed_category')->nullable();
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
};
