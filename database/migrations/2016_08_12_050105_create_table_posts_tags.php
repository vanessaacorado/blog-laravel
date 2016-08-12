<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostsTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {
           $table->integer('post_id')->unsigned(); 
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id') ->references('id')->on('tags');
            $table->foreign('post_id')->references('id')->on('posts');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts_tags');
    }
}
