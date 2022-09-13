<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'admin', 'email' => 'admin@gmail.com', 'role' => 1, 'phoneno' => '111', 'email_verified_at' => now(), 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Pabita', 'email' => 'pabita.pun236@gmail.com', 'role' => 0, 'phoneno' => '222', 'email_verified_at' => now(), 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Rabita', 'email' => 'scorpionyazuka@gmail.com', 'role' => 0, 'phoneno' => '333', 'email_verified_at' => now(), 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('users')->insert($data);
    }
}
