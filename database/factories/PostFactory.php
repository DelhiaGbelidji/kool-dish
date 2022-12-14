<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'title' => 'Die Catze',
            'content' => "Mon chat est trop mignon",
            'picture' => $this->faker->imageUrl(640, 480, 'cats'),
        ];
    }
}