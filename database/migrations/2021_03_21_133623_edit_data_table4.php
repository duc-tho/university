<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditDataTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('student_representative', function (Blueprint $table) {
            $table->mediumText('evaluate')->change();
            $table->mediumText('intro')->change();
        });
        Schema::table('teacher_representative', function (Blueprint $table) {
            $table->mediumText('evaluate')->change();
            $table->mediumText('intro')->change();
        });
        Schema::table('about_category', function (Blueprint $table) {
            $table->mediumText('intro')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('student_representative', function (Blueprint $table) {
            $table->dropColumn('evaluate');
            $table->dropColumn('intro');
        });
        Schema::table('teacher_representative', function (Blueprint $table) {
            $table->dropColumn('evaluate');
            $table->dropColumn('intro');
        });
        Schema::table('about_category', function (Blueprint $table) {
            $table->dropColumn('intro');
        });
    }
}
