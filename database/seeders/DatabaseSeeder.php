<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Factory::create();
        for($i=0; $i<100; $i++) {
            DB::table('students')->insert([
                'name'=> $faker->name,
                'email'=> $faker->email,
                'dob'=> $faker->date('Y-m-d', now()),
                'id_teacher'=>rand(1,10)
            ]);
    }

    }
}
