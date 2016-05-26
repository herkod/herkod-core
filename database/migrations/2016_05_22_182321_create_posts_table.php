<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            //General
            $table->text('title');
            $table->text('content');
            $table->text('excerp');
            $table->string('slug');

            //Seo
            $table->string('title_meta')->nullable();
            $table->string('description_meta')->nullable();

            $table->enum('status', [
                'publish',
                'draft',
                'trash',
                'inherit',
                'pending',
                'future',
            ])->index();

            $table->unsignedInteger('order')->default(0)->index();
            //attachment, page, post, menu, revision
            $table->string('type', 20);
            $table->string('mime_type', 100);
            $table->unsignedInteger('parent_id')->nullable()->index();

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
        Schema::drop('posts');
    }
}
