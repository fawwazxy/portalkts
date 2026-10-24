<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quantities')->insert([
            [
                'name' => 'Lecturer',
                'total' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Student',
                'total' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
