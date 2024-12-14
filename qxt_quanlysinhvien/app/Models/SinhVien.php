<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhVienTable extends Migration
{
    public function up()
    {
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->id();
            $table->string('MaSV');
            $table->string('HoTen');
            $table->date('NgaySinh');
            $table->string('GioiTinh');
            $table->string('DiaChi');
            $table->string('SoDT');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sinhvien');
    }
}
