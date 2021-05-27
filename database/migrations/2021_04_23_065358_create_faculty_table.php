<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name');
            $table->string('slug', 500);
            $table->string('meta_keywords')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->mediumText('intro_summary')->nullable();
            $table->mediumText('intro')->nullable();
            $table->string('layout')->comment('Tên của layout');
            $table->string('image', 2048)->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty');
    }
}
