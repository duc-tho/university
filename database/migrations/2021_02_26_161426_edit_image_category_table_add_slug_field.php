<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditImageCategoryTableAddSlugField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('image_category', function (Blueprint $table) {
            $table->string('slug')->nullable();
            $table->integer('parent_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_category', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('parent_id');
        });
    }
}
