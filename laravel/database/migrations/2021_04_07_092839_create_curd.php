<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('masv');
            $table->string('name');
            $table->string('lop');
            $table->string('noisinh');
            $table->string('ngaysinh');
            $table->string('gioitinh');
            $table->string('magv_post');
            $table->string('tenmh_monhoc');
            $table->string('email')->unique();

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
        Schema::dropIfExists('curd');
    }
}
