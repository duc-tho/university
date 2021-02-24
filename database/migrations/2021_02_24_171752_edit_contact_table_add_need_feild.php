<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditContactTableAddNeedFeild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->string('contact_title')->nullable();
            $table->string('website')->nullable();
            $table->string('hotline')->nullable();
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
            $table->dropColumn('contact_title');
            $table->dropColumn('website');
            $table->dropColumn('hotline');
        });
    }
}
