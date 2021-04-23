<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToImageCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('image_category', function (Blueprint $table) {
            $table->foreign('faculty_id', 'image_category_ibfk_1')->references('id')->on('faculty')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
            $table->dropForeign('image_category_ibfk_1');
        });
    }
}
