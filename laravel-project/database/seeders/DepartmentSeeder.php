<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'id' => 1,
                'code' => '22201',
                'name' => 'Teknik Sipil',
                'alias' => 'SI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'code' => '26201',
                'name' => 'Teknik Industri',
                'alias' => 'TI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'code' => '55201',
                'name' => 'Teknik Informatika',
                'alias' => 'IF',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
