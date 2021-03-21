<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditDataTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialized', function (Blueprint $table) {
            $table->mediumText('intro')->change();
            $table->mediumText('intro_summary')->change();
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
            $table->dropColumn('intro');
            $table->dropColumn('intro_summary');
        });
    }
}
