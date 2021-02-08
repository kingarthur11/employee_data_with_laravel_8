<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('employees')->insert([
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                // 'phonenumber' => $faker->phonenumber,
            ]);
        }
    }
}
