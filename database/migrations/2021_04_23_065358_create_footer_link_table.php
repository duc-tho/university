<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_link', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('footer_link_category_id')->nullable()->index('footer_link_category_id');
            $table->string('title')->nullable();
            $table->string('url', 2048)->nullable()->default(':javascript');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer_link');
    }
}
