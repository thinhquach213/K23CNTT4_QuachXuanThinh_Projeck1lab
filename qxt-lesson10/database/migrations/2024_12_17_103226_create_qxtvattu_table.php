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
        Schema::create('qxtvattu', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('qxtMaVTu')->primary();
$table->string('qxtTenVTu')->unique();
$table->string('qxtDvTinh');
$table->float('qxtPhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qxtvattu');
    }
};
