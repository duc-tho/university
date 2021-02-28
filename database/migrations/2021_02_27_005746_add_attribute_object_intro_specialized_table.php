<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeObjectIntroSpecializedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialized', function (Blueprint $table) {
            $table->text('level_educate')->nullable();
            $table->text('type_educate')->nullable();
            $table->text('type_time')->nullable();
            $table->text('object_educate')->nullable();
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
            $table->dropColumn('level_educate');
            $table->dropColumn('type_educate');
            $table->dropColumn('type_time');
            $table->dropColumn('object_educate');
        });
    }
}
