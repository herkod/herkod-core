<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_categories', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('posts_id');
            $table->foreign('posts_id')->references('id')->on('posts');

            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

            $table->string('created_by');
            $table->string('updated_by');
            $table->unsignedInteger('created_by_id')->nullable()->index();
            $table->unsignedInteger('updated_by_id')->nullable()->index();
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
        Schema::drop('posts_categories');
    }
}
