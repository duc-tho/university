<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('faculty_id')->nullable()->index('faculty_id');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->string('title');
            $table->string('slug', 500);
            $table->string('meta_keywords')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->boolean('show_at_home')->default(0)->comment('Hiện ở trang chủ');
            $table->boolean('show_at_notification')->default(0)->comment('Hiện ở trang thông báo');
            $table->boolean('show_at_news')->default(0)->comment('Hiện ở trang tin tức');
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
        Schema::dropIfExists('category');
    }
}
