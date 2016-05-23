<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_specifications', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('posts_id');
            $table->foreign('posts_id')->references('id')->on('posts');

            $table->unsignedInteger('specifications_id');
            $table->foreign('specifications_id')->references('id')->on('specifications');

            $table->string('value');

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
        Schema::drop('posts_specifications');
    }
}
