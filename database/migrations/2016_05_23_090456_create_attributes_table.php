<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');

            //Baum
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();

            $table->unsignedInteger('posts_id');
            $table->foreign('posts_id')->references('id')->on('posts');

            $table->string('key');
            $table->text('value');

            $table->string('created_by');
            $table->string('updated_by');
            $table->unsignedInteger('created_by_id')->nullable()->index();
            $table->unsignedInteger('updated_by_id')->nullable()->index();
            $table->timestamps();

            $table->index(['posts_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attributes');
    }
}
