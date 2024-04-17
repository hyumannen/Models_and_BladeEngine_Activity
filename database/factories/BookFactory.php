<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'id' => fake()->randomNumber(),
            'isbn' => fake()->randomNumber(),
            'title' => fake()->text(70),
            'author' => fake()->name(),
            'description' => fake()->text(250),
            'date_published' => fake()->dateTime(),
        ];
    }
}