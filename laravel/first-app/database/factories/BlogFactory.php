<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(1, 8)),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->sentence(mt_rand(10, 25)),
            "body" => $this->faker->paragraph(mt_rand(5, 10)),
            "category_id" => mt_rand(1, 2),
            "user_id" => mt_rand(1, 10)
        ];
    }
}
