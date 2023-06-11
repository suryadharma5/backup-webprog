<?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $id_kabupaten = DB::table('regencies')->pluck('id');
       
        for ($i = 0 ; $i <=1000; $i++){
            $temp = $id_kabupaten->shuffle();
            RumahSakit::create([
                'regency_id' => $temp[0],
                'province_id' => substr($temp[0], 0, 2),
                'hospital_name' => 'RS'. ' '. $faker->company()
            ]);
        }
    }
}
