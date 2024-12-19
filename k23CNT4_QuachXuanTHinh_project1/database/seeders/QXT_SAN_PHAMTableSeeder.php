<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QXT_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('QXT_SAN_PHAM')->insert([
            'qxtMaSanPham' => 'VP001',
            'qxtTenSanPham' => 'Cây Phú Quý',
            'qxtHinhAnh' => 'images/san-pham/VP001.jpg',
            'qxtSoLuong' => 133,
            'qxtDonGia' => 100,
            'qxtMaLoai' => 3, // Mã loại sản phẩm cần tồn tại trong bảng QXT_LOAI_SAN_PHAM
            'qxtTrangThai' => 0,
        ]);

        DB::table('QXT_SAN_PHAM')->insert([
            'qxtMaSanPham' => 'VP002',
            'qxtTenSanPham' => 'Cây Đại Phú Quý',
            'qxtHinhAnh' => 'images/san-pham/VP002.jpg',
            'qxtSoLuong' => 14,
            'qxtDonGia' => 100,
            'qxtMaLoai' => 3,
            'qxtTrangThai' => 0,
        ]);

        DB::table('QXT_SAN_PHAM')->insert([
            'qxtMaSanPham' => 'VP003',
            'qxtTenSanPham' => 'Cây Hạnh Phúc',
            'qxtHinhAnh' => 'images/san-pham/VP003.jpg',
            'qxtSoLuong' => 15,
            'qxtDonGia' => 100,
            'qxtMaLoai' => 3,
            'qxtTrangThai' => 0,
        ]);

        DB::table('QXT_SAN_PHAM')->insert([
            'qxtMaSanPham' => 'VP004',
            'qxtTenSanPham' => 'Cây Xung Sương',
            'qxtHinhAnh' => 'images/san-pham/VP004.jpg',
            'qxtSoLuong' => 54,
            'qxtDonGia' => 100,
            'qxtMaLoai' => 3,
            'qxtTrangThai' => 0,
        ]);
    }
}
