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
        Schema::create('QXT_KHACH_HANG', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('qxtKhachHang', 225)->unique(); // Tên khách hàng duy nhất
            $table->string('qxtEmail', 100)->unique(); // Email duy nhất
            $table->string('qxtMatKhau', 255); // Mật khẩu (mã hóa)
            $table->string('qxtDienThoai', 15); // Số điện thoại
            $table->string('qxtDiaChi', 255); // Địa chỉ
            $table->date('qxtNgayDangKy'); // Ngày đăng ký
            $table->tinyInteger('qxtTrangThai')->default(1); // Trạng thái (1 = hoạt động, 0 = không hoạt động)
            $table->timestamps(); // created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QXT_KHACH_HANG');
    }
};