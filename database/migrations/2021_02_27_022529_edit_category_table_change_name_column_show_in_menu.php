<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditCategoryTableChangeNameColumnShowInMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu', function (Blueprint $table) {
            Schema::table('category', function (Blueprint $table) {
                $table->renameColumn('show_on_menu', 'show_at_news');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu', function (Blueprint $table) {
            Schema::table('category', function (Blueprint $table) {
                $table->renameColumn('show_at_news', 'show_on_menu');
            });
        });
    }
}
