<?php

namespace Database\Seeders;

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
        DB::table('menfesses')->insert([
            'user_id' => '1',
            'title' => 'Bagaimana cara saya menurunkan berat badan setelah hamil 9 bulan?',
            'total_likes' => $faker->numberBetween(0, 100),
            'total_replies' => $faker->numberBetween(0, 10),
            'menfess_image' => 'https://images.pexels.com/photos/4474052/pexels-photo-4474052.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'menfess_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);

        DB::table('menfesses')->insert([
            'user_id' => '2',
            'title' => 'Bagaimana cara memiliki anak kembar? Apakah harus keturunan?',
            'total_likes' => $faker->numberBetween(0, 100),
            'total_replies' => $faker->numberBetween(0, 10),
            'menfess_image' => 'https://images.pexels.com/photos/2132663/pexels-photo-2132663.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'menfess_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);

        DB::table('menfesses')->insert([
            'user_id' => '3',
            'title' => 'Apakah ibu hamil boleh tetap aktif bekerja?',
            'total_likes' => $faker->numberBetween(0, 100),
            'total_replies' => $faker->numberBetween(0, 10),
            'menfess_image' => 'https://images.pexels.com/photos/618923/pexels-photo-618923.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'menfess_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);
    }
}
