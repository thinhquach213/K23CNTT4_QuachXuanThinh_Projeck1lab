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
        Schema::create('QXT_SAN_PHAM', function (Blueprint $table) {
            $table->id(); 
            $table->string('qxtMaSanPham', 255)->unique();
            $table->string('qxtTenSanPham', 255); 
            $table->string('qxtHinhAnh',225);
            $table->integer('qxtSoLuong');
            $table->float('qxtDonGia'); 
            $table->unsignedBigInteger('qxtMaLoai'); 
            $table->tinyInteger('qxtTrangThai');
            $table->timestamps(); 

            
            $table->foreign('qxtMaLoai')->references('id')->on('QXT_LOAI_SAN_PHAM')->onDelete('cascade'); 
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QXt_SAN_PHAM');
    }
};
