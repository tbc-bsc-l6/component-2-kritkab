<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([1, 0]), // 1 for Active, 0 for Blocked
            'image' => $this->faker->imageUrl(), // fake image URL, or you can use any custom logic
        ];
    }
}
