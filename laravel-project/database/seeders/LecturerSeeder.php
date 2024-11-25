<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create('id_ID');

        for ($i=0; $i < 50; $i++) { 
            $arr_departments = ['1', '2', '3'];
            $department = array_rand($arr_departments);

            DB::table('lecturers')->insert([
                'nidn' => rand(1111111111, 9999999999),
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'department_id' => $arr_departments[$department],
                'is_active' => rand(0,1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
