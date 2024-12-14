<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQxtSinhvienTable extends Migration
{
    public function up()
    {
        Schema::create('qxt_sinhvien', function (Blueprint $table) {
            $table->id(); // Tạo cột ID tự động
            $table->string('qxtMaSV'); // Mã sinh viên
            $table->string('qxtHoSV'); // Họ sinh viên
            $table->string('qxtPhai'); // Phái
            $table->date('qxtNgaySinh'); // Ngày sinh
            $table->string('qxtNoiSinh'); // Nơi sinh
            $table->string('qxtMaKH'); // Mã khóa học
            $table->timestamps(); // Cột thời gian created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('qxt_sinhvien');
    }
}
