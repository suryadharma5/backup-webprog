<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        DB::table('users')->insert([
            'username' => 'kerasakti',
            'dob' => $faker->date($format = 'Y-m-d', $max = '2000'),
            'email' => 'kersakti@gmail.com',
            'phone_number' => $faker->phoneNumber(),
            'password' => $faker->password(),
        ]);
        DB::table('users')->insert([
            'username' => 'mahmudcantik',
            'dob' => $faker->date($format = 'Y-m-d', $max = '2000'),
            'email' => 'mahmudcantik@gmail.com',
            'phone_number' => $faker->phoneNumber(),
            'password' => $faker->password(),
        ]);
        DB::table('users')->insert([
            'username' => 'mamipapi',
            'dob' => $faker->date($format = 'Y-m-d', $max = '2000'),
            'email' => 'mamipapi@gmail.com',
            'phone_number' => $faker->phoneNumber(),
            'password' => $faker->password(),
        ]);
    }
}
