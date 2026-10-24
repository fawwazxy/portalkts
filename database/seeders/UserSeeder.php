<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'phone_no' => '0123456789',
            'email' => 'admin@gmail.com',
            'ic_num' => '990421115080',
            'password' => Hash::make('abc123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
