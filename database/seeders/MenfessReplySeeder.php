<?php

namespace Database\Seeders;

use App\Models\MenfessReply;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MenfessReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $menfess = DB::table('rumah_sakits')->pluck('id');
        for ($i = 0 ; $i <=2; $i++){
            MenfessReply::create([
                // 'hospital_id' => $temp[0],
                'menfess_id' => $i+1,
                'user_id' => mt_rand(1,4),
                'reply_image' => 'https://images.pexels.com/photos/618923/pexels-photo-618923.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'reply_text' => $faker->paragraph(10),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
