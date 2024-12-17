<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Thêm dòng này

class QxtVattuTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('qxtvattu')->insert([
            'qxtMaVTu' => 'DD01',
            'qxtTenVTu' => 'Đầu DVD Hitachi 1 cửa',
            'qxtDvTinh' => 'Bộ',
            'qxtPhanTram' => 40,
        ]);
        DB::table('qxtvattu')->insert([
            'qxtMaVTu' => 'DD02',
            'qxtTenVTu' => 'Đầu DVD Hitachi 2 cửa',
            'qxtDvTinh' => 'Bộ',
            'qxtPhanTram' => 50,
        ]);
    }
}
