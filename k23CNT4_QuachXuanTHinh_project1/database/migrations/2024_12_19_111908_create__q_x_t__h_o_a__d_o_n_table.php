<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('QXT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('qxtMaHoaDon',255)->unique();
            $table->bigInteger('qxtMaKhachHang')->references('id')->on('QXT_KHACH_HANG');
            $table->date('qxtNgayHoaDon');
            $table->string('qxtHoTenKhachHang',225);
            $table->string('qxtEmail',225);
            $table->string('qxtDienThoai',225);
            $table->string('qxtDiaChi',225);
            $table->float('qxtTongTriGia');
            $table->tinyInteger('qxtTrangThai');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QXT_HOA_DON');
    }
};
