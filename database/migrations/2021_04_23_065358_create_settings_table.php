<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('faculty_id')->nullable()->index('faculty_id');
            $table->string('name');
            $table->string('display_name')->nullable();
            $table->string('type', 50)->default('text')->comment('text, video, image');
            $table->mediumText('value')->nullable();
            $table->boolean('greneral')->default(0)->comment('Cài đặt chung');
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
