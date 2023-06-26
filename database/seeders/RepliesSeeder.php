<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RepliesSeeder extends Seeder
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
        DB::table('replies')->insert([
            'menfess_id' => '1',
            'user_id' => '11',
            'reply_image' => 'https://images.pexels.com/photos/4474052/pexels-photo-4474052.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'reply_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);

        DB::table('replies')->insert([
            'menfess_id' => '2',
            'user_id' => '12',
            'reply_image' => 'https://images.pexels.com/photos/4474052/pexels-photo-4474052.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'reply_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);

        DB::table('replies')->insert([
            'menfess_id' => '3',
            'user_id' => '13',
            'reply_image' => 'https://images.pexels.com/photos/4474052/pexels-photo-4474052.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'reply_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ]);
    }
}
