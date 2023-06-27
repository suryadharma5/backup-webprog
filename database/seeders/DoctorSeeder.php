<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $rs = DB::table('rumah_sakits')->pluck('id');
        

        for ($i = 0 ; $i <=1000; $i++){
            $temp = $rs->shuffle();
            Doctor::create([
                'hospital_id' => $temp[0],
                // 'hospital_id' => $rs[$i],
                'title_id' => mt_rand(1,8),
                'doctor_name' => 'dr.'. ' ' . $faker->name(),
                'doctor_profile' => $faker->paragraph(mt_rand(6,9)),
                'year_experience' => mt_rand(1,10),
            ]);
        }
    }
}
