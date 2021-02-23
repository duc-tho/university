<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFacultyTableIntroSummaryLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculty', function (Blueprint $table) {
            $table->text('intro_summary')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculty', function (Blueprint $table) {
            $table->string('intro_summary', 500)->change();
        });
    }
}
