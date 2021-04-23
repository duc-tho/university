<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpecializedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialized', function (Blueprint $table) {
            $table->foreign('faculty_id', 'specialized_ibfk_1')->references('id')->on('faculty')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialized', function (Blueprint $table) {
            $table->dropForeign('specialized_ibfk_1');
        });
    }
}
