<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialized', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('faculty_id')->nullable()->index('faculty_id');
            $table->string('name');
            $table->string('slug', 500);
            $table->string('image', 2048)->nullable();
            $table->mediumText('intro')->nullable();
            $table->mediumText('intro_summary')->nullable()->comment('Giới thiệu tóm tắt');
            $table->text('icons')->nullable();
            $table->text('level_educate')->nullable();
            $table->text('type_educate')->nullable();
            $table->text('type_time')->nullable();
            $table->text('object_educate')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('specialized');
    }
}
