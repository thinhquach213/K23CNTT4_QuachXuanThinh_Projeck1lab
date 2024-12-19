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
        Schema::create('QXT_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('qxtHoaDonID')->references('id')->on('QXT_HOA_DON');
            $table->bigInteger('qxtSanPhamID')->references('id')->on('QXT_SAN_PHAM');
            $table->integer('qxtSoLuongMua');
            $table->integer('qxtDonGiaMua');
            $table->float('qxtThanhTien');
            $table->tinyInteger('qxtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QXT_CT_HOA_DON');
    }
};
