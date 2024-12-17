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
        Schema::create('qxtnhacc', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('qxtMaNCC')->primary();
            $table->string('qxtTenNCC');
            $table->string('qxtDiachi');
            $table->string('qxtDienthoai');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qxtnhacc');
    }
};
