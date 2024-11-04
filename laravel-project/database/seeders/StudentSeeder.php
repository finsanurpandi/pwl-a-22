<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create('id_ID');

        for ($i=0; $i < 50; $i++) { 
            $year = $faker->randomElement(['2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024']);
            $department = DB::table('departments')->inRandomOrder()->first();
            $lecturer = DB::table('lecturers')->inRandomOrder()->first();

            $number = $faker->numberBetween(0, 99);
            $regNumber = '';
            
            if(strlen($number) == 1) {
                $regNumber = '00'.$number;
            } else {
                $regNumber = '0'.$number;
            }

            DB::table('students')->insert([
                'npm' => $department->code.''.substr($year, -2).''.$regNumber,
                'nama_lengkap' => $faker->name,
                'entry_year' => $year,
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'D', 'NR']),
                'department_id' => $department->id,
                'nidn' => $lecturer->nidn
            ]);
        }
    }
}
