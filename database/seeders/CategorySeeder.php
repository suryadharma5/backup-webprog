<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $name = ["Mom's corner", "Dad's Corner", "Mom & Dad's Corner", "Family's Corner", "Everyone's Corner"];

        for ($i = 0 ; $i <=4; $i++){
            Category::create([
                'name' => $name[$i],
            ]);
        }
    }
}
