<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('faculty_id')->nullable()->index('faculty_id');
            $table->string('name');
            $table->mediumText('intro')->nullable()->comment('Giới thiệu');
            $table->string('image', 2048)->nullable()->comment('Ảnh đại diện');
            $table->mediumText('evaluate')->nullable()->comment('Đánh giá của sinh viên');
            $table->boolean('representative')->default(0)->comment('Sinh Viên Tiêu Biểu');
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
        Schema::dropIfExists('student');
    }
}
