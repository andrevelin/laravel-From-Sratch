<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Laravel will create a user an automatic assign to the user_id
            'category_id' => Category::factory(), // Laravel will create a Post and automatically assign to the user_id
            'title' => $this->faker->sentence,
            'excerpt' => '<p>' . implode('</p><p>' , $this->faker->paragraphs(2 )) . '</p>',
            'body' => '<p>' . implode('</p><p>' , $this->faker->paragraphs(2 )) . '</p>',
            'slug' => $this->faker->slug


        ];
    }
}
