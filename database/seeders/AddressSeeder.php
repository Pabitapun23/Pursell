<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert(array(
            array(
                'city' => "Kathmandu",

            ),
            array(
                'city' => "Pokhara",
            ),
            array(
                'city' => "Lalitpur",

            ),
            array(
                'city' => "Birgunj",
            ),
            array(
                'city' => "Biratnagar",

            ),
            array(
                'city' => "Bharatpur",
            ),
            array(
                'city' => "Janakpur",

            ),
            array(
                'city' => "Hetauda",
            ),
            array(
                'city' => "Nepalgunj",

            )
        ));
    }
}
