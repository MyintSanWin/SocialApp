<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // //first method
            // $table->foreignId('user_id');//user_id

            // //describe
            // $table->foreign('user_id')->references('id')->on('users');


            //second method
            $table->foreignId('user_id')->constrained()->onDelete('cascade');//users

            $table->string('title');
            $table->string('image');
            $table->longText('content');
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
        Schema::dropIfExists('posts');
    }
}
