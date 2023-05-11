<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(mt_rand(2,5)),
            'published_at' => $this->faker->date(),
            'body' =>  collect($this->faker->paragraphs(mt_rand(2,5)))->map(fn($p)=> "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1,2),
        ];
    }
}
