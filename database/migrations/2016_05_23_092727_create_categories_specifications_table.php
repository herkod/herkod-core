<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_specifications', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

            $table->unsignedInteger('specifications_id');
            $table->foreign('specifications_id')->references('id')->on('specifications');

            $table->unsignedInteger('order')->default(0)->index();

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
        Schema::drop('categories_specifications');
    }
}
