<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 1000; $i++){
            $faker = faker::create();
            DB::table('students') -> insert([
                'Firstname' => $faker -> firstName,
                'Lastname' => $faker -> lastName,
                'Age' => $faker -> numberBetween($min = 18, $max = 25)
            ]);
        }

    }
}
