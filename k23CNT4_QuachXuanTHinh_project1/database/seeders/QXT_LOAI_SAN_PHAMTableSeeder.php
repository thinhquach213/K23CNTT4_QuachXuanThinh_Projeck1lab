<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QXT_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('QXT_LOAI_SAN_PHAM')->insert([
            'qxtMaLoai' =>"L001",
            'qxtTenLoai' =>"cay canh van phong",
            'qxtTrangThai' =>0
        ]);
        DB::table('QXT_LOAI_SAN_PHAM')->insert([
            'qxtMaLoai' =>"L002",
            'qxtTenLoai' =>"cay lan dot bien",
            'qxtTrangThai' =>0
        ]);
        DB::table('QXT_LOAI_SAN_PHAM')->insert([
            'qxtMaLoai' =>"L003",
            'qxtTenLoai' =>"cay vang",
            'qxtTrangThai' =>0
        ]);
        DB::table('QXT_LOAI_SAN_PHAM')->insert([
            'qxtMaLoai' =>"L004",
            'qxtTenLoai' =>"cay de ban",
            'qxtTrangThai' =>0
        ]);
        DB::table('QXT_LOAI_SAN_PHAM')->insert([
            'qxtMaLoai' =>"L005",
            'qxtTenLoai' =>"cay thuy canh",
            'qxtTrangThai' =>0
        ]);
    }
}
