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
            $table->bigInteger('id', true);
            $table->bigInteger('faculty_id')->nullable();
            $table->string('nickname');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('avatar', 2048)->nullable();
            $table->string('email', 150);
            $table->string('phone', 12);
            $table->text('password');
            $table->date('birthday')->nullable();
            $table->rememberToken();
            $table->boolean('status')->default(0);
            $table->boolean('isAdmin')->default(0)->comment('Quản trị viên');
            $table->boolean('isSystemAccount')->default(0)->comment('Quyền cao nhất trong hệ thống');
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
