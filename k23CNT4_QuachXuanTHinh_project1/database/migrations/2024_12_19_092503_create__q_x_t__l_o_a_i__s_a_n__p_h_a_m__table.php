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
        Schema::create('QXT_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('qxtMaLoai',255)->unique();
            $table->string('qxtTenLoai',225);
            $table->tinyInteger('qxtTrangThai');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QXT_LOAI_SAN_PHAM');
    }
};
