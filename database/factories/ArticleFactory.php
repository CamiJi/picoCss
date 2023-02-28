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
    public function definition(): array
    {
        return [
            
                'title' => $this->faker->sentence(),
                'subtitle' => $this->faker->sentence(),
                'content' => $this->faker->paragraphs(3, true),
                'image' => 'https://picsum.photos/640/480?random=' . $this->faker->numberBetween(1, 100),
                'published_at' => $this->faker->dateTimeThisYear()
            
        ];
    }

}
