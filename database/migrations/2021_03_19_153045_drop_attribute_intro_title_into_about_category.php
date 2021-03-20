<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAttributeIntroTitleIntoAboutCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_category', function (Blueprint $table) {
            $table->dropColumn('intro_title');
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
        });
    }
}
