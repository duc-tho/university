<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slide', function (Blueprint $table) {
            $table->foreign('faculty_id', 'slide_ibfk_1')->references('id')->on('faculty')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slide', function (Blueprint $table) {
            $table->dropForeign('slide_ibfk_1');
        });
    }
}
