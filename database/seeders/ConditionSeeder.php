<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert(array(
            array(
                'city' => "Brand New",

            ),
            array(
                'city' => "New Like",
            ),
            array(
                'city' => "Used",

            ),
          
        ));
    }
}
