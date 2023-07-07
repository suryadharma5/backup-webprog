<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'suryadharmas',
            'dob' => '1979-06-09',
            'phone_number' => '08775461234',
            'email' => 'setiawansurya03@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //factory(parameter jumlah yang ingin dibuat)

        User::factory(3)->create();

        Article::factory(20)->create();

        $this->call([
            IndoRegionProvinceSeeder::class,
            IndoRegionRegencySeeder::class,
            RumahSakitSeeder::class,
            DoctorSeeder::class,
            MenfessSeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
