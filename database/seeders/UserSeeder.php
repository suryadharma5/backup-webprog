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
             'firstname' => 'kera',
             'lastname' => 'sakti',
             'dob' => $faker->date($format = 'Y-m-d', $max = '2000'),
             'nik' => $faker->numerify('################'),
             'email' => 'kersakti@gmail.com',
             'phone_number' => $faker->phoneNumber(),
             'biodata' => $faker->text(),
             'password' => $faker->password(),
         ]);
         DB::table('users')->insert([
             'username' => 'mahmudcantik',
             'firstname' => 'mahmud',
             'lastname' => 'cantik',
             'dob' => $faker->date($format = 'Y-m-d', $max = '2000'),
             'nik' => $faker->numerify('################'),
             'biodata' => $faker->text(),
             'email' => 'mahmudcantik@gmail.com',
             'phone_number' => $faker->phoneNumber(),
             'password' => $faker->password(),
         ]);
         DB::table('users')->insert([
             'username' => 'mamipapi',
             'firstname' => 'mami',
             'lastname' => 'papi',
             'dob' => $faker->date($format = 'Y-m-d', $max = '2000'),
             'nik' => $faker->numerify('################'),
             'biodata' => $faker->text(),
             'email' => 'mamipapi@gmail.com',
             'phone_number' => $faker->phoneNumber(),
             'password' => $faker->password(),
         ]);
    }
}
