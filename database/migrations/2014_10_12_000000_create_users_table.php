<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email', 50);
            $table->string('username', 50)->unique()->index();
            $table->string('password')->nullable()->index();

            $table->boolean('is_active')->default(1)->index();

            $table->string('last_login_ip', 50)->nullable();
            $table->dateTime('last_login_time')->nullable();
            $table->dateTime('last_activity_time')->nullable();

            $table->rememberToken();

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
        Schema::drop('users');
    }
}
