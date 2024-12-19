<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QXT_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qxtMatKhau = md5("123456@");

        
        DB::table('QXT_QUAN_TRI')->updateOrInsert(
            ['qxtTaiKhoan' => 'quachxuanthinh213@gmail.com'], 
            [
                'qxtMatKhau' => $qxtMatKhau,
                'qxtTrangThai' => 0,
            ]
        );

        DB::table('QXT_QUAN_TRI')->updateOrInsert(
            ['qxtTaiKhoan' => '0123456789'],
            [
                'qxtMatKhau' => $qxtMatKhau,
                'qxtTrangThai' => 0,
            ]
        );
    }
}
