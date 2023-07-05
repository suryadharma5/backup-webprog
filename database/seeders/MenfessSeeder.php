<?php

namespace Database\Seeders;

use App\Models\Menfess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MenfessSeeder extends Seeder
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
        $user = DB::table('users')->pluck('id');
        for ($i = 0 ; $i <=2; $i++){
            $temp = $user->shuffle();
            Menfess::create([
                // 'hospital_id' => $temp[0],
                'user_id' => $user[$i],
                'title' => $faker->sentence(20),
                'total_likes' => $faker->numberBetween(0, 100),
                'total_replies' => $faker->numberBetween(0, 10),
            ]);
        }

    }
}
