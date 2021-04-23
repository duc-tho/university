<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('image_category_id')->nullable()->index('image_category_id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image', 2048)->nullable();
            $table->unsignedTinyInteger('display_order')->nullable();
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
        Schema::dropIfExists('image');
    }
}
