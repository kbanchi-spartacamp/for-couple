<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdealCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            ['name' => '家事'],
            ['name' => '仕事'],
            ['name' => '育児'],
            ['name' => 'お金'],
            ['name' => '健康'],
            ['name' => '趣味'],
            ['name' => 'その他'],
        ];
        DB::table('ideal_categories')->insert($param);
    }
}
