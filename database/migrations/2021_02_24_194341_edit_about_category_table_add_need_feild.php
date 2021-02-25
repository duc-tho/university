<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditAboutCategoryTableAddNeedFeild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_category', function (Blueprint $table) {
            $table->text('intro_title')->nullable();
            $table->integer('view_count')->default(0);
            $table->string('meta_keywords')->nullable();
            $table->string('meta_descriptions')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_category', function (Blueprint $table) {
            $table->dropColumn('intro_title');
            $table->dropColumn('view_count');
            $table->dropColumn('meta_keywords');
            $table->dropColumn('meta_descriptions');
        });
    }
}
