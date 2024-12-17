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
        Schema::create('qxtdondh', function (Blueprint $table) {
            //$table->id();
           // $table->timestamps();
           $table->string('qxtSoDH')->primary();
           $table->date('qxtNgayDH');
           $table->string('qxtMaNCC');
           $table->foreign('qxtMaNCC')->references('qxtMaNCC')->on('qxtnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qxtdondh');
    }
};
