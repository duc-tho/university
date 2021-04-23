<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFooterLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('footer_link', function (Blueprint $table) {
            $table->foreign('footer_link_category_id', 'footer_link_ibfk_1')->references('id')->on('footer_link_category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('footer_link', function (Blueprint $table) {
            $table->dropForeign('footer_link_ibfk_1');
        });
    }
}
