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
            'day' => $this->faker->dayOfWeek(),
            'date' => $this->faker->dayOfMonth(),
            'month' => $this->faker->monthName(),
            'year' => $this->faker->year(),
            'body' =>  collect($this->faker->paragraphs(mt_rand(2,5)))->map(fn($p)=> "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1,5),
        ];
    }
}
