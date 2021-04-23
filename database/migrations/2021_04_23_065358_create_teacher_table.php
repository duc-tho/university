<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('faculty_id')->nullable()->index('faculty_id');
            $table->string('name');
            $table->mediumText('intro')->nullable()->comment('Giới thiệu');
            $table->string('image')->nullable()->comment('Ảnh đại diện');
            $table->string('position')->nullable()->comment('Vị trí, chức vụ');
            $table->mediumText('evaluate')->nullable()->comment('Đánh giá của giáo viên');
            $table->boolean('representative')->default(0)->comment('Sinh Viên Tiêu Biểu');
            $table->boolean('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
