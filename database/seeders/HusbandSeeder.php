<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HusbandSeeder extends Seeder
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
                'name' => 'いちろう',
                'user_id' => 1
            ],
            [
                'name' => 'じろう',
                'user_id' => 2
            ],
            [
                'name' => 'さぶろう',
                'user_id' => 3
            ],
        ];
        DB::table('husbands')->insert($param);
    }
}
