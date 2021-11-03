<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdealHusbandSeeder extends Seeder
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
                'husband_id' => 1,
                'ideal_category_id' => 1,
                'ideal' => '○○でいてほしい。',
            ],
            [
                'husband_id' => 1,
                'ideal_category_id' => 2,
                'ideal' => '○○しないでほしい。',
            ],
            [
                'husband_id' => 1,
                'ideal_category_id' => 3,
                'ideal' => '○○は毎週すること。',
            ],
        ];
        DB::table('ideal_husbands')->insert($param);
    }
}
