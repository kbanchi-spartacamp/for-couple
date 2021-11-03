<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WifeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name' => 'まるこ',
                'user_id' => 1
            ],
            [
                'name' => 'たまこ',
                'user_id' => 1
            ],
            [
                'name' => 'ともこ',
                'user_id' => 1
            ],
        ];
        DB::table('wives')->insert($param);
    }
}
