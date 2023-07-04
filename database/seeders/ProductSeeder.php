<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Factory::create();

        $categories = ['Body Care', 'Pakaian', 'Makanan', 'Peralatan'];
        $nama = ['Bedak Super', 'Sabun Unyu', 'Minyak Kelon'];

        for ($i = 0; $i <= 7; $i++) {
            DB::table('products')->insert([
                'name_product' => $nama[mt_rand(0,2)],
                'type_product' => $faker->randomElement($categories),
                'rating' => mt_rand(1, 5),
            ]);
        }
    }
}
