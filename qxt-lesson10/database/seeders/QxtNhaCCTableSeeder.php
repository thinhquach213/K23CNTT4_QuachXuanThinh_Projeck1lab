<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class QxtNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('qxtnhacc')->insert([
                'qxtMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'qxtTenNCC'=>$faker->sentence(5),
                'qxtDiachi'=>$faker->address(),
                'qxtDienthoai'=>$faker->phoneNumber(10),
                'qxtemaill'=>$faker->email(),
                'qxtHAHA'=>$faker->boolean()
            ]);
        }
    }
}
