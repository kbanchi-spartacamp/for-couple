<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdealWifeSeeder extends Seeder
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
                'wife_id' => 1,
                'ideal_category_id' => 1,
                'ideal' => '○○でいてほしい。',
            ],
            [
                'wife_id' => 1,
                'ideal_category_id' => 2,
                'ideal' => '○○しないでほしい。',
            ],
            [
                'wife_id' => 1,
                'ideal_category_id' => 3,
                'ideal' => '○○は毎週すること。',
            ],
        ];
        DB::table('ideal_wives')->insert($param);
    }
}
