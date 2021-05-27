<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('category_id')->nullable()->index('category_id');
            $table->string('title');
            $table->string('slug', 500);
            $table->string('image', 2048);
            $table->mediumText('content');
            $table->string('location')->nullable()->comment('Địa điểm');
            $table->mediumText('description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->dateTime('event_time')->nullable()->comment('Thời gian');
            $table->unsignedInteger('view_count')->default(0);
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
        Schema::dropIfExists('news');
    }
}
