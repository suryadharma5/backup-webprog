<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        User::create([
            'username' => 'suryadharmas',
            'is_admin' => 1,
            'firstname' => 'surya',
            'lastname' => 'dharmas',
            'dob' => '1979-06-09',
            'nik' => '1234567890123456',
            'biodata' => $faker->text(),
            'phone_number' => '08775461234',
            'email' => 'setiawansurya03@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //factory(parameter jumlah yang ingin dibuat)

        User::factory(3)->create();

        
        $this->call([
            IndoRegionProvinceSeeder::class,
            IndoRegionRegencySeeder::class,
            RumahSakitSeeder::class,
            DoctorSeeder::class,
            MenfessSeeder::class,
            CategorySeeder::class,
            JaninSeeder::class,
            // ProductSeeder::class,
        ]);
        Article::factory(20)->create();
    }
}
