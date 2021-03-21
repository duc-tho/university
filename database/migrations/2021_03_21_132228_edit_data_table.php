<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('news', function (Blueprint $table) {
        //     $table->mediumText('content')->change();
        //     $table->mediumText('description')->change();
        // });
        Schema::table('faculty', function (Blueprint $table) {
            $table->mediumText('intro')->change();
            $table->mediumText('intro_summary')->change();
        });
        // Schema::table('specialized, ', function (Blueprint $table) {
        //     $table->mediumText('intro')->change();
        //     $table->mediumText('intro_summary')->change();
        // });
        // Schema::table('student_representative', function (Blueprint $table) {
        //     $table->mediumText('evaluate')->change();
        //     $table->mediumText('intro')->change();
        // });
        // Schema::table('teacher_representative', function (Blueprint $table) {
        //     $table->mediumText('evaluate')->change();
        //     $table->mediumText('intro')->change();
        // });
        // Schema::table('about_category', function (Blueprint $table) {
        //     $table->mediumText('intro')->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('news', function (Blueprint $table) {
        //     $table->dropColumn('content');
        //     $table->dropColumn('description');
        // });
        Schema::table('faculty', function (Blueprint $table) {
            $table->dropColumn('intro');
            $table->dropColumn('intro_summary');
        });
        // Schema::table('specialized', function (Blueprint $table) {
        //     $table->dropColumn('intro');
        //     $table->dropColumn('intro_summary');
        // });
        // Schema::table('student_representative', function (Blueprint $table) {
        //     $table->dropColumn('evaluate');
        //     $table->dropColumn('intro');
        // });
        // Schema::table('teacher_representative', function (Blueprint $table) {
        //     $table->dropColumn('evaluate');
        //     $table->dropColumn('intro');
        // });
        // Schema::table('about_category', function (Blueprint $table) {
        //     $table->dropColumn('intro');
        // });
    }
}
